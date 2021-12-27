<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/product_detail.css">
  <title>商品詳細</title>
</head>

<body>
  <header></header>
  <main>
    <img
      src="./img/users/<?php echo $product['会員id']; ?>/products/<?php echo $product['商品id']; ?>/<?php echo $product['商品画像名']; ?>"
      alt="商品画像" width="" height=""> <!-- 商品画像 -->
    <img src="" alt="その他の商品画像">
    <ul>
      <?php foreach($products as $product): ?>
      <li><img src="" alt="その他の商品画像"></li> <!-- その他の商品画像-->
      <?php endforeach; ?>
    </ul>
    <article>
      <section>
        <h3><?php echo $product['商品名']; ?></h3>
        <ul>
          <li><?php echo $product['ブランド名']; ?></li>
          <li><?php echo $product['値段'] ?></li>
        </ul>
        <form action="" method="post">

          <button><img src="./img/icon/" alt="いいねアイコン" width="" height=""><?php echo $product['いいね数']; ?></button>
          <button><img src="./img/icon/" alt="コメントアイコン" width="" height=""><?php echo $product['コメント数']; ?></button>
        </form>

      </section>
      <section>
        <h4>商品説明</h4>
        <p><?php echo $product['商品説明テキスト']; ?></p>
        <p><img src="" alt="時計アイコン" width="" height=""><?php echo $product['商品出品時間']; ?></p>
        <ul>
          <?php foreach($tags as $tag): ?>
          <li><?php echo $tag; ?></li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section>
        <h4>商品詳細</h4>
        <ul>
          <li>カテゴリ</li>
          <li></li>
        </ul>
        <ul>
          <li>商品の詳細</li>
          <li></li>
        </ul>
        <ul>
          <li>クリーニングオプション</li>
          <li></li>
        </ul>
        <ul>
          <li>集荷オプション</li>
          <li></li>
        </ul>
        <ul>
          <li>出品者</li>
          <li></li>
        </ul>
      </section>
    </article>

    <form action="" method="post">
      <button type="submit">購入する</button>
    </form>

  </main>
  <footer></footer>
</body>

</html>