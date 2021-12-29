<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/buy.css">
  <title>購入画面</title>
</head>

<body>
  <header></header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <h2 class="none"><?php echo "アシメレースアップリボンニット"; // 商品名 ?></h2>
      <section class="img_product">
        <h3 class="none">商品画像</h3>
        <img
          src="./img/users/<?php echo '2'; // 会員id ?>/products/<?php echo '1'; // 商品id ?>/<?php echo "アシメレースアップリボンニット"; // 商品名 ?>_1.jpg"
          alt="商品画像" width="315px" height="420px">
      </section>
      <section>
        <h3>商品説明</h3>
        <ul>
          <li><?php echo "アシメレースアップリボンニット"; // 商品名 ?></li>
          <li><?php echo "LAISSE PASSE"; // ブランド名 ?></li>
          <li>¥<?php echo "3,600"; // 値段 ?></li>
        </ul>
        <table>
          <tr>
            <th>カテゴリ</th>
            <td><?php echo "ブラウス"; // カテゴリ ?></td>
          </tr>
          <tr>
            <th>商品の状態</th>
            <td><?php echo "目立った傷や汚れなし"; // 商品の状態 ?></td>
          </tr>
          <tr>
            <th>発送までの日数</th>
            <td><?php echo "2~3日"; // 発送までの日数 ?></td>
          </tr>
          <tr>
            <th>商品説明</th>
            <td><?php echo "2020年頃に1万5000円で購入しましたニットです。エクリュカラーで傷はありません。合わせやすいのでおすすめです。"; // 商品の説明 ?></td>
          </tr>
        </table>
        <p>商品を閉じる</p>
      </section>

      <section>
        <h3>出品者</h3>
        <p><img src="./img/users/<?php echo "2"; // 会員id ?>/prof/<?php echo "mari"; // 会員名 ?>.jpg" alt="プロフィール画像"
            width="30px" height="30px"></p>
        <p><?php echo "Mari"; // 会員名 ?> さん</p>
        <p>メッセージ</p>
      </section>

      <section>
        <h3>配送先</h3>
        <form action="" method="post">
          <ul>
            <?php // foreach($address as $address): ?>
            <li>
              <input type="radio" name="" id="">配送先<?php echo "1"; // 配送先番号 ?> <br>
              〒<?php echo "530-0001"; // 郵便番号 ?> <br>
              <?php echo "大阪市北区梅田3-3-1"; // 住所 ?>
            </li>
            <?php // endforeach; ?>

            <li><label for=""><span>+</span>新しい配送先を追加する</label></li>
          </ul>
      </section>
      <section>
        <h3>オプション</h3>
        <input type="checkbox" name="" id="">クリーニングあり

      </section>
      <p class="center">
        <a href="">取引中止を申請する</a><br>
        <a href="">問題を報告する</a>

      </p>

      <button type="submit" name="buy_btn" value="on" class="btn">購入する</button>

      </form>

    </article>
  </main>
  <footer></footer>
</body>

</html>