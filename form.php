<?php
// 値を受け取る
$hoge = $_POST['hoge'];
$hello = "hello";
if ('' == $hoge) {
  // 未入力なら警告を出力
  echo "値が未入力です";
} else {
  // あいさつ
echo "$hello<br>\n";
  // 値を表示する
  echo htmlspecialchars($hoge, ENT_QUOTES, 'UTF-8');
}