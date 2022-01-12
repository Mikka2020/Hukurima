<?php

require_once('./config.php');
require_once('./func.php');

// テスト用
$id = 0;
if (isset($_COOKIE['user_id'])) {
  // ログインしているとき  
  $id = $_COOKIE['user_id'];
  $header_msg = "ログアウト";
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
} else {
  $header_msg = "ログイン";
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


require_once('./tpl/top.php');