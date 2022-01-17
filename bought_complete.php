<?php
session_start();
require_once('./config.php');
require_once('./func.php');

// 出品IDを入手
$listing_id = $_SESSION['bought_listing_id'];
unset($_SESSION['bought_listing_id']);

require_once('./tpl/bought_complete.php');
?>