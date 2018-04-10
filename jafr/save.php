<?php
header('Content-type: text/html; charset=utf-8');
$val = $_GET['in'];

$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]" . "$val";
$line = mb_convert_encoding($line, 'UTF-8');
file_put_contents('input.log', $line  . PHP_EOL, FILE_APPEND);
?>