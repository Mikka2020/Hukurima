<!-- <pre> -->
<?php
/**
 * 内容：商品一覧画面
 * 作成日：2021/12/17
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/17
 * 追加内容：全体的な処理（正常処理のみ）
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/31
 * 追加内容：ボタンタグでの遷移でなく、aタグの遷移に変更
 * ------------------------------------------------------------------------------------------------------------------------
 */


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 動作確認用固定値（後で削除する）
$conditions = ['search' => '', 'sort' => '', 'trend' => ''];
// $_SESSION['search'] = $conditions['search']; // テキストボックス
// $_SESSION['sort'] = $conditions['sort']; // セレクトボックス
// $_SESSION['trend'] = $conditions['trend']; // ラジオボタン


// 初期値
// $list_table = 'listing'; // テーブル名
// $member_table = 'member';
// $profile_table = 'profile';

// $conditions = ['search' => '' , 'sort' => 'favorite' , 'trend' => ''];

// 検索条件（後でコメント外す）
// if (isset($_POST['search'])){
//     $_SESSION['search'] = $_POST['search']; // テキストボックス
// } else if (isset($_POST['sort'])){
//     $_SESSION['sort'] = $_POST['sort']; // セレクトボックス
// } else if (isset($_POST['trend'])){
//     $_SESSION['trend'] = $_POST['trend']; // ラジオボタン
// }

// 検索条件に変更があれば対応させる処理
// if (isset($_SESSION['search'])) {
//   $conditions['search'] = $_SESSION['search'];
// } else if (isset($_SESSION['sort'])) {
//   $conditions['sort'] = $_SESSION['sort'];
// } else if (isset($_SESSION['trend'])) {
//   $conditions['trend'] = $_SESSION['trend'];
// }

// 表示させる処理
// $link = mysqli_connect(HOST, USER_ID, PASSWORD, DB_NAME);
// mysqli_set_charset($link, 'utf8');
// $line = get_column_order($link, TABLES['101'], TABLES['103'], $conditions);
// mysqli_close($link);


// 商品画像が押された時の処理
// if(isset($_POST['product_img'])){
//     $_SESSION['product_img'] = $line; // sessionに商品IDを入れる
//     header ('location:./entry_confirm.php');
//     exit;
// }

// ユーザアイコンが押された時の処理
// if(isset($_POST['btn_seller'])){
//     $_SESSION['seller_id'] = $line['id']; // sessionにユーザIDを入れる
//     header ('location:./entry_confirm.php');
//     exit;
// }

// ハートマークが押された時の処理
// if(isset($_POST['btn_favorite'])){
//     お気に入りをDBに登録する処理
//     header ('location:./entry_confirm.php');
//     exit;
// }

// var_dump($conditions);
// var_dump($line);
$tags = ['アウター', 'TheNorthFace', 'パーカー', 'DIESEL'];




// テスト用
$id = 0;
// ログインしているか
if (isset($_COOKIE['user_id'])) {
  // ログインしているとき
  $id = $_COOKIE['user_id'];
  // いいねボタンが押されたときの処理
  if (isset($_POST['favorite_btn'])) {
    // 選択した商品がいいねされているかどうか判断する
    {
      $sql = "SELECT * FROM ";
      $sql .= " favorite ";
      $sql .= " WHERE favorite_user_id = ";
      $sql .= $id;
      $sql .=  " AND favorite_listing_id = ";
      $sql .= $_POST['favorite_btn'];
    }

    if (get_db_record($sql) == []) {
      // いいねボタンを押した商品がfavoriteテーブルになかったらインサート処理
      $sql = "INSERT INTO ";
      $sql .= " favorite ";
      $sql .= " ( favorite_user_id, favorite_listing_id ) ";
      $sql .= " VALUES ";
      $sql .= " ( " . $id . ", " . $_POST['favorite_btn'] . " ) ";
    } else {
      // いいねボタンを押した商品がfavoriteテーブルにあったら削除処理
      $sql = "DELETE FROM ";
      $sql .= " favorite ";
      $sql .= " WHERE favorite_user_id = " . $id;
      $sql .= " AND favorite_listing_id = " . $_POST['favorite_btn'];
    }
    update_db($sql);
  }
}

// 商品を全件取得する。会員がいいねした商品の情報も同時に取得する。
{
  $sql = "SELECT * FROM ";
  $sql .= TABLES['101']; // listing
  $sql .= " INNER JOIN " .  TABLES['103'] . " ON " . TABLES['101'] . ".user_id = " . TABLES['103'] . ".user_id"; // listingとprofileをjoin
  $sql .= " LEFT JOIN favorite ON favorite.favorite_listing_id = " . TABLES['101'] . ".listing_id"; // favoriteをjoin
  $sql .= " AND favorite.favorite_user_id = " . $id; // ログインしている会員のfavoriteレコードのみ
  if (isset($_GET['search'])) { // 検索
    $conditions['search'] = $_GET['search'];
    $sql .= " WHERE " . TABLES['101'] . ".product_name LIKE '%" . $conditions['search'] . "%' "; // 検索条件
  }
  if (isset($_GET['sort'])) { // 並び替え
    // 高い
    if ($_GET['sort'] == 'hight_price') {
      $sql .= " ORDER BY price DESC";
    }
    // 安い
    elseif ($_GET['sort'] == 'low_price') {
      $sql .= " ORDER BY price ASC";
    }
    // 新着
    elseif ($_GET['sort'] == 'new') {
      $sql .= " ORDER BY listed_at DESC";
    }
    // いいねが多い順
    elseif ($_GET['sort'] == '') {
      // $sql .= " ORDER BY ";
    }
  } else {
    $sql .= " ORDER BY listing_id DESC";
  }
}

$products_arr = get_db_records($sql);





require_once './tpl/product.php';