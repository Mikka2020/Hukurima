<?php

require_once('./config.php');
require_once('./func.php');


// postsとprofileを結合
$sql = "SELECT * FROM posts ";
$sql .= " INNER JOIN " . TABLES['103'] . " ON " .  " posts.member_id = " . TABLES['103'] . ".user_id ";
$sql .= " ORDER BY post_at DESC ";
$products_arr = get_db_records($sql);


require_once('./tpl/timeline.php');