<?php
require_once('./config.php');

// テスト用
$listing = [
  'listing_id' => '2',
  'user_id' => '2',
  'product_name' => 'アシメレースアップリボンニット',
  'img_extension' => 'jpg',
  'price' => '3600',
  'product_explain' => 'これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。',
  'product_category' => 'ブラウス',
  'product_condition' => '0',
  'brand' => 'LAISSE PASSE',
  'days_to_ship' => '0',
  'cleaning_flg' => '1',
  'picking_flg' => '1',
  'listed_at' => '2000/10/01',
  'auto_approval' => '0',
];

require_once('./tpl/listing_confirm.php');