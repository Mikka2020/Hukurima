<?php
session_start();
require_once('./config.php');
require_once('./func.php');

$id = $_COOKIE['user_id'];

$sql = "SELECT * FROM ";
$sql .= " listing ";
$sql .= " WHERE ";
$sql .= " user_id =  ";
$sql .= $id;
$sql .= " ORDER BY listing_id DESC ";

$products_arr = get_db_records($sql);
// var_dump($products_arr);

if (isset($_POST['select_submit'])) {
  $_SESSION['listing_id'] = $_POST['listing_product'];

  header('location:./post.php');
  exit;
}


require_once('./tpl/post_listed_history_list.php');