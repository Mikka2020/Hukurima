<?php

require_once('./config.php');
require_once('./func.php');

// テスト用
// DBから全てのrecordを取り出す
function get_db_records($sql)
{
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  $result = mysqli_query($link, $sql);
  while ($row = mysqli_fetch_assoc($result)) {
    $records[] = $row;
  }
  mysqli_close($link);
  return $records;
}
$sql = "SELECT * FROM ";
$sql .= TABLES['101'];
$sql .= " INNER JOIN " .  TABLES['103']." ON " . TABLES['101'] . ".user_id = ". TABLES['103'] . ".user_id";
$sql .= " LEFT JOIN favorite ON favorite.favorite_listing_id = ". TABLES['101'] . ".listing_id";
$sql .= " ORDER BY listing_id DESC";
$sql .= " LIMIT 6";
$products_arr = get_db_records($sql);
require_once('./tpl/top.php');