<?php

// テスト用 高橋
require_once './config.php';
require_once './func.php';
$table = "listing";
$conditions = ['search' => '', 'sort' => 'favorite', 'trend' => ''];
$link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
mysqli_set_charset($link, 'utf8');
$line = get_column_order($link, $table, $conditions);
mysqli_close($link);
$product = $line[0];
// var_dump($product);

require_once('./tpl/product_detail.php');