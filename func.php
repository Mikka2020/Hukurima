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
 * 1レコード取得のクエリ組み立て（変数名：assemb_get_column($link,$table,$column,$id)）
 * 1レコード取得（変数名：get_column($link,$table,$column,$id)）
 * 全件取得のクエリ組み立て（変数名：assemb_get_all($link,$table)）
 * 全件取得（変数名：get_all($link,$table)）
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
        if($check_value == $value){
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
function assemb_get_column($link,$table,$column,$id){
    $query = "SELECT * FROM ";
    $query .= $table;
    $query .= " WHERE ".$column." = "
    $query .= $id;
    return $query;
}

/* 
* 概要：テーブルから1レコード取得するクエリを組み立てる関数（購入画面で使用）
* 戻り値：連想配列
*/
function get_column($link,$table,$column,$id){
    $query = assemb_get_column($link,$table,$column,$id);
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

/*
* 概要：テーブルから全件取得するクエリを組み立てる関数（購入画面で使用）
* 戻り値：SQL文
*/
function assemb_get_all($link,$table){
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
    $query = assemb_get_all($link,$table);
    $result = mysqli_query($link,$query);
    while($row = mysqli_fetch_assoc($result)){
        $list[] = $row;
    }
    return $row;
}