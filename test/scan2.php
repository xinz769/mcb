<?php
$scanDir = __DIR__;
$keywordPattern = ['eval', 'base64_decode', 'shell_exec', 'gzinflate'];

$daysBack = isset($_POST['days']) ? intval($_POST['days']) : 1;
$extensionSelected = $_POST['extension'] ?? 'php';
$scanAll = isset($_POST['scan_all']); // Checkbox "scan semua"

function scanFiles($dir, $extension, $patterns, $daysBack, $scanAll) {
    $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    $results = [];
    $timeLimit = time() - ($daysBack * 86400);

    foreach ($rii as $file) {
        if ($file->isDir()) continue;

        $ext = pathinfo($file, PATHINFO_EXTENSION);
        if ($ext === $extension) {
            $lastModified = filemtime($file);
            if ($lastModified >= $timeLimit) {
                $path = $file->getPathname();
                $date = date("Y-m-d H:i:s", $lastModified);

                if ($scanAll) {
                    // Tampilkan semua file baru, tanpa cek konten
                    $results[] = ['path' => $path, 'date' => $date];
                } else {
                    $content = @file_get_contents($path);
                    foreach ($patterns as $pattern) {
                        if (stripos($content, $pattern) !== false) {
                            $results[] = ['path' => $path, 'date' => $date];
                            break;
                        }
                    }
                }
            }
        }
    }

    return $results;
}
