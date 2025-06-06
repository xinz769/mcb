<?php
$scanDir = __DIR__; // Bisa diganti ke path lain
$extensionsToFind = ['php', 'txt']; // Jenis file yang ingin dideteksi
$keywordPattern = ['eval', 'base64_decode', 'shell_exec', 'gzinflate']; // Pola umum malware

function scanFiles($dir, $extensions, $patterns) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $results = [];

    foreach ($rii as $file) {
        if ($file->isDir()) continue;

        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if (in_array($ext, $extensions)) {
            $content = file_get_contents($file);
            foreach ($patterns as $pattern) {
                if (stripos($content, $pattern) !== false) {
                    $results[] = $file->getPathname();
                    break;
                }
            }
        }
    }

    return $results;
}

$foundFiles = scanFiles($scanDir, $extensionsToFind, $keywordPattern);

echo "<h3>File mencurigakan yang terdeteksi:</h3>";
if (empty($foundFiles)) {
    echo "Tidak ada file mencurigakan ditemukan.";
} else {
    echo "<form method='post'>";
    foreach ($foundFiles as $file) {
        echo "<input type='checkbox' name='delete_files[]' value='" . htmlspecialchars($file) . "'> " . htmlspecialchars($file) . "<br>";
    }
    echo "<input type='submit' name='delete' value='Hapus File yang Dipilih'>";
    echo "</form>";
}

if (isset($_POST['delete']) && !empty($_POST['delete_files'])) {
    foreach ($_POST['delete_files'] as $fileToDelete) {
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
            echo "Dihapus: " . htmlspecialchars($fileToDelete) . "<br>";
        }
    }
}
?>
