<!-- <pre> -->
<?php
/**
 * 内容：出品画面
 * 作成日：2021/12/19
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/19
 * 追加内容：一連の流れを記述
 */


// 参照ファイル呼び出し
session_start();
require_once './config.php';
require_once './func.php';

// 動作確認用固定値
$_SESSION['product_id'] = 1;

// 初期値
$id = $_SESSION['product_id'];
$table = 'listing';
$column = 'id';


// 商品の配送状況の取得
$link = mysqli_connect(HOST , USER_ID, PASSWORD , DB_NAME);
mysqli_set_charset($link , 'utf8');
$line = get_column($link,$table,$column,$id);
mysqli_close($link);

// 返品を申請するボタンが押された時の処理
// if(isset($_POST['return_goods'])){
//     header ('location:./');
//     exit;
// }

// 問題を報告するボタンが押された時の処理
// if(isset($_POST['problem_report'])){
//     header ('location:./');
//     exit;
// }

// 評価画面へボタンが押された時の処理
// if(isset($_POST['go_evaluation'])){
//     header ('location:./');
//     exit;
// }

// 戻るボタンが押された時の処理(name="back")
// if(isset($_POST['back'])){
//     unset($_SESSION['id']);
//     header ('location:./');
//     exit;
// }


require_once './tpl/trading.php';




















// 複数画像を取得するコード
// ファイルがあれば処理実行
// if(isset($_FILES["upload_file"])){

//     // アップロードされたファイル件を処理
//     for($i = 0; $i < count($_FILES["upload_file"]["name"]); $i++ ){

//         // アップロードされたファイルか検査
//         if(is_uploaded_file($_FILES["upload_file"]["tmp_name"][$i])){

//             // ファイルをお好みの場所に移動
//             move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "./images/" . $_FILES["upload_file"]["name"][$i]);
//         }
//     }
// }