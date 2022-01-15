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

// ログイン中のユーザーの出品履歴を取得する。取引状況を確認するため取引テーブルも結合。
{
    $sql = "SELECT * FROM ";
    $sql .= TABLES['101'];
    $sql .= " LEFT JOIN dealings ON listing.listing_id = dealings.listing_id";
    $sql .= " WHERE user_id = " . $_COOKIE['user_id'];
    $sql .= " ORDER BY listed_at DESC";
}
$listing_arr = get_db_records($sql);

// 商品が押された時の処理
// if(isset($_POST['class名'])){
//     $_SESSION['id'] = $line['id']; // 出品詳細画面で使用する
//     header('location:./listed_history.php');
//     exit;
// }


require_once('./tpl/listed_history_list.php');