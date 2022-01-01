<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>出品画面</title>
  <link rel="stylesheet" href="./css/core_style.css">
  <link rel="stylesheet" href="./css/listing.css">
</head>

<body>
  <!-- <?php //require_once '参照ヘッダーファイル';?> -->

  <main>

    <form action="" method="post" enctype="multipart/form-data">

      <div class="input_img_contents">
        <input type="file" name="product_img" id="first_img_content">
      </div>

      <div class="title_area">
        <h2>商品名と説明</h2><span class="help_guide">出品禁止物・出品ルール</span>
      </div>
      <article class="input_area">
        <input type="text" name="product_name" placeholder="商品名 (必須)" maxlength="10">
        <div>
          <div class="input_box">
            <p class="input_label">
              <input type="text" name="product_explan" value="" placeholder="プレースホルダーを書く" maxlength="1000"
                class="input_form">
          </div>
        </div>
        <!-- <input type="text" name="hash_tag" value="" placeholder="ハッシュタグを利用する"> -->
      </article>

      <h2>商品情報</h2>
      <article class="input_area">
        <div class="input_box">
          <p class="input_label">カテゴリ</p>
          <input type="text" name="category" value="" placeholder="選択してください (必須)" class="input_form">
        </div>
        <div class="input_box">
          <p class="input_label">商品の状態</p>
          <input type="text" name="product_statu" value="" placeholder="選択してください (必須)" class="input_form">
        </div>
        <div class="input_box">
          <p class="input_label">ブランド</p>
          <input type="text" name="bland" value="" placeholder="選択してください (必須)" class="input_form">
        </div>
      </article>

      <h2>配送について</h2>
      <article class="input_area">
        <div class="input_box">
          <p class="input_label">配送までの日数</p>
          <input type="text" name="send_days" value="" placeholder="指定しない (必須)" class="input_form">
        </div>
        <div class="input_box">
          <p class="input_label">クリーニングオプション</p>
          <input type="text" name="cleaning_flg" value="" placeholder="指定しない (任意)" class="input_form">
        </div>
        <div class="input_box">
          <p class="input_label">集荷オプション</p>
          <input type="text" name="pickup_flg" value="" placeholder="指定しない (任意)" class="input_form">
        </div>
      </article>

      <h2>販売価格 (300円〜9,999,999円)</h2><span class="help_guide">販売利益とは</span>
      <article class="input_area">
        <div class="input_box">
          <p class="input_label">出品価格</p><input type="text" name="price" value="" placeholder="0円" class="input_form">
        </div>
        <div class="input_box">
          <p class="input_label">販売手数料</p>
          <p class="price_contents">0円</p>
        </div>
        <div class="input_box">
          <p class="input_label">販売利益</p>
          <p class="price_contents">0円</p>
        </div>
      </article>

      <article class="send_form">
        <p class="annotation">禁止されている<a href="利用規約のファイル名" class="annotation_guide">行為</a>及び<a href="利用規約のファイル名"
            class="annotation_guide">出品物</a>を必ずご確認ください。また、出品をもちまして<a href="利用規約のファイル名"
            class="annotation_guide">規約</a>に同意したことになります。</p>

        <button type="submit" name="listing" value="on" class="listing_btn">出品する</button>
        <button type="submit" name="draft_save" value="on" class="save_btn">下書きに保存する</button>
      </article>

      <!-- <label id="file-test-label" for="file-test">ファイルを選択</label><input type="file" id="file-test">
    <input type="text" id="file-test-name" disabled> -->
    </form>

  </main>

  <!-- <?php require_once '参照フッダーファイル';?> -->
  <!-- <script src="" async></script> -->
</body>

</html>