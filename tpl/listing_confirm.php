<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/listing_confirm.css">
  <title>出品確認</title>
</head>

<body>
  <header></header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <h2><?php echo ''; // 商品名 ?></h2>
      <img
        src="./img/users/<?php echo 2; // 会員id ?>/products/<?php echo 1; // 商品id ?>/<?php echo 'アシメレースアップリボンニット'; // 商品名 ?>_1.jpg"
        alt="メイン商品画像" width="360px" height="">

      <section class="product-detail">
        <h3>商品説明</h3>
        <p><?php echo 'アシメレースアップリボンニット'; // 商品名 ?></p>
        <ul>
          <li>
            カテゴリ
          </li>
          <li>
            <?php echo 'ブラウス'; ?>
          </li>
        </ul>
        <ul>
          <li>
            商品の状態
          </li>
          <li>
            <?php echo '目立った傷や汚れ無し'; ?>
          </li>
        </ul>
        <ul>
          <li>発送までの日時</li>
          <li><?php echo '1~3日' ?></li>
        </ul>
        <ul>
          <li>商品説明</li>
          <li><?php echo '2020年頃に1万5000円で購入しましたニットです。エクリュカラーで傷はありません。'; ?></li>
        </ul>

      </section>

      <section class="tag-area">
        <h3>タグ</h3>
        <ul>
          <!-- タグをforeachで複数表示 -->
          <?php // foreach($tags as $tag): ?>
          <li>
            <?php echo 'ニット'; ?>
          </li>
          <li>
            <?php echo 'ブラウス'; ?>
          </li>
          <?php // endforeach; ?>
        </ul>
      </section>
    </article>
    <form action="" method="post">
      <button type="submit" name="listing_btn" class="btn">出品する</button>
      <button type="submit" name="fix_btn" class="btn">修正する</button>
    </form>
  </main>
  <footer></footer>
</body>

</html>