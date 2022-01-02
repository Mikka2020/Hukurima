<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/listed_history_list.css">
  <title>フクリマ 出品履歴一覧</title>
</head>

<body>
  <h1>フクリマ</h1><!-- CSSで消す -->

  <!-- ここにヘッダー -->
  <header></header>

  <main>
    <!-- ここから検索ボタンエリア -->
    <div class="search_area">
      <button class="search">並び替え</button>
      <button class="search">絞り込み</button>
    </div>

    <!-- ここから出品履歴一覧 -->
    <article class="products_area">
      <?php foreach($products as $product): ?>
      <section class="product">
        <p class="product_img">
          <img
            src="./img/users/<?php echo $product['user_id'] ?>/products/<?php echo $product['listing_id'] ?>/<?php echo $product['product_name']; ?>_1.<?php echo $product['img_extension']; ?>"
            alt="商品画像" width="70px" height="70px">
        </p>
        <!-- <p class="sold_mark"><img src="../img/listed_history_list/SOLDマーク.png" alt="購入済みマーク"></p> -->
        <ul class="product_info">
          <!-- <li class="buy_request_area"><button class="buy_request_btn"></button></li> -->
          <li class="product_name"><?php echo $product['product_name']; ?></li>
          <li class="product_price">¥<?php $product['price']; ?></li>
          <li>
            <ul class="icon_group">
              <li class="favorite_icon"><img src="./img/icon/いいねアイコン.png" alt="いいねアイコン" width="15px" height="15px"></li>
              <li class="favorite_num">3</li>
            </ul>
          </li>
          <li>
            <ul class="icon_group">
              <li class="comment_icon">
                <img src="./img/icon/コメントアイコン.png" alt="コメントアイコン" width="15px" height="15px">
              </li>
              <li class="comment_num">1</li>
            </ul>
          </li>
          <li>
            <ul class="icon_group">
              <li class="date_icon">
                <img src="./img/icon/出品日時アイコン.png" alt="出品履歴アイコン" width="15px" height="15px">
              </li>
              <li class="date_text"><?php echo $product['listed_at']; ?></li>
            </ul>
          </li>
        </ul>
        <div>
          <a href="#"><img src="./img/icon/進むアイコン.png" alt="進むボタン"></a>
        </div>
      </section>
      <?php endforeach; ?>

    </article><!-- ここまで出品履歴一覧 -->

    <p class="center">
      <img src="./img/icon/ハンガー.png" alt="ハンガー画像">
    </p>

  </main>

  <!-- ここにフッター -->
  <footer></footer>

</body>

</html>