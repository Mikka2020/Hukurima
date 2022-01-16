<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/search.css" />
  <!-- <meta name="viewport" content="width=320,
      height=480,
      initial-scale=1.0,
      minimum-scale=1.0,
      maximum-scale=2.0,
      user-scalable=yes" /> -->
  <title>フクリマ 検索</title>
</head>

<body>
  <h1>フクリマ</h1>
  <header class="wrapper">
    <h2>商品検索</h2>
    <form action="" method="get" id="search">
      <input class="search_text" type="text" name="search" placeholder="検索ワードを入力" value="" />
      <button class="grass" type="submit" name="btn">
        <p class="fas fa-search"></p>
      </button>
    </form>
  </header>

  <main>
    <section class="gender">
      <input type="radio" name="gender" value="all" form="search" id="all" checked><label for="all" class="all">ALL</label>
      <input type="radio" name="gender" value="women" form="search" id="women"><label for="women" class="women">WOMEN</label>
      <input type="radio" name="gender" value="men" form="search" id="men"><label for="men" class="men">MEN</label>
    </section>

    <section class="search-conditions">
      <ul>
        <li>
          <a href="">
            <ul>
              <li>カテゴリからさがす</li>
              <li>＞</li>
            </ul>
          </a>
        </li>
        <li class="brand-border">
          <a href="">
            <ul>
              <li>ブランドからさがす</li>
              <li>＞</li>
            </ul>
          </a>
        </li>
      </ul>
    </section>
  
    <section class="keywords">
      <h3>トレンド</h3>
      <ul>
        <a href="./product.php?search=コート">
          <li>コート</li>
        </a>
        <a href="./product.php?search=ニット">
          <li>ニット</li>
        </a>
        <a href="./product.php?search=バッグ">
          <li>バッグ</li>
        </a>
        <a href="./product.php?search=スニーカー">
          <li>スニーカー</li>
        </a>
        <a href="./product.php?search=ジャケット">
          <li>ジャケット</li>
        </a>
        <a href="./product.php?search=冬服">
          <li>冬服</li>
        </a>
      </ul>
    </section>


    <section class="save-search">
      <h3>検索履歴</h3>
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
    </section>
  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>