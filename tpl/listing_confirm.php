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
  <header>
    <p>出品確認</p>
  </header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <h2><?php echo ''; // 商品名 ?></h2>
      <img
        src="./img/users/<?php echo $user_id; ?>/pre/<?php echo $listing['product_name']; ?>.<?php echo $listing['img_extension']; ?>"
        alt="メイン商品画像" width="360px" height="">

      <section class="product-detail">
        <h3>商品説明</h3>
        <p><?php echo $listing['product_name']; ?></p>
        <ul>
          <li>
            カテゴリ
          </li>
          <li>
            <?php echo $listing['product_category']; ?>
          </li>
        </ul>
        <ul>
          <li>
            商品の状態
          </li>
          <li>
            <?php echo $product_condition[$listing['product_condition']]; ?>
          </li>
        </ul>
        <ul>
          <li>発送までの日時</li>
          <li><?php echo $days_to_ship[$listing['days_to_ship']]; ?></li>
        </ul>
        <p>
          商品説明<br>
          <?php echo $listing['product_explain']; ?>
        </p>

      </section>

    </article>
    <form action="" method="post">
      <button type="submit" name="listing_btn" class="btn">出品する</button>
      <button type="submit" name="fix_btn" class="btn">修正する</button>
    </form>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>