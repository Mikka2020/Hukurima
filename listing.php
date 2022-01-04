<!-- <pre> -->
<?php
/**
 * 内容：出品画面
 * 作成日：2021/12/16
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/16
 * 追加内容：一連の流れを記述
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/31
 * 追加内容：画像ファイル関係（送信->フォルダ作成->画像登録）
 * ------------------------------------------------------------------------------------------------------------------------
 */


// 参照ファイル呼び出し
require_once './config.php';
require_once './func.php';

// 動作確認用
setcookie('user_id',2,time()+60*60*24);

// 初期値
// $input_listing_data = ['product_name' => '' , 'product_explan' => 0 , 'product_category' => '' , 'product_statu' => 0 , 'bland' => '' , 'send_days' => 0 , 'cleaning_flg' => 0 , 'pickup_flg' => 0 , 'price' => 0 , 'auto_approval' => 0]; // 入力された情報をセットする配列
// $err_msg = ['product_name' => '' , 'product_explan' => '' , 'product_category' => '' , 'product_statu' => '' , 'bland' => '' , 'send_days' => '' , 'cleaning_flg' => '' , 'pickup_flg' => '' , 'price' => '' , 'auto_approval' => '']; // エラー出力用配列
// $input_listing_label = ['product_name' => '商品名' , 'product_explan' => '商品説明' , 'product_category' => 'カテゴリ' , 'product_statu' => '商品の状態' , 'bland' => 'ブランド' , 'send_days' => '配達までの日数' , 'cleaning_flg' => 'クリーニングオプション' , 'pickup_flg' => '集荷オプション' , 'price' => '価格' , 'auto_approval' => '購入申請自動許可フラグ']; // 添字に対するラベル名がセットされている配列

// 高橋DBに合わせて配列を変更
$input_listing_data = ['user_id' => '' , 'product_name' => '' , 'img_extension' => '' ,  'price' => 0 , 'product_explain' => '' , 'product_category' => '' ,  'product_condition' => 0 , 'brand' => '' , 'days_to_ship' => 0 , 'cleaning_flg' => 0 , 'picking_flg' => 0 , 'auto_approval' => 0]; // 入力された情報をセットする配列
$err_msg = ['user_id' => '' , 'product_name' => '' , 'img_extension' => '' ,  'price' => '' , 'product_explain' => '' , 'product_category' => '' ,  'product_condition' => '' , 'brand' => '' , 'days_to_ship' => '' , 'cleaning_flg' => '' , 'picking_flg' => '' , 'auto_approval' => '']; // エラー出力用配列
$input_listing_label = ['user_id' => 'ユーザID' , 'product_name' => '商品名' , 'img_extension' => '画像' ,  'price' => '価格' , 'product_explain' => '商品説明' , 'product_category' => 'カテゴリ' ,  'product_condition' => '商品の状態' , 'brand' => 'ブランド' , 'days_to_ship' => '配送までの日数' , 'cleaning_flg' => 'クリーニングオプション' , 'picking_flg' => '集荷オプション' , 'auto_approval' => '購入申請自動許可オプション']; // 添字に対するラベル名がセットされている配列
$array_check_value = ['商品名','カテゴリ','商品説明','価格','ブランド'];

// ユーザID代入
$input_listing_data['user_id'] = $_COOKIE['user_id'];

// 入力値チェック（出品ボタン）
if(isset($_POST['listing_btn'])){

    // 空白値チェック（商品名・商品説明・ハッシュタグ・価格の４種類は「入力されていません」それ以外は「選択されていません」）
    foreach ($input_listing_data as $key => $value) {
        if(!isset($_POST[$key])){
            if(err_judge($input_listing_label[$key],$array_check_value) === true){
                $err_msg[$key] = $input_listing_label[$key].'が入力されていません';
            } else {
                $err_msg[$key] = $input_listing_label[$key].'が選択されていません';
            }
        } else {
            $input_listing_data[$key] = $_POST[$key];
        }
    }

    // 画像のチェック処理
    $name = $_FILES['product_img']['name'];
    $ext = pathinfo($_FILES['product_img']['name']);
    $input_listing_data['img_extension'] = $ext['extension'];
    $file_name = './img/users/' . $_COOKIE['user_id'] . '/' . $input_listing_data['product_name'] . '_1.' . $ext['extension'];
    move_uploaded_file($_FILES['product_img']['tmp_name'],$file_name);

    // エラーがなかった時の処理
    if(!isset($err_msg)){
        $_SESSION['listing_data'] = $input_listing_data;
        header('location:./listing_confirm.php');
        exit;
    }
}
var_dump($input_listing_data);

// 下書きボタンが押された時の処理
// if(isset($_POST['save_btn'])){
    
// }

// 戻るボタンが押された時の処理(name="back")
// if(isset($_POST['back'])){
//     header ('location:./');
//     exit;
// }

// var_dump($err_msg);

require_once './tpl/_listing.php';




















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