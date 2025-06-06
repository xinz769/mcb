<?php
$scanDir = __DIR__; // Folder target
$extensionsToFind = ['php', 'txt'];
$keywordPattern = ['eval', 'base64_decode', 'shell_exec', 'gzinflate'];

$daysBack = isset($_POST['days']) ? intval($_POST['days']) : 3; // Default 3 hari

function scanFiles($dir, $extensions, $patterns, $daysBack) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $results = [];
    $timeLimit = time() - ($daysBack * 86400);

    foreach ($rii as $file) {
        if ($file->isDir()) continue;

        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array($ext, $extensions)) {
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
    <label for="days">Cari file mencurigakan dalam berapa hari terakhir:</label>
    <input type="number" name="days" id="days" value="<?php echo htmlspecialchars($daysBack); ?>" min="1">
    <input type="submit" value="Scan Sekarang">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $foundFiles = scanFiles($scanDir, $extensionsToFind, $keywordPattern, $daysBack);

    echo "<h3>File mencurigakan dalam $daysBack hari terakhir:</h3>";
    if (empty($foundFiles)) {
        echo "Tidak ada file mencurigakan ditemukan.";
    } else {
        echo "<form method='post'>";
        echo "<input type='hidden' name='days' value='" . htmlspecialchars($daysBack) . "'>";
        foreach ($foundFiles as $file) {
            echo "<input type='checkbox' name='delete_files[]' value='" . htmlspecialchars($file['path']) . "'> "
                . htmlspecialchars($file['path']) . " | Terakhir diubah: " . $file['date'] . "<br>";
        }
        echo "<input type='submit' name='delete' value='Hapus File yang Dipilih'>";
        echo "</form>";
    }
}

if (isset($_POST['delete']) && !empty($_POST['delete_files'])) {
    foreach ($_POST['delete_files'] as $fileToDelete) {
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
            echo "✅ Dihapus: " . htmlspecialchars($fileToDelete) . "<br>";
        }
    }
}
?>
