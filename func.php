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
 * 検索条件１つで取得のクリエの組み立て（変数名：assemb_get_lots_of($table,$column,$id)）
 * 検索条件１つで取得（変数名：get_lots_of($link,$table,$column,$id)）
 * 商品一覧画面でしか使えないクエリを組み立てる関数（変数名：assemb_get_column_order($table,$conditions)）
 * 商品一覧画面でしか使えない関数（変数名：get_column_order($link,$table,$column,$id)）
 * 並び替え条件の取得（変数名：which_sort($value)）
 * 複数条件で取得するクエリを組み立てる関数（変数名：assemb_get_column_multiple_condition()）
 * 複数条件で取得する関数（変数名：get_column_multiple_condition()）
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
function assemb_get_all($table){
    $query = "SELECT * FROM ";
    $query .= $table;
    return $query;
}

/* 
* 概要：テーブルから全件取得するクエリを組み立てる関数（購入画面で使用）
* 戻り値：連想配列
*/
function get_all($link,$table){
    $list = [];
    $query = assemb_get_all($table);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $row;
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
* 概要：テーブルから条件に合うレコード取得するクエリを組み立てる関数（プロフィール画面で使用）
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
* 概要：テーブルから条件に合うレコード取得する関数（プロフィール画面で使用）
* 戻り値：連想配列
*/
function get_lots_of($link,$table,$column,$id){
    $list = [];
    $query = assemb_get_lots_of($table,$column,$id);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $row;
}

/* 
* 概要：テーブルから条件に合うレコード取得するクエリを組み立てる関数（商品一覧画面で使用）
* 対応レコード：トレンド検索 -> 'category(DESC)'、商品名 -> 'product_name'、並び替え -> '選択項目（関数呼出）'
* 戻り値：SQL文
*/
function assemb_get_column_order($table,$conditions){
    $query = "SELECT * FROM ";
    $query .= $table;
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
        $sort = which_sort($conditions['sort']);
        $query .= "".$sort[0]." ".$sort[1]."";
    }
    return $query;
}

/* 
* 概要：テーブルから条件に合うレコード取得する関数（商品一覧画面で使用）
* 戻り値：連想配列
*/
function get_column_order($link,$table,$conditions){
    $list = [];
    $query = assemb_get_column_order($table,$conditions);
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
* 概要：複数条件で取得するクエリを組み立てる関数（検索画面で使用）
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
* 概要：複数条件で取得する関数（検索画面で使用）
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