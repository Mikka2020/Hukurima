<!-- <pre> -->
<?php
/**
 * 内容：出品画面
 * 作成日：2021/12/16
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * 変更日：2021/12/16
 * 追加内容：一連の流れを記述
 */


// 参照ファイル呼び出し
require_once './config.php';
require_once './func.php';

// 初期値
$input_listing_data = ['product_name' => '' , 'product_explan' => '' , 'hash_tag' => '' , 'category' => '' , 'product_statu' => '' , 'bland' => '' , 'send_days' => '' , 'cleaning_flg' => '' , 'pickup_flg' => '' , 'price' => '']; // 入力された情報をセットする配列
$err_msg = ['product_name' => '' , 'product_explan' => '' , 'hash_tag' => '' , 'category' => '' , 'product_statu' => '' , 'bland' => '' , 'send_days' => '' , 'cleaning_flg' => '' , 'pickup_flg' => '' , 'price' => '']; // エラー出力用配列
$input_listing_label = ['product_name' => '商品名' , 'product_explan' => '商品説明' , 'hash_tag' => 'ハッシュタグ' , 'category' => 'カテゴリ' , 'product_statu' => '商品の状態' , 'bland' => 'ブランド' , 'send_days' => '配達までの日数' , 'cleaning_flg' => 'クリーニングオプション' , 'pickup_flg' => '集荷オプション' , 'price' => '価格']; // 添字に対するラベル名がセットされている配列
$array_check_value = ['商品名','商品説明','ハッシュタグ','価格'];

// 入力値チェック（出品ボタン）
if(isset($_POST['listing'])){
    // 画像のチェック処理
    
    // 空白値チェック（商品名・商品説明・ハッシュタグ・価格の４種類は「入力されていません」それ以外は「選択されていません」）
    foreach ($input_listing_data as $key => $value) {
        if($_POST[$key] == ''){
            if(err_judge($input_listing_label[$key],$array_check_value) === true){
                $err_msg[$key] = $input_listing_label[$key].'が入力されていません';
            } else {
                $err_msg[$key] = $input_listing_label[$key].'が選択されていません';
            }
        } else {
            $input_listing_data[$key] = $_POST[$key];
        }
    }
}


// 下書きボタンが押された時の処理
// if(){
    // 下書きボタンが押された時に下書きを保存する処理
// }

// 戻るボタンが押された時の処理(name="back")
// if(isset($_POST['back'])){
//     header ('location:./');
//     exit;
// }



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

require_once('./tpl/listing.php');