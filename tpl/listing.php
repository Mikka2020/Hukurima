<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="./css/listing.css">
  <title>フクリマ 出品画面</title>
</head>

<body>
  <h1>フクリマ</h1>
  <header class="global-header">
    <h2 class="none">出品画面</h2>
    <img class="header-logo" src="./img/icon/hukurima.png" alt="" width="" height="30px">
  </header>
  <main>
    <article>
      <form action="" method="post" enctype="multipart/form-data">
        <h2>出品フォーム</h2>

        <section>
          <input type="file" name="product_img" class="input-img" id="myImage" accept="image/*">
          <img id="preview">
        </section>

        <section class="explain-section">
          <h3>商品名と説明</h3>
          <p>
            <input name="product_name" type="text" placeholder="商品名(必須)">
          </p>
          <p>
            <textarea name="product_explain" id="" cols="30" rows="10" placeholder="商品説明 (任意)"></textarea>
          </p>
        </section>

        <section class="detail-section">
          <h3>商品情報</h3>
          <ul>
            <li>カテゴリー</li>
            <li><input type="text" name="product_category" id="" placeholder=" カテゴリーを入力"></li>
          </ul>

          <ul>
            <li>ブランド</li>
            <li><input type="text" name="brand" id="" placeholder="ブランドを入力"></li>
          </ul>

          <ul>
            <li>商品の状態</li>
            <li>
              <select name="product_condition" id="con">
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
        </section>

        <section class="shipping-section">
          <h3>配送について</h3>
          <ul>
            <li>発送までの日数</li>
            <li>
              <select name="days_to_ship" id="">
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
              <select name="cleaning_flg" id="">
                <option value="">選択してください ></option>
                <option value="1">あり</option>
                <option value="0">なし</option>
              </select>
            </li>
          </ul>
          <ul>
            <li>集荷オプション</li>
            <li>
              <select name="picking_flg" id="">
                <option value="">選択してください ></option>
                <option value="1">あり</option>
                <option value="0">なし</option>
              </select>
            </li>
          </ul>
          <ul>
            <li>購入申請自動許可</li>
            <li>
              <select name="auto_approval_flg" id="">
                <option value="">選択してください ></option>
                <option value="1">あり</option>
                <option value="0">なし</option>
              </select>
            </li>
          </ul>
        </section>

        <section class="price-section">
          <h3>出品価格（300円〜9,999,999円）</h3>
          <ul>
            <li>出品価格</li>
            <li><input type="number" name="price" id="" placeholder="価格を入力">円</li>
          </ul>
        </section>
        <div class="btn-area">
          <ul>
            <li class="listing-btn center">
              <button type="submit" name="listing" value="on" class="listing_btn">出品する</button>
            </li>
            <li class="save-btn center">
              <button type="submit" name="draft_save" value="on" class="save_btn">下書きに保存する</button>
            </li>
          </ul>
        </div>
      </form>
    </article>
  </main>
  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>
  <script src="./js/add.js"></script>
</body>

</html>