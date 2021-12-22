<pre>
<?php
// session_start();
// $conditions = ['search' => '' , 'sort' => '' , 'trend' => ''];

// // 検索条件（３種）
// if (isset($_POST['search'])){
//     $_SESSION['search'] = $_POST['search'];
// } else if (isset($_POST['sort'])){
//     $_SESSION['sort'] = $_POST['sort'];
// } else if (isset($_POST['trend'])){
//     $_SESSION['trend'] = $_POST['trend'];
// }

// // 検索条件に変更があれば対応させる処理
// if (isset($_SESSION['search'])){
//     $conditions['search'] = $_SESSION['search'];
// } else if (isset($_SESSION['sort'])){
//     $conditions['sort'] = $_SESSION['sort'];
// } else if (isset($_SESSION['trend'])){
//     $conditions['trend'] = $_SESSION['trend'];
// }

// if(isset($_POST['reset'])){
//     session_destroy();
// }

// var_dump($_SESSION);

// $str = file_get_contents('./test.csv');
// $str = explode("",$str);
// $str = explode(",",$str);

// $list = [];
// for($i=0;$i<count($str)/3;$i++){
//     $line = [];
//     for($j = $i*3;$j<$i*3+3;$j++){
//         $line[] = $str[$j];
//     }
//     $list[] = $line; 
// }

// function which_sort($value){
//     if ($value == 'high_price'){
//         $result = ['price','DESC'];
//     } else if ($value == 'low_price'){
//         $result = ['price','ASC'];
//     } else if ($value == 'user_recommend'){
//         $result = ['follower','DESC']; // テーブル結合してないからまだ使えない
//     } else if ($value == 'listing_date_desc'){
//         $result = ['listed_at','DESC'];
//     } else if ($value == 'listing_date_asc'){
//         $result = ['listed_at','ASC'];
//     }
//     return $result;
// }

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
        $query .= $sort[0].$sort[1];
    }
    return $query;
}

$conditions = ['search' => '商品名' , 'sort' => 'favorite' , 'trend' => 'ジャケット'];
var_dump(assemb_get_column_order('listing',$conditions));

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="post">
        <button method="submit" name="search" value="on">検索</button>
        <button method="submit" name="sort" value="on">ソート</button>
        <button method="submit" name="trend" value="on">トレンド</button>
        <button method="submit" name="reset" value="on">リセット</button>
    </form> -->
</body>
</html>