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

  <!-- ここにヘッダー -->

  <main>
    <!-- 商品画像カルーセル -->
    <div class="product_img_carousel_area">
      <ul class="img_area">
        <li class="product_img_list"><img src="#" alt="商品画像1" class="product-img"></li>
        <li class="product_img_list"><img src="#" alt="商品画像2" class="product-img"></li>
        <li class="product_img_list"><img src="#" alt="商品画像3" class="product-img"></li>
        <li class="product_img_list"><img src="#" alt="商品画像4" class="product-img"></li>
        <li class="product_img_list"><img src="#" alt="商品画像5" class="product-img"></li>
      </ul>
    </div>

    <!--カルーセルボタン  -->
    <div class="carousel_btn_area">
      <div class="left_arrow">
        <button class="left_btn" type="button"></button>
      </div>
      <div class="right_arrow">
        <button class="right_btn" type="button"></button>
      </div>
    </div>

    <!-- カルーセルインジケーター -->
    <div class="carousel_indicator_area">
      <ol class="indicator_ol">
        <li class="indictor_li"></li>
        <li class="indictor_li active"></li>
        <li class="indictor_li"></li>
        <li class="indictor_li"></li>
        <li class="indictor_li"></li>
      </ol>
    </div>

    <!-- 商品情報 -->
    <article>
      <button class="request_btn">購入申請が1件届いています！</button>
      <h3 class="product_name">アシメレースアップリボンニット(長袖)</h3>
      <ul>
        <li class="brand_name">LAISSE PASSE</li>
        <li class="product_price">¥3,600</li>
        <li>
          <ul>
            <li><button class="product_btn"><img src="#" alt="いいねアイコン" class="favorite_icon">3</button></li>
            <li><button class="product_btn"><img src="#" alt="コメントアイコン" class="comment_icon">1</button></li>
          </ul>
        </li>
      </ul>
    </article>

    <h4>商品説明</h4>
    <article class="product_info_area">
      <div>
        <p class="product_text">2020年頃に1万5000円で購入しましたニットです。エクリュカラーで傷はありません。合わせやすいのでおすすめです。</p>
        <p><img src="#" alt="時計アイコン">12時間前</p>
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
    </article>

    <h4>商品詳細</h4>
    <article class="product_info_area">
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
    </article>

    <form action="" method="post">
      <button type="submit" name="delete" class="delete_btn">削除する</button>
      <button type="submit" name="edit" class="edit_btn">商品情報を編集する</button>
    </form>

  </main>

  <!-- ここにフッター -->

</body>

</html>