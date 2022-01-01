<?php

// テスト用
$listing = [
  'listing_id' => '1',
  'user_id' => '2',
  'product_name' => 'アシメレースアップリボンニット',
  'img_extension' => '.jpg',
  'price' => '3600',
  'product_explain' => 'これはサンプルテキストです。これはサンプルテキストです。これはサンプルテキストです。',
  'category' => 'ブラウス',
  'product_condition' => '0',
  'brand' => 'LAISSE PASSE',
  'days_to_ship' => '0',
  'cleaning_flg' => '1',
  'picking_flg' => '1',
  'listed_at' => '2000/10/01',
  'auto_approval' => '0',
];
$product_condition = ['ほぼ新品', '目立った傷や汚れなし', '中古'];
$days_to_ship = ['1~3日以内', '4~6日以内', '7日以上'];

require_once('./tpl/listing_confirm.php');