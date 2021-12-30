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
$conditions = ['目立った傷や汚れなし', '', '中古'];
$days_to_ship = ['1~3日以内', '4~6日以内', '1週間以上'];
$cleaning = ['不可', '可'];
$picking = ['自宅集荷しない', '自宅集荷する'];

require_once('./tpl/_listed_history.php');