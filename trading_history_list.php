<?php
/**
 * 内容：取引履歴一覧画面
 * 作成日：2022/01/15
 * 作成者：小嶋美紀
 */


// 参照ファイル呼び出し
require_once './config.php';
require_once './func.php';

// ログイン中のユーザーが取引した履歴を取得する。出品した商品と購入した商品の両方を取得する。
{
  $sql = "SELECT * FROM ";
  $sql .= "dealings";
  $sql .= " LEFT JOIN listing ON dealings.listing_id = listing.listing_id";
  $sql .= " WHERE user_id = " . $_COOKIE['user_id'] . " OR dealings.buyer_user_id = " . $_COOKIE['user_id'];
  $sql .= " ORDER BY dealing_id DESC";
}
$dealing_arr = get_db_records($sql);

// 取引状態(0,1,9)によってCSSクラスを変更する
foreach($dealing_arr as $key => $value ){
  // 取引キャンセル
  if($value['dealing_flg'] == "0"){
    $dealing_arr[$key]['dealing_state'] = 'cancel';
  }
  // 取引中
  if($value['dealing_flg'] == "1"){
    $dealing_arr[$key]['dealing_state'] = 'active';
  }
  // 取引終了
  if($value['dealing_flg'] == "9"){
    $dealing_arr[$key]['dealing_state'] = 'finish';
  }
}

require_once './tpl/trading_history_list.php';