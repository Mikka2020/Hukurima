<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/post_listed_history_list.css">
  <title>Document</title>
</head>

<body>
  <header>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px">
      </a>
    </p>
    <p class="center">商品を選択</p>
  </header>
  <main>
    <article>
      <form action="" method="post">
        <section class="product-wrapper">
          <?php foreach($products_arr as $product): ?>
          <label for="<?php echo $product['listing_id']; ?>">
            <div>
              <input type="radio" name="listing_product" id="<?php echo $product['listing_id']; ?>"
                value="<?php echo $product['listing_id']; ?>">
              <img
                src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['listing_id']; ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
                alt="商品画像" width="80px" height="80px">
              <?php echo mb_substr($product['product_name'], 0, 20); ?>
            </div>
          </label>
          <?php endforeach; ?>
        </section>

    </article>
  </main>
  <footer class="center">
    <p>
      <button type="submit" name="select_submit">
        投稿に追加
      </button>
    </p>
  </footer>
  </form>
  <script src="./js/add.js"></script>
</body>

</html>