<?php

require_once('./config.php');
require_once('./func.php');


// postsとprofileを結合
$sql = "SELECT *, posts.member_id AS post_user_id FROM posts ";
$sql .= " INNER JOIN " . TABLES['103'] . " ON " .  " posts.member_id = " . TABLES['103'] . ".user_id ";
$sql .= " LEFT JOIN listing ON posts.listing_id = listing.listing_id ";
$sql .= " ORDER BY post_at DESC ";
$products_arr = get_db_records($sql);

$header_msg = "ログイン";
if(isset($_COOKIE['user_id'])) {
  $header_msg = "ログアウト";
}

require_once('./tpl/timeline.php');