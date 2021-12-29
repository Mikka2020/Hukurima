<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/listed_history.css">

  <title>フクリマ 出品履歴詳細</title>
</head>

<body>
  <h1>フクリマ</h1><!-- CSSで消す -->

  <header></header>
  <main>
    <article>
      <img
        src="./img/users/<?php echo "2"; // 会員id ?>/products/<?php echo "1"; // 商品id ?>/<?php echo "アシメレースアップリボンニット"; // 商品名 ?>_1.jpg"
        alt="商品画像1" width="360px" height="">

      <ul>
        <li><img src="" alt=""></li>
      </ul>

      <!-- 商品情報 -->
      <section>
        <button class="request_btn">購入申請が1件届いています！</button>
        <h3 class="product_name"><?php echo "アシメレースアップリボンニット(長袖)"; ?></h3>
        <ul>
          <li class="brand_name"><?php echo "LAISSE PASSE"; ?></li>
          <li class="product_price">¥<?php echo "3,600"; ?></li>
          <li>
            <ul>
              <li>
                <button class="product_btn">
                  <img src="./img/icon/いいねアイコン.png" alt="いいねアイコン" class="favorite_icon">3
                </button>
              </li>
              <li>
                <button class="product_btn">
                  <img src="./img/icon/コメントアイコン.png" alt="コメントアイコン" class="comment_icon">1
                </button>
              </li>
            </ul>
          </li>
        </ul>
      </section>

      <h4>商品説明</h4>
      <section class="product_info_area">
        <div>
          <p class="product_text"><?php echo "2020年頃に1万5000円で購入しましたニットです。エクリュカラーで傷はありません。合わせやすいのでおすすめです。"; // 商品詳細 ?>
          </p>
          <p><img src="./img/icon/clock-regular.svg" alt="時計アイコン" width="12px" height="">12時間前</p>
        </div>
        <div class="tag_area">
          <ul class="tag_ul">
            <li class="tag">#ニット</li>
            <li class="tag">#ブラウス</li>
            <li class="tag">#リボン</li>
            <li class="tag">#レース</li>
            <li class="tag">#長袖</li>
            <li class="tag">#女性</li>
          </ul>
        </div>
      </section>

      <h4>商品詳細</h4>
      <section class="product_info_area">
        <table class="detail_info">
          <tr>
            <th>カテゴリ</th>
            <td>ブラウス</td>
          </tr>
          <tr>
            <th>商品の状態</th>
            <td>目立った傷や汚れ無し</td>
          </tr>
          <tr>
            <th>発送までの日数</th>
            <td>2～3日</td>
          </tr>
          <tr>
            <th>クリーニングオプション</th>
            <td>クリーニング可</td>
          </tr>
          <tr>
            <th>集荷オプション</th>
            <td>集荷を申し込む</td>
          </tr>
        </table>
      </section>

    </article>

    <form action="" method="post">
      <button type="submit" name="delete" class="delete_btn btn">削除する</button>
      <button type="submit" name="edit" class="edit_btn btn">商品情報を編集する</button>
    </form>

  </main>

  <!-- ここにフッター -->

</body>

</html>