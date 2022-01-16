<?php

require_once('./config.php');
require_once('./func.php');

// テスト用
// DBから商品レコードを１つ取得
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
$table = 'listing';
$list = get_column($link, $table, 'listing_id', $_GET['id']);
mysqli_close($link);

// 出品者以外がアクセスしたとき
if ($list['user_id'] != $_COOKIE['user_id']) {
  header('location:./product_detail.php?id='.$_GET['id']);
  exit;
}

// var_dump($list);



require_once('./tpl/listed_history.php');