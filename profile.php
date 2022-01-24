<!-- <pre> -->
<?php
/**
 * 内容：プロフィール画面
 * 作成日：2021/12/19
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/19
 * 追加内容：全体的な処理（正常処理のみ）
 * ------------------------------------------------------------------------------------------------------------------------
 */


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 初期値
$user_id = $_GET['user_id'];
$column = 'user_id';

// profileを取得
$sql = "SELECT * FROM profile WHERE user_id = " . $user_id;
$profile = get_db_record($sql);

// 評価を取得
{
  // 出品時の評価
  $sql = " SELECT ";
  $sql .= " SUM(to_listing_evaluation) AS listing_eval, COUNT(*) AS listing_cnt ";
  $sql .= " FROM ";
  $sql .= " evaluations ";
  $sql .= " WHERE ";
  $sql .= " listing_user_id = " . $user_id;
  $sql .= " AND to_listing_evaluation IS NOT NULL ";
  $sql .= " GROUP BY listing_user_id ";
  $listing_evaluation = get_db_record($sql);
} {
  // 購入時の評価
  $sql = " SELECT ";
  $sql .= " SUM(to_buyer_evaluation) AS buyer_eval, COUNT(*) AS buyer_cnt ";
  $sql .= " FROM ";
  $sql .= " evaluations ";
  $sql .= " WHERE ";
  $sql .= " buyer_user_id = " . $user_id;
  $sql .= " AND to_buyer_evaluation IS NOT NULL ";
  $sql .= " GROUP BY buyer_user_id ";
  $buyer_evaluation = get_db_record($sql);
}
// 購入時と販売時を合わせた評価
$evaluation['eval_val'] = ($listing_evaluation['listing_eval'] + $buyer_evaluation['buyer_eval']) / ($listing_evaluation['listing_cnt'] + $buyer_evaluation['buyer_cnt']);
// 評価された回数
$evaluation['eval_cnt'] = ($listing_evaluation['listing_cnt'] + $buyer_evaluation['buyer_cnt']);
// 過去の出品履歴を取得
$sql = " SELECT * ,listing.listing_id AS id ,dealings.listing_id AS dealing_listing_id ";
$sql .= " FROM ";
$sql .= " listing ";
$sql .= " LEFT JOIN dealings ON dealings.listing_id = listing.listing_id ";
$sql .= " WHERE listing.user_id = " . $user_id;
$sql .= " ORDER BY listing.listed_at DESC ";
$products_arr = get_db_records($sql);
$listing_cnt = count($products_arr);

// 投稿した数を取得
$sql = " SELECT *, COUNT(*) AS post_cnt FROM posts WHERE member_id = " . $user_id;
$post_cnt = get_db_record($sql)['post_cnt'];



require_once './tpl/profile.php';