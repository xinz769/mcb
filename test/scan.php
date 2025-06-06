<?php
$scanDir = __DIR__; // Lokasi folder target
$keywordPattern = ['eval', 'base64_decode', 'shell_exec', 'gzinflate']; // Pola mencurigakan

// Ambil nilai dari form
$daysBack = isset($_POST['days']) ? intval($_POST['days']) : 1;
$extensionSelected = isset($_POST['extension']) ? $_POST['extension'] : 'php';

// Dropdown hari
function renderDayOptions($selected) {
    $html = "";
    for ($i = 1; $i <= 30; $i++) {
        $sel = $selected == $i ? "selected" : "";
        $html .= "<option value='$i' $sel>$i hari</option>";
    }
    return $html;
}

// Dropdown ekstensi
function renderExtensionOptions($selected) {
    $extensions = ['php', 'py', 'txt', 'html', 'js'];
    $html = "";
    foreach ($extensions as $ext) {
        $sel = $selected == $ext ? "selected" : "";
        $html .= "<option value='$ext' $sel>.$ext</option>";
    }
    return $html;
}

function scanFiles($dir, $extension, $patterns, $daysBack) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $results = [];
    $timeLimit = time() - ($daysBack * 86400);

    foreach ($rii as $file) {
        if ($file->isDir()) continue;

        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if ($ext === $extension) {
            $lastModified = filemtime($file);
            if ($lastModified >= $timeLimit) {
                $content = @file_get_contents($file);
                foreach ($patterns as $pattern) {
                    if (stripos($content, $pattern) !== false) {
                        $results[] = [
                            'path' => $file->getPathname(),
                            'date' => date("Y-m-d H:i:s", $lastModified)
                        ];
                        break;
                    }
                }
            }
        }
    }

    return $results;
}
?>

<form method="post">
    <label for="days">Pilih berapa hari ke belakang:</label>
    <select name="days" id="days">
        <?= renderDayOptions($daysBack); ?>
    </select>

    <label for="extension">Jenis file yang ingin dicari:</label>
    <select name="extension" id="extension">
        <?= renderExtensionOptions($extensionSelected); ?>
    </select>

    <input type="submit" value="Scan Sekarang">
</form>

<hr>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['delete'])) {
    $foundFiles = scanFiles($scanDir, $extensionSelected, $keywordPattern, $daysBack);

    echo "<h3>File .$extensionSelected mencurigakan dalam $daysBack hari terakhir:</h3>";
    if (empty($foundFiles)) {
        echo "Tidak ada file mencurigakan ditemukan.";
    } else {
        echo "<form method='post'>";
        echo "<input type='hidden' name='days' value='" . htmlspecialchars($daysBack) . "'>";
        echo "<input type='hidden' name='extension' value='" . htmlspecialchars($extensionSelected) . "'>";
        foreach ($foundFiles as $file) {
            echo "<input type='checkbox' name='delete_files[]' value='" . htmlspecialchars($file['path']) . "'> "
                . htmlspecialchars($file['path']) . " | Terakhir diubah: " . $file['date'] . "<br>";
        }
        echo "<input type='submit' name='delete' value='Hapus File yang Dipilih'>";
        echo "</form>";
    }
}

if (isset($_POST['delete']) && !empty($_POST['delete_files'])) {
    echo "<h3>Hasil Penghapusan:</h3>";
    foreach ($_POST['delete_files'] as $fileToDelete) {
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
            echo "✅ Dihapus: " . htmlspecialchars($fileToDelete) . "<br>";
        } else {
            echo "⚠️ Gagal menghapus: " . htmlspecialchars($fileToDelete) . "<br>";
        }
    }
}
?>
