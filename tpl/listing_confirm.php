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
    <p class="center">出品確認</p>
  </header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <h2><?php echo ''; // 商品名 ?></h2>
      <div class="center">
        <img
          src="./img/users/<?php echo $user_id; ?>/pre/<?php echo $listing['product_name']; ?>.<?php echo $listing['img_extension']; ?>"
          alt="メイン商品画像" width="360px" height="">
      </div>

      <section class="product-detail">
        <h3 class="none">商品</h3>
        <p class="product-name"><?php echo $listing['product_name']; ?></p>
        <p class="brand"><?php echo $listing['brand']; ?></p>
        <p class="price red">¥<?php echo $listing['price']; ?></p>
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
        <ul>
          <li>クリーニングオプション</li>
          <li><?php echo $cleaning[$listing['cleaning_flg']]; ?></li>
        </ul>
        <ul>
          <li>集荷オプション</li>
          <li><?php echo $picking[$listing['picking_flg']]; ?></li>
        </ul>
        <ul>
          <li>購入申請自動許可</li>
          <li><?php echo $auto_approval[$listing['auto_approval_flg']]; ?></li>
        </ul>
        <p class="explain-title">商品説明文</p>
        <p class="explain-text"><?php echo $listing['product_explain']; ?></p>



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