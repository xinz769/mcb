<?php
$scanDir = __DIR__; // Bisa diubah ke folder target
$extensionsToFind = ['php', 'txt']; // Ekstensi file yang dicari
$keywordPattern = ['eval', 'base64_decode', 'shell_exec', 'gzinflate']; // Pola mencurigakan
$daysBack = 3; // Ganti jumlah hari sesuai kebutuhan

function scanFiles($dir, $extensions, $patterns, $daysBack) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $results = [];
    $timeLimit = time() - ($daysBack * 86400); // Konversi hari ke detik

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

$foundFiles = scanFiles($scanDir, $extensionsToFind, $keywordPattern, $daysBack);

echo "<h3>File mencurigakan dalam $daysBack hari terakhir:</h3>";
if (empty($foundFiles)) {
    echo "Tidak ada file mencurigakan ditemukan.";
} else {
    echo "<form method='post'>";
    foreach ($foundFiles as $file) {
        echo "<input type='checkbox' name='delete_files[]' value='" . htmlspecialchars($file['path']) . "'> "
            . htmlspecialchars($file['path']) . " | Terakhir diubah: " . $file['date'] . "<br>";
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
