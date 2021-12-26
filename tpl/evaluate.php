<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0" />
  <link rel="stylesheet" href="./../css/evaluate.css" />
  <title>Document</title>
</head>

<body>
  <div class="evaluate">
    <h1>評価</h1>
  </div>
  <hr class="line" />

  <div class="arert">
    <div class="message">
      <p class="orange">✔︎</p>
      <div class="mes_text">
        <h4>受け取り評価をしてください</h4>
        <p>
          商品が発送されました。商品が到着したら出品者の評価をしてください。
        </p>
      </div>
    </div>
  </div>
  <div class="url">
    <a href="">取引についてFAQ ></a><br />
    <a href="">取引者のよくある質問 ></a>
  </div>

  <div class="evaluate_info">
    <h2>取引情報</h2>
    <div class="information">
      <img src="img/ニット.png" alt="information" />
      <div class="text">
        <p>アシメレースアップリボンニット（長袖）</p>
        <p class="red">¥3,600</p>
      </div>
    </div>
  </div>

  <div class="user_info">
    <h2>出品者情報</h2>
    <div class="user">
      <a href=""><img src="img/user01.png" alt="information" />
        <p>コウイチ</p>
        <p class="pink">></p>
      </a>
    </div>
    <button class="Evaluate_button">取引メッセージ</button>
  </div>

  <div class="value">
    <h2>評価</h2>
    <form method="post" action="" enctype="multipart/form-data">
      <div class="value_button">
        <div class="good">
          <button class="Great_button" value="1">😃</button>
          <p>良かった</p>
        </div>
        <div class="bad">
          <button class="Bad_button" value="9">😩</button>
          <p>残念だった</p>
        </div>
      </div>
      <div class="comment">
        <p class="small_text">評価に際してコメントを記入しましょう。</p>
        <div class="mes_foryou">
          <input type="text" placeholder="この度はお取引ありがとうございました。" class="Evaluate_text">
        </div>
        <p>
          ※コメントは必要ではありませんが、お礼のメッセージなどを書くと喜ばれます
        </p>
        <button type="submit" name="btn" value="up">送信する</button>
    </form>
  </div>
  </div>
</body>

</html>