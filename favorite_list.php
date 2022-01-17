<?php



// 参照ファイル呼び出し
require_once './config.php';
require_once './func.php';

// 初期化
$listing_arr = [];


{
  $sql = "SELECT * , listing.user_id AS listing_user_id, listing.listing_id AS base_listing_id  FROM  ";
  $sql .= " favorite ";
  $sql .= " LEFT JOIN listing ON favorite.favorite_listing_id = listing.listing_id ";
  $sql .= "LEFT JOIN dealings ON listing.listing_id = dealings.listing_id";
  $sql .= " WHERE favorite.favorite_user_id = ". $_COOKIE['user_id'];
}
$listing_arr = get_db_records($sql);


require_once('./tpl/favorite_list.php');