<?php

require_once('./config.php');
require_once('./func.php');

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
  if (!isset($records)) {
    return [];
  }
  return $records;
}
// DBからrecordを一件取得する、一致するレコードがなければ空配列を返す
function get_db_record($sql)
{
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  $result = mysqli_query($link, $sql);
  if (!$result) {
    return [];
  }
  $record = mysqli_fetch_assoc($result);
  mysqli_close($link);
  return $record;
}


// postsとprofileを結合
$sql = "SELECT * FROM posts ";
$sql .= " INNER JOIN " . TABLES['103'] . " ON " .  " posts.member_id = " . TABLES['103'] . ".user_id ";
$sql .= " ORDER BY post_at DESC ";
$products_arr = get_db_records($sql);


require_once('./tpl/timeline.php');