<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/listed_history.css">

  <title>フクリマ 出品履歴一覧</title>
</head>

<body>
  <h1>フクリマ</h1><!-- CSSで消す -->

  <header></header>
  <main>
    <h2>出品履歴</h2>
    <article>
      <img
        src="./img/users/<?php echo $list['user_id']; // 会員id ?>/products/<?php echo $list['listing_id']; // 商品id ?>/<?php echo $list['product_name']; // 商品名 ?>_1.jpg"
        alt="商品画像1" width="360px" height="">

      <!-- 商品情報 -->
      <section>
        <button class="request_btn">購入申請が1件届いています！</button>
        <h3 class="product_name"><?php echo $list['product_name']; ?></h3>
        <ul>
          <li class="brand_name"><?php echo $list['brand']; ?></li>
          <li class="product_price">¥<?php echo $list['price']; ?></li>
          <li>
            <ul>
              <li>
                <button class="product_btn">
                  <img src="./img/icon/いいねアイコン.png" alt="いいねアイコン" class="favorite_icon"><?php echo "3"; ?>
                </button>
              </li>
              <li>
                <button class="product_btn">
                  <img src="./img/icon/コメントアイコン.png" alt="コメントアイコン" class="comment_icon"><?php echo "1"; ?>
                </button>
              </li>
            </ul>
          </li>
        </ul>
      </section>

      <h4>商品説明</h4>
      <section class="product_info_area">
        <div>
          <p class="product_text"><?php echo $list['product_explain']; // 商品詳細 ?>
          </p>
          <p>
            <img src="./img/icon/clock-regular.svg" alt="時計アイコン" width="12px" height="">
            <?php echo $list['listed_at']; // 出品日時 ?>
          </p>
        </div>
        <div class="tag_area">
          <ul class="tag_ul">
            <?php // foreach($tags as $tag): ?>
            <li class="tag"><?php echo "#ニット"; ?></li>
            <?php // endforeach; ?>
          </ul>
        </div>
      </section>

      <h4>商品詳細</h4>
      <section class="product_info_area">
        <div class="detail_info">
          <ul>
            <li>カテゴリ</li>
            <li><?php echo $list['category']; ?></li>
          </ul>
          <ul>
            <li>商品の状態</li>
            <li><?php echo $product_condition[$list['product_condition']]; ?></li>
          </ul>
          <ul>
            <li>発送までの日数</li>
            <li><?php echo $days_to_ship[$list['days_to_ship']]; ?></li>
          </ul>
          <ul>
            <li>クリーニングオプション</li>
            <li>クリーニング<?php echo $cleaning[$list['cleaning_flg']]; ?></li>
          </ul>
          <ul>
            <li>集荷オプション</li>
            <li><?php echo $picking[$list['picking_flg']];?></li>
          </ul>
        </div>
      </section>

    </article>

    <form action="" method="post">
      <button type="submit" name="delete" class="delete_btn">削除する</button>
      <button type="submit" name="edit" class="edit_btn">商品情報を編集する</button>
    </form>

  </main>

  <!-- ここにフッター -->
  <footer></footer>

</body>

</html>