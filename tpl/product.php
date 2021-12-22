<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />

  <link rel="stylesheet" href="./css/product.css" type="text/css" />
  <title>商品一覧</title>
</head>

<body>
  <div id="field">
    <!-- ヘッター -->

    <!-- ヘッター終了 -->

    <!-- 検索エリア  -->
    <div id="serch">
      <ul>
        <li>
          <form method="get" action="product.php">
            <input type="text" id="input_box" placeholder="商品を検索......" />
            <button type="submit" name="serch_flag" value="on">
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
      <ol>
        <li>トレンド　</li>
        <li class="trend_word"><a href="">コート</a></li>
        <li class="trend_word"><a href="">ニット</a></li>
        <li class="trend_word"><a href="">ブーツ</a></li>
        <li class="trend_word"><a href="">冬服</a></li>
      </ol>
    </div>
    <!-- トレンドエリア終了 -->
    <br />
    <!-- 商品一覧 -->
    <div id="product">
      <div class="product_area">
        <p>
          <img class="woman_img" src="../img/influencer.jpg" alt="インフルエンサー" />インフルエンサー
        </p>
        <p>
          <img class="product_item" src="../img/product1.jpg" alt="商品" width="400" height="400" />
        </p>
        <p class="product_explanation">
          アシメレースアップリボンニッット（長袖）
        </p>
        <p class="product_explanation">￥3,600</p>
      </div>

      <div class="product_area">
        <p>
          <img class="woman_img" src="../img/woman2.jpg" alt="aoi324" />aoi324
        </p>
        <p>
          <img class="product_item" src="../img/product2.jpg" alt="商品" width="400" height="400" />
        </p>
        <p class="product_explanation">シングルプレスト フード付きコート</p>
        <p class="product_explanation">￥3,950</p>
      </div>

      <div class="product_area">
        <p>
          <img class="woman_img" src="../img/woman3.jpg" alt="sakura440" />sakura440
        </p>
        <p>
          <img class="product_item" src="../img/product3.jpg" alt="商品" width="400" height="400" />
        </p>
        <p class="product_explanation">
          レイヤード風カジュアルラウンドネック
        </p>
        <p class="product_explanation">￥2,200</p>
      </div>

      <div class="product_area">
        <p>
          <img class="woman_img" src="../img/woman4.jpg" alt="siho1027" />siho1027
        </p>
        <p>
          <img class="product_item" src="../img/product4.jpg" alt="商品" width="400" height="400" />
        </p>
        <p class="product_explanation">
          ランタンスリーブ＋スカート セットアップ
        </p>
        <p class="product_explanation">￥2,800</p>
      </div>
    </div>
    <!-- 商品一覧終了 -->

    <!-- フッター -->

    <!-- フッター終了 -->
  </div>
</body>

</html>