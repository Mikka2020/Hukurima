<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/listing_confirm.css">
  <title>フクリマ 出品確認</title>
</head>

<body>
  <h1>フクリマ</h1>
  <header>
    <h2 class="center">出品確認</h2>
  </header>
  <main>
    <article>

      <section class="img-section">
        <h3>商品画像</h3>
        <img
          src="./img/users/<?php echo $user_id; ?>/pre/<?php echo $listing['product_name']; ?>.<?php echo $listing['img_extension']; ?>"
          alt="商品画像" width="360px" height=""> <!-- 商品画像 -->
      </section>

      <section class="product-title">
        <h3><?php echo $listing['product_name']; ?></h3>
        <ul>
          <li><?php echo $listing['brand']; ?></li>
          <li>¥<?php echo $listing['price']; ?></li>
        </ul>
      </section>

      <section class="product-info">
        <h4>商品説明</h4>
        <p><?php echo $listing['product_explain']; ?></p>
      </section>

      <section class="product-detail">
        <h4>商品詳細</h4>
        <ul>
          <li>カテゴリ</li>
          <li><?php echo $listing['product_category']; ?></li>
        </ul>
        <ul>
          <li>商品の状態</li>
          <li><?php echo $product_condition[$listing['product_condition']]; ?></li>
        </ul>
        <ul>
          <li>発送までの日数</li>
          <li><?php echo $days_to_ship[$listing['days_to_ship']]; ?></li>
        </ul>
        <ul>
          <li>クリーニング</li>
          <li><?php echo $cleaning[$listing['cleaning_flg']]; ?></li>
        </ul>
        <ul>
          <li>購入申請自動許可</li>
          <li>
          <?php echo $auto_approval[$listing['auto_approval_flg']]; ?>
          </li>
        </ul>
      </section>
    </article>

    <form action="#" method="post">
      <ul>
        <li class="listing-btn">
          <button type="submit" name="listing_btn" class="btn" id="listing_btn">出品する</button>
        </li>
        <li class="fix-btn">
          <button type="submit" name="fix_btn" class="btn">修正する</button>
        </li>
      </ul>
    </form>

  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>