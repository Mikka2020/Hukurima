<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />

  <link rel="stylesheet" href="./css/product.css" type="text/css" />
  <title>商品一覧</title>
</head>

<body>
  <div id="field">
    <header></header>
    <main>

      <!-- 検索エリア  -->
      <div id="search">
        <ul>
          <li>
            <form method="get" action="product.php">
              <input type="text" id="input_box" placeholder="商品を検索......" />
              <button type="submit" name="search_flag" value="on">
                &#x1f50d;
              </button>
            </form>
          </li>

          <li>
            <select name="sort" id="sort">
              <option value="">選択してください</option>
              <option value="high_price">価格の高い順</option>
              <option value="low_price">価格の安い順</option>
              <option value="user_recommend">ユーザーのオススメ</option>
              <option value="listing_date_">出品日の新しい</option>
              <option value="listing_date_">出品日の古い</option>
            </select>
          </li>
        </ul>
      </div>
      <!-- 検索エリア終了 -->

      <!-- トレンドエリア -->
      <div id="trend">
        <ul>
          <li>トレンド</li>
          <!-- <?php foreach($tags as $tag): ?> -->
          <li class="trend_word">
            <a href=""><?php echo $tag; ?></a> タグ名
          </li>
          <!-- <?php endforeach; ?> -->
        </ul>
      </div>
      <!-- トレンドエリア終了 -->

      <br />
      <!-- 商品一覧 -->
      <div id="product">

        <!-- <?php foreach($line as $product): ?> -->
        <div class="product_area">
          <p>
            <img class="product_item"
              src="./img/users/<?php echo $product['user_id']; ?>/products/<?php echo $product['id'] ?>/<?php echo $product['product_name']; ?>_1.jpg"
              alt="商品" width="400" height="400" /> <!-- 商品画像 -->
          </p>
          <p class="product_explanation">
            <?php echo $product['price']; ?>
            <!-- 値段 -->
          </p>
          <p class="product_explanation">

            <img class="woman_img"
              src="./img/users/<?php echo $product['user_id']; ?>/prof/<?php echo $product['user_name']; ?>.jpg"
              alt="プロフィール画像" width="32px" height="32px" /> <!-- プロフィール画像 -->
            <?php echo $product['user_name']; ?>
            <!-- 会員名 -->
          </p>
        </div>
        <!-- <?php endforeach; ?> -->

      </div>
      <!-- 商品一覧終了 -->
    </main>

    <footer></footer>
  </div>
</body>

</html>