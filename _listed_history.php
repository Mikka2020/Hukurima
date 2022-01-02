<?php

require_once('./config.php');
require_once('./func.php');

// テスト用
// DBから商品レコードを１つ取得
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
$table = 'listing';
$list = get_column($link, $table, 'listing_id', 1);
mysqli_close($link);

// var_dump($list);



require_once('./tpl/_listed_history.php');