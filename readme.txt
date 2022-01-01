cssファイルの先頭に
  @import url("./destyle.css");
  @import url("./style.css");
を記入。
cssファイルはhtmlファイルと同じ名前をつけること。
全ページ共有のデザインはstyle.cssに書く。

命名規則

$listing = [
  'listing_id' => '',
  'user_id' => '',
  'product_name' => '',
  'img_extension' => '',
  'price' => '',
  'product_explain' => '',
  'category' => '',
  'product_condition' => '',
  'brand' => '',
  'days_to_ship' => '',
  'cleaning_flg' => '',
  'picking_flg' => '',
  'listed_at' => '',
  'auto_approval' => '',
];