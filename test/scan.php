<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Scanner File Mencurigakan</title>
    <style>
        body {
            background-color: #1e1e2f;
            color: #cfcfcf;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }
        h3 {
            color: #f0f0f0;
        }
        label {
            display: block;
            margin-top: 15px;
        }
        select, input[type="submit"] {
            margin-top: 5px;
            padding: 8px;
            border-radius: 5px;
            border: none;
            font-size: 14px;
        }
        select {
            background-color: #2b2b3c;
            color: #ffffff;
        }
        input[type="submit"] {
            background-color: #3b82f6;
            color: white;
            cursor: pointer;
            margin-top: 15px;
        }
        input[type="submit"]:hover {
            background-color: #2563eb;
        }
        input[type="checkbox"] {
            margin-right: 8px;
        }
        form {
            margin-bottom: 30px;
        }
        hr {
            border: 0;
            border-top: 1px solid #444;
            margin: 20px 0;
        }
    </style>
</head>
<body>

<?php
$scanDir = __DIR__;
$keywordPattern = ['eval', 'base64_decode', 'shell_exec', 'gzinflate'];

$daysBack = isset($_POST['days']) ? intval($_POST['days']) : 1;
$extensionSelected = isset($_POST['extension']) ? $_POST['extension'] : 'php';

function renderDayOptions($selected) {
    $html = "";
    for ($i = 1; $i <= 30; $i++) {
        $sel = $selected == $i ? "selected" : "";
        $html .= "<option value='$i' $sel>$i hari</option>";
    }
    return $html;
}

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

<h2>🛡️ Deteksi File Mencurigakan</h2>

<form method="post">
    <label for="days">📅 Pilih berapa hari ke belakang:</label>
    <select name="days" id="days">
        <?= renderDayOptions($daysBack); ?>
    </select>

    <label for="extension">📁 Jenis file yang ingin dicari:</label>
    <select name="extension" id="extension">
        <?= renderExtensionOptions($extensionSelected); ?>
    </select>

    <input type="submit" value="🔍 Scan Sekarang">
</form>

<hr>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['delete'])) {
    $foundFiles = scanFiles($scanDir, $extensionSelected, $keywordPattern, $daysBack);

    echo "<h3>📂 Hasil Scan (File .$extensionSelected dalam $daysBack hari terakhir):</h3>";
    if (empty($foundFiles)) {
        echo "✅ Tidak ada file mencurigakan ditemukan.";
    } else {
        echo "<form method='post'>";
        echo "<input type='hidden' name='days' value='" . htmlspecialchars($daysBack) . "'>";
        echo "<input type='hidden' name='extension' value='" . htmlspecialchars($extensionSelected) . "'>";
        foreach ($foundFiles as $file) {
            echo "<input type='checkbox' name='delete_files[]' value='" . htmlspecialchars($file['path']) . "'> "
                . htmlspecialchars($file['path']) . " <i>(Terakhir diubah: " . $file['date'] . ")</i><br>";
        }
        echo "<input type='submit' name='delete' value='🗑️ Hapus File yang Dipilih'>";
        echo "</form>";
    }
}

if (isset($_POST['delete']) && !empty($_POST['delete_files'])) {
    echo "<h3>📌 Hasil Penghapusan:</h3>";
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

</body>
</html>
