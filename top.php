<?php

require_once('./config.php');
require_once('./func.php');

// テスト用

if (isset($_COOKIE['user_id'])) {
  // ログインしているとき  
  $id = $_COOKIE['user_id'];
  $header_msg = "ログアウト";
} else {
  $header_msg = "ログイン";
}

// いいねボタンが押されたときの処理
if (isset($_POST['favorite_btn'])) {
  // 選択した商品がいいねされているかどうか判断する
  {
    $sql = "SELECT * FROM ";
    $sql .= " favorite ";
    $sql .= " WHERE favorite_user_id = ";
    $sql .= $id;
    $sql .=  " AND favorite_listing_id = ";
    $sql .= $_POST['favorite_btn'];
  }

  if (get_db_record($sql) == []) {
    // いいねボタンを押した商品がfavoriteテーブルになかったらインサート処理
    $sql = "INSERT INTO ";
    $sql .= " favorite ";
    $sql .= " ( favorite_user_id, favorite_listing_id ) ";
    $sql .= " VALUES ";
    $sql .= " ( " . $id . ", " . $_POST['favorite_btn'] . " ) " ;
  } else {
    // いいねボタンを押した商品がfavoriteテーブルにあったら削除処理
    $sql = "DELETE FROM ";
    $sql .= " favorite ";
    $sql .= " WHERE favorite_user_id = " . $id;
    $sql .= " AND favorite_listing_id = " . $_POST['favorite_btn'];
  }
  update_db($sql);
}

// DBから全てのrecordを取り出す関数
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

// 最新の商品を6件取得する。会員がいいねした商品の情報も同時に取得する。
{
  $sql = "SELECT * FROM ";
  $sql .= TABLES['101'];
  $sql .= " INNER JOIN " .  TABLES['103'] . " ON " . TABLES['101'] . ".user_id = " . TABLES['103'] . ".user_id";
  $sql .= " LEFT JOIN favorite ON favorite.favorite_listing_id = " . TABLES['101'] . ".listing_id";
  $sql .= " AND favorite.favorite_user_id = " . $id;
  $sql .= " ORDER BY listing_id DESC";
  $sql .= " LIMIT 6";
}
$products_arr = get_db_records($sql);

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

// インサート処理
function update_db($sql) {
  $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
  mysqli_set_charset($link, 'utf8');
  mysqli_query($link, $sql);
  mysqli_close($link);
}


require_once('./tpl/top.php');