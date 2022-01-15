<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/search.css" />
  <meta name="viewport" content="width=320,
      height=480,
      initial-scale=1.0,
      minimum-scale=1.0,
      maximum-scale=2.0,
      user-scalable=yes" />
  <title>Document</title>
</head>

<body>
  <header class="wrapper">
    <form action="" method="get">
      <input class="search_text" type="text" name="search" placeholder="商品を検索しよう" value="" />
      <button class="grass" type="submit" name="btn">
        <i class="fas fa-search"></i>
      </button>
    </form>
  </header>

  <main>
    <section class="keywords">
      <h2>急上昇キーワード</h2>
      <ul>
        <a href="./product.php?search=コート">
          <li>
            コート
          </li>
        </a>
        <a href="./product.php?search=ニット">
          <li>
            ニット
          </li>
        </a>
        <a href="./product.php?search=バッグ">
          <li>
            バッグ
          </li>
        </a>
        <a href="./product.php?search=スニーカー">
          <li>
            スニーカー
          </li>
        </a>
      </ul>
    </section>

    <section class="search-values">
      <ul>
        <li>
          <button class="pink" type="submit" name="btn" value="up">
            <i class="fas fa-tshirt"></i>
          </button>
          <h6>ブランドから検索</h6>
        </li>
        <li>
          <button class="pink" type="submit" name="btn" value="up">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
          <h6>カテゴリから検索</h6>
        </li>
      </ul>
    </section>

    <section class="save-search">
      <h5>保存した検索結果一覧</h5>
      <form action="" method="get">
        <ul>
          <?php foreach($keywords as $keyword): ?>
          <a href="./product.php?search=<?php echo $keyword['product_name']; ?>">
            <li>
              <span><?php echo $keyword['product_name']; ?></span>
              <button><img src="./img/icon/三点リーダーアイコン.svg" alt=""></button>
            </li>
          </a>
          <?php endforeach; ?>
        </ul>
      </form>
    </section>
  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>