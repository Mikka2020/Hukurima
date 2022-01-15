<!-- <pre> -->
<?php
/**
 * 内容：出品履歴一覧画面
 * 作成日：2021/12/29
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/29
 * 追加内容：一連の流れを記述（並び替え・絞り込みボタンは一旦無視）
 * ------------------------------------------------------------------------------------------------------------------------
 * 編集者：小嶋美紀
 * 変更日：2022/01/15
 * 変更内容：正しくデータを表示できるよう変更
 */


// 参照ファイル呼び出し
require_once './config.php';
require_once './func.php';

// 初期化
$listing_arr = [];


// ログイン中のユーザーの出品履歴を取得する。取引状況を確認するため取引テーブルも結合。
{
  $sql = "SELECT listing.listing_id , listing.user_id , listing.product_name , listing.img_extension , listing.price , listing.listed_at , dealings.dealing_flg , COUNT(dealing_requests.listing_id) AS requests_sum FROM ";
  $sql .= TABLES['101'];
  $sql .= " LEFT JOIN dealings ON listing.listing_id = dealings.listing_id";
  $sql .= " LEFT JOIN dealing_requests ON listing.listing_id = dealing_requests.listing_id";
  $sql .= " WHERE user_id = " . $_COOKIE['user_id'];
  $sql .= " GROUP BY listing_id";
  $sql .= " HAVING listing_id";
  $sql .= " ORDER BY listed_at DESC";
}
$listing_arr = get_db_records($sql);


// 購入状態によってCSSクラスを変更する
foreach($listing_arr as $key => $value){
  if($value['dealing_flg'] == 0){
    // 取引キャンセル
    $listing_arr[$key]['dealing_state'] = 'sale';
  } else if($value['dealing_flg'] == 1 || $value['dealing_flg'] == 9){
    // 取引中、取引終了後
    $listing_arr[$key]['dealing_state'] = 'sold';
  }else{
    // 未取引
    $listing_arr[$key]['dealing_state'] = 'sale';
  }
}


require_once('./tpl/listed_history_list.php');