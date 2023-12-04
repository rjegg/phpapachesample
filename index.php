<?php

// ホスト名を取得する
$hostname = gethostname();

// 時刻を取得する
$time = date("Y-m-d H:i:s");

// クライアントIPを取得する
$ip = $_SERVER["REMOTE_ADDR"];

// 結果を出力する
echo "ホスト名：{$hostname}\n";
echo "時刻：{$time}\n";
echo "クライアントIP：{$ip}\n";

?>
