<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/search.css" />
  <meta name="viewport" content="width=320,
      height=480,
      initial-scale=1.0,
      minimum-scale=1.0,
      maximum-scale=2.0,
      user-scalable=yes" />
  <title>Document</title>
</head>

<body>
  <div class="wrapper">
    <input class="search_text" type="text" name="message" placeholder="商品を検索しよう" value="" />
    <button class="grass" type="submit" name="btn" value="up">
      <i class="fas fa-search"></i>
    </button>
  </div>
  <div class="keyword">
    <h2>急上昇キーワード</h2>
  </div>
  <div class="keywords">
    <button type="submit" name="btn" value="up">アウター</button>
    <button type="submit" name="btn" value="up">ノースフェイス</button><br />
    <button type="submit" name="btn" value="up">パーカー</button>
    <button type="submit" name="btn" value="up">DIESEL</button>
  </div>

  <br />
  <div class="search_values">
    <table>
      <th>
        <button class="pink" type="submit" name="btn" value="up">
          <i class="fas fa-tshirt"></i>
        </button>
        <h6>ブランドから検索</h6>
      </th>
      <th>
        <button class="pink" type="submit" name="btn" value="up">
          <i class="fa fa-book" aria-hidden="true"></i>
        </button>
        <h6>カタログから検索</h6>
      </th>
      <th>
        <button class="pink" type="submit" name="btn" value="up">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <h6>カテゴリから検索</h6>
      </th>
    </table>
  </div>
  <div class="save_search">
    <h5>保存した検索結果一覧</h5>
    <table>
      <div class="search01">
        <button>DIESEL　　　　　　　　　　　　　　　　　　...</button>
      </div>
      <div class="search02">
        <button>DIESEL、スウェット　　　　　　　　　　　　...</button>
      </div>
      <div class="search03">
        <button>DIESEL、パーカー　　　　　　　　　　　　　...</button>
      </div>
    </table>
  </div>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>