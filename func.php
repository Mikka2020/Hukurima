<?php
/**
 * 内容：関数ファイル
 * 作成開始日：2021/12/16
 * 作成者：小川慧
 * ------------------------------------------------------------------------------------------------------------------------
 * ラインナップ：
 * htmlのサニタイジング（変数名：h($check_value)）
 * sqlのサニタイジング（変数名：m($link,$message)）
 * エラー文の分岐（変数名：err_judge($check_value,$array)）
 * 
 * 
 * SQL系：
 * 1レコード取得のクエリ組み立て（変数名：assemb_get_column($table,$column,$id)）
 * 1レコード取得（変数名：get_column($link,$table,$column,$id)）
 * 全件取得のクエリ組み立て（変数名：assemb_get_all($table)）
 * 全件取得（変数名：get_all($link,$table)）
 * 検索条件１つで取得のクリエの組み立て（変数名：assemb_get_lots_of($table,$column,$id)）<int型>
 * 検索条件１つで取得（変数名：get_lots_of($link,$table,$column,$id)）<int型>
 * 商品一覧画面でしか使えないクエリを組み立てる関数（変数名：assemb_get_column_order($table,$conditions)）
 * 商品一覧画面でしか使えない関数（変数名：get_column_order($link,$table,$column,$id)）
 * 並び替え条件の取得（変数名：which_sort($value)）
 * 複数条件で取得するクエリを組み立てる関数（変数名：assemb_get_column_multiple_condition($table,$conditions,$product_name)）
 * 複数条件で取得する関数（変数名：get_column_multiple_condition($link,$table,$conditions,$product_name)）
 * 評価するためのクエリを組み立てるする関数（変数名：assemb_evaluate($table,$flg,$message)）
 * 評価する関数（変数名：evaluate($link,$table,$flg,$message)）
 * 会員登録するためのクエリを組み立てるする関数（変数名：assemb_entry($table,$input_entry_data,$input_entry_label)）
 * 会員登録する関数（変数名：entry($link,$table,$input_entry_data,$input_entry_label)）
 * ログインするためのクエリを組み立てるする関数（変数名：assemb_get_id($table,$login_id,$password)）
 * ログインする関数（変数名：get_id($link,$table,$login_id,$password)）
 * 検索条件１つで取得のクリエの組み立て（変数名：assemb_get_lots_of_string($table,$column,$id)）<string型>
 * 検索条件１つで取得（変数名：get_lots_of_string($link,$table,$column,$id)）<string型>
 * 上から5レコード取得のクエリ組み立て（変数名：assemb_get_five_column($table,$column,$id)）
 * 上から5レコードレコード取得関数（変数名：get_five_column($link,$table,$column,$id)）
 * インサートクエリ組み立て（変数名：assemb_insert($table,$columns,$column,$values,$user_id)）
 * インサート関数（変数名：insert($link,$table,$columns,$column,$values,$user_id)）
 * ------------------------------------------------------------------------------------------------------------------------
*/



/*
* 概要：表示させる情報をサニタイジングする関数
* 戻り値：サニタイズされた値
*/
function h($check_value){
    return htmlspecialchars($check_value,ENT_QUOTES,'UTF-8');
}

/*
* 概要：データベースに登録する情報をサニタイジングする関数
* 戻り値：サニタイズされた値
*/
function m($link,$message){
    return mysqli_real_escape_string($link,$message);
}

/* 
* 概要：入力値チェックでのエラー文を分岐させる関数（出品画面で使用）
* 戻り値：true/false
*/
function err_judge($check_value,$array){
    foreach ($array as $value) {
        if ($check_value == $value){
            return true;
        }
    }
    return false;
}


// --------------------------------------------------sql系--------------------------------------------------
/* 
* 概要：テーブルから1レコード取得するクエリを組み立てる関数（購入画面で使用）
* 戻り値：SQL文
*/
function assemb_get_column($table,$column,$id){
    $query = "SELECT * FROM ";
    $query .= $table;
    $query .= " WHERE ".$column." = ";
    $query .= $id;
    return $query;
}

/* 
* 概要：テーブルから1レコード取得するクエリを組み立てる関数（購入画面で使用）
* 戻り値：連想配列
*/
function get_column($link,$table,$column,$id){
    $query = assemb_get_column($table,$column,$id);
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

/*
* 概要：テーブルから全件取得するクエリを組み立てる関数（購入画面で使用）
* 戻り値：SQL文
*/
function assemb_get_all($table,$column,$where){
    $query = "SELECT * FROM ";
    $query .= $table;
    if($where != ''){
        $query .= " WHERE ";
        $query .= "".$column." = '";
        $query .= "".$where."'";
    }
    var_dump($query);
    return $query;
}

/* 
* 概要：テーブルから全件取得するクエリを組み立てる関数（購入画面で使用）
* 戻り値：連想配列
*/
function get_all($link,$table,$column,$where){
    $list = [];
    $query = assemb_get_all($table,$column,$where);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $list;
}

/* 
* 概要：指定した条件で件数を取得する関数（プロフィール画面で使用）
* 戻り値：連想配列['件数']
*/
function assemb_get_count($table,$column,$id){
    $query = "SELECT COUNT(".$column.") AS count FROM ";
    $query .= $table;
    $query .= " WHERE user_id = ";
    $query .= $id;
    return $query;
}

/* 
* 概要：指定した条件で件数を取得する関数（プロフィール画面で使用）
* 戻り値：連想配列['count']
*/
function get_count($link,$table,$column,$id){
    $query = assemb_get_count($table,$column,$id);
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

/* 
* 概要：テーブルから条件に合うレコード取得するクエリを組み立てる関数（プロフィール画面・検索画面で使用）
* 戻り値：SQL文
*/
function assemb_get_lots_of($table,$column,$id){
    $query = "SELECT * FROM ";
    $query .= $table;
    $query .= " WHERE ".$column." = ";
    $query .= $id;
    return $query;
}

/* 
* 概要：テーブルから条件に合うレコード取得する関数（int型）（プロフィール画面・検索画面で使用）
* 戻り値：連想配列
*/
function get_lots_of($link,$table,$column,$id){
    $list = [];
    $query = assemb_get_lots_of($table,$column,$id);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $list;
}

/* 
* 概要：テーブルから条件に合うレコード取得するクエリを組み立てる関数（商品一覧画面で使用）
* 対応レコード：トレンド検索 -> 'category(DESC)'、商品名 -> 'product_name'、並び替え -> '選択項目（関数呼出）'
* 戻り値：SQL文
*/
function assemb_get_column_order($table1,$table2,$conditions){
    $query = "SELECT * FROM ".$table1." t1 ";
    $query .= "INNER JOIN ".$table2." t2 ";
    $query .= "ON t1.user_id = t2.user_id";
    if ($conditions['search'] != '' || $conditions['trend'] != ''){
        $query .= " WHERE ";
        if ($conditions['search'] != ''){
            $query .= "product_name = '";
            $query .= "".$conditions['search']."'";
            if($conditions['trend'] != ''){
                $query .= " and category = '";
                $query .= "".$conditions['trend']."'";
            }
        } else {
            $query .= "category = '";
            $query .= "".$conditions['trend']."'";
        }
    }
    // ソート
    $query .= " ORDER BY ";
    if ($conditions['sort'] == 'favorite'){
        $query .= "favorite DESC";
    } else {
        $query .= "listed_at DESC";
    }
    return $query;
}

/* 
* 概要：テーブルから条件に合うレコード取得する関数（商品一覧画面で使用）
* 戻り値：連想配列
*/
function get_column_order($link,$table1,$table2,$conditions){
    $list = [];
    $query = assemb_get_column_order($table1,$table2,$conditions);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $list;
}

/* 
* 概要：並び替え条件を取得するクエリを組み立てる関数（商品一覧画面で使用）
* 戻り値：配列[カラム名,ASC/DESC]
*/
function which_sort($value){
    if ($value == 'high_price'){
        $result = ['price','DESC'];
    } else if ($value == 'low_price'){
        $result = ['price','ASC'];
    } else if ($value == 'user_recommend'){
        $result = ['follower','DESC']; // テーブル結合してないからまだ使えない
    } else if ($value == 'listing_date_desc'){
        $result = ['listed_at','DESC'];
    } else if ($value == 'listing_date_asc'){
        $result = ['listed_at','ASC'];
    }
    return $result;
}

/* 
* 概要：複数条件で取得するクエリを組み立てる関数（検索画面で使用する予定でした）
* 対応レコード：急上昇キーワード -> 'category'
* 戻り値：SQL文
*/
function assemb_get_column_multiple_condition($table,$conditions,$product_name){
    $length = count($conditions);
    $query = "SELECT * FROM ";
    $query .= $table;
    $query .= " WHERE category IN(";  
    for ($i = 0;$i < $length;$i++) {
        if($i == $length - 1){
            $query .= "'".$conditions[$i]."'";
        } else {
            $query .= "'".$conditions[$i]."',";
        }
    }
    $query .= ") ";
    if($product_name != ''){
        $query .= " OR product_name = ".$product_name."";
    }
    // ソート
    $query .= "ORDER BY listed_at DESC";  
    return $query;
}

/* 
* 概要：複数条件で取得する関数（検索画面で使用する予定でした）
* 戻り値：連想配列
*/
function get_column_multiple_condition($link,$table,$conditions,$product_name){
    $list = [];
    $query = assemb_get_column_multiple_condition($table,$conditions,$product_name);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $list;
}

/* 
* 概要：評価を書き込むクエリを組み立てる関数（評価画面で使用）
* （※ 評価「良かった」を1、「残念だった」を9とする）
* 戻り値：SQL文
*/
function assemb_evaluate($table,$flg,$message){
    $query = "UPDATE ".$table." SET ";
    if(isset($flg)){
        $query .= "evaluate = ";
    }
    if(isset($message)){
        $query .= "evaluate_msg = ";
    }
    return $query;
}

/* 
* 概要：評価を書き込む関数（評価画面で使用）
* 戻り値：true/false
*/
function evaluate($link,$table,$flg,$message){
    $query = assemb_get_column_multiple_condition($table,$conditions,$product_name);
    $result = mysqli_query($link,$query);
    return $result;
}

/* 
* 概要：会員・検索登録するクエリを組み立てる関数（会員登録確認画面で使用）
* 戻り値：SQL文
*/
function assemb_entry($table,$input_entry_data,$input_entry_label){
    $count = count($input_entry_label);
    $query = "INSERT INTO ".$table." ( ";
    for ($i = 0; $i < $count; $i++) {
        if($i < $count - 1){
            $query .= "".$input_entry_label[$i].",";
        } else {
            $query .= "".$input_entry_label[$i]."";
        }
    }
    $query .= " ) VALUES (";
    for ($j = 0; $j < $count; $j++) {
        if($j < $count - 1){
            $query .= "'".$input_entry_data[$input_entry_label[$j]]."',";
        } else {
            $query .= "'".$input_entry_data[$input_entry_label[$j]]."'";
        }
    }
    $query .= " )";
    return $query;
}

/* 
* 概要：会員・検索登録する関数（会員登録確認画面で使用）
* 戻り値：id
*/
function entry($link,$table,$input_entry_data,$input_entry_label){
    $query = assemb_entry($table,$input_entry_data,$input_entry_label);
    mysqli_query($link,$query);
    $id = mysqli_insert_id($link);
    return $id;
}

/* 
* 概要：ログインするクエリを組み立てる関数（ログイン画面で使用）
* 戻り値：SQL文
*/
function assemb_get_id($table,$login_id,$password){
    $query = "SELECT * FROM ";
    $query .= $table;
    $query .= " WHERE login_id = ";
    $query .= "'".$login_id."'";
    $query .= " and password = ";
    $query .= "'".$password."'";
    return $query;
}

/* 
* 概要：ログインする関数（ログイン画面で使用）
* 戻り値：id
*/
function get_id($link,$table,$login_id,$password){
    $query = assemb_get_id($table,$login_id,$password);
    $result = mysqli_query($link,$query);
    $id = mysqli_fetch_assoc($result);
    return $id;
}

/* 
* 概要：テーブルから条件に合うレコード取得するクエリを組み立てる関数（プロフィール画面・検索画面で使用）
* 戻り値：SQL文
*/
function assemb_get_lots_of_string($table,$column,$value){
    $query = "SELECT * FROM ";
    $query .= $table;
    $query .= " WHERE ".$column." = ";
    $query .= "'".$value."'";
    return $query;
}

/* 
* 概要：テーブルから条件に合うレコード取得する関数（string型）（プロフィール画面・検索画面で使用）
* 戻り値：連想配列
*/
function get_lots_of_string($link,$table,$column,$value){
    $list = [];
    $query = assemb_get_lots_of_string($table,$column,$value);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $list;
}

/* 
* 概要：会員・検索登録するクエリを組み立てる関数（会員登録確認画面で使用）
* 戻り値：SQL文
*/
// function assemb_input($table,$input_entry_data,$input_entry_label){
//     $count = count($input_entry_label);
//     $query = "INSERT INTO ".$table." ( ";
//     for ($i = 0; $i < $count; $i++) {
//         if($i < $count - 1){
//             $query .= "".$input_entry_label[$i].",";
//         } else {
//             $query .= "".$input_entry_label[$i]."";
//         }
//     }
//     $query .= " ) VALUES (";
//     for ($j = 0; $j < $count; $j++) {
//         if($j < $count - 1){
//             $query .= "'".$input_entry_data[$input_entry_label[$j]]."',";
//         } else {
//             $query .= "'".$input_entry_data[$input_entry_label[$j]]."'";
//         }
//     }
//     $query .= " )";
//     return $query;
// }

/* 
* 概要：会員・検索登録する関数（会員登録確認画面で使用）
* 戻り値：id
*/
// function input($link,$table,$input_entry_data,$input_entry_label){
//     $query = assemb_input($table,$input_entry_data,$input_entry_label);
//     mysqli_query($link,$query);
//     $id = mysqli_insert_id($link);
//     return $id;
// }

/* 
* 概要：上から5レコード取得するクエリを組み立てる関数（購入画面で使用）
* 戻り値：SQL文
*/
function assemb_get_five_column($table,$column,$id){
    $query = "SELECT product_name FROM ";
    $query .= $table;
    $query .= " WHERE ".$column." = ";
    $query .= $id;
    $query .= " ORDER BY create_at DESC";
    $query .= " LIMIT 5";
    return $query;
}

/* 
* 概要：上から5レコード取得する関数（購入画面で使用）
* 戻り値：連想配列
*/
function get_five_column($link,$table,$column,$id){
    $list = [];
    $query = assemb_get_five_column($table,$column,$id);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $list;
}

// /* 
// * 概要：user_idからプロフィール情報・ユーザ情報取得するクエリを組み立てる関数（購入画面で使用）
// * 戻り値：SQL文
// */
// function assemb_get_by_user_id($table,$column,$id){
//     $query = "SELECT * FROM ".$table1." t1 ";
    
//     $query .= " WHERE user_id = ";
//     $query .= $id;
//     return $query;
// }

// /* 
// * 概要：user_idからプロフィール情報・ユーザ情報取得する関数（購入画面で使用）
// * 戻り値：連想配列
// */
// function get_by_user_id($link,$table,$column,$id){
//     $list = [];
//     $query = assemb_get_five_column($table,$column,$id);
//     $result = mysqli_query($link,$query);
//     while($row = mysqli_fetch_assoc($result)){
//         $list[] = $row;
//     }
//     return $list;
// }







// /* 
// * 概要：インサートするクエリを組み立てる関数（購入画面で使用）
// * 戻り値：SQL文
// */
function assemb_insert($table,$columns,$column,$values,$user_id){
    $count = count($values);
    $query = "INSERT INTO ";
    $query .= "".$table."(";
    $query .= "".$column.",";
    for($i = 0;$i < $count;$i++){
        if($i == $count - 1){
            $query .= $columns[$i];
        } else {
            $query .= "".$columns[$i].",";
        }
    }
    $query .= ",auto_approval";
    $query .= ")";
    $query .= " VALUES (";
    $query .= "".$user_id.",'".$values[0]."','".$values[1]."',".$values[2].",'".$values[3]."','".$values[4]."',".$values[5].",'".$values[6]."',".$values[7].",".$values[8].",".$values[9].",1";
    $query .= ")";
    return $query;
}

// /* 
// * 概要：インサートする関数（購入画面で使用）
// * 戻り値：連想配列
// */
function insert($link,$table,$columns,$column,$values,$user_id){
    $query = assemb_insert($table,$columns,$column,$values,$user_id);
    mysqli_query($link,$query);
    $id = mysqli_insert_id($link);
    return $id;
}