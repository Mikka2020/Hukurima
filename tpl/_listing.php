<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/listing.css">
  <title>出品画面</title>
</head>

<body>
  <header>出品画面</header>
  <main>
    <h1>フクリマ</h1>
    <article>
      <form action="" method="post">
        <h2>出品フォーム</h2>
        <section class="explain-section">
          <h3>商品名と説明</h3>
          <ul>
            <li><input type="text" placeholder="商品名(必須)"></li>
            <li>
              <textarea name="" id="" cols="30" rows="10" placeholder="商品説明 (任意)"></textarea>
            </li>
          </ul>
        </section>
        <section class="detail-section">
          <h3>商品情報</h3>
          <ul>
            <li>カテゴリー</li>
            <li><input type="text" name="" id="" placeholder="カテゴリーを入力"></li>
          </ul>

          <ul>
            <li>商品の状態</li>
            <li>
              <select name="" id="con">
                <option value="">選択してください >
                </option>
                <?php foreach($product_condition as $condition_index => $product_condition_msg): ?>
                <option value="<?php echo $condition_index; ?>">
                  <?php echo $product_condition_msg; ?>
                </option>
                <?php endforeach; ?>
              </select>
            </li>
          </ul>
          <ul>
            <li>ブランド</li>
            <li><input type="text" name="" id="" placeholder="ブランドを入力"></li>
          </ul>
        </section>
        <section class="shipping-section">
          <h3>配送について</h3>
          <ul>
            <li>配送までの日数</li>
            <li>
              <select name="" id="">
                <option value="">選択してください >
                </option>
                <?php foreach($days_to_ship as $days_index => $days_msg): ?>
                <option value="<?php echo $days_index; ?>"><?php echo $days_msg; ?></option>
                <?php endforeach; ?>
              </select>
            </li>
          </ul>
          <ul>
            <li>クリーニングオプション</li>
            <li>
              <select name="" id="">
                <option value="">選択してください ></option>
                <option value="">あり</option>
                <option value="">なし</option>
              </select>
            </li>
          </ul>
          <ul>
            <li>集荷オプション</li>
            <li>
              <select name="" id="">
                <option value="">選択してください ></option>
                <option value="">あり</option>
                <option value="">なし</option>
              </select>
            </li>
          </ul>
        </section>
        <section class="price-section">
          <h3>出品価格（300円〜9,999,999円）</h3>
          <ul>
            <li>出品価格</li>
            <li><input type="number" name="" id="" placeholder="価格を入力">円</li>
          </ul>
        </section>
        <button type="submit" name="draft_save" value="on" class="save_btn">下書きに保存する</button>
        <button type="submit" name="listing" value="on" class="listing_btn">出品する</button>
      </form>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
</body>

</html>