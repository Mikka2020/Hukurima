<?php

require_once('./config.php');
require_once('./func.php');

// $listing_id = $_SESSION['bought_product_info'];
$listing_id = 20;
// session_destroy();

$sql = "SELECT * FROM listing WHERE listing_id = " . $listing_id;
$product = get_db_record($sql);


require_once('./tpl/evaluate_complete.php');