<?php
// 値を受け取る
$hoge = $_POST['hoge'];

$hello = "hello";
// あいさつ
echo "$hello<br>\n";
// 値を表示する
echo htmlspecialchars($hoge, ENT_QUOTES, `UTF-8`);