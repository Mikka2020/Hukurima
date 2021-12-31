<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=320,
      height=480,
      initial-scale=1.0,
      minimum-scale=1.0,
      maximum-scale=2.0,
      user-scalable=yes" />
  <title>Document</title>
</head>

<body>

  <div id=search>
    <form method="post" action="">
      <input type="text" name="message" placeholder="商品を検索しよう">
      <button type="submit" name="search"  value="up"><i class="fas fa-search"></i></button>
    </form>
  </div>

  <div id=keyword>
    <h2>急上昇キーワード</h2>
    <div id=keywords>
      <button type="submit" name="btn" value="up">アウター</button>
      <button type="submit" name="btn" value="up">ノースフェイス</button><br>
      <button type="submit" name="btn" value="up">パーカー</button>
      <button type="submit" name="btn" value="up">DIESEL</button>
    </div>
  </div>
  <br>
  <div id=search_values>
    <table>
      <th><button type="submit" name="btn" value="up"><i class="fas fa-tshirt"></i></button>
        <h6>ブランドから検索</h6>
      </th>
      <th><button type="submit" name="btn" value="up"><i class="fa fa-book" aria-hidden="true"></i></button>
        <h6>カタログから検索</h6>
      </th>
      <th><button type="submit" name="btn" value="up"><i class="fa fa-bars" aria-hidden="true"></i></button>
        <h6>カテゴリから検索</h6>
      </th>
    </table>
  </div>
  <div id=save_search>
    <h5>保存した検索結果</h5>
    <table>
      <div id=search01>
        <table>
          <tr>
            <h5>DIESEL</h5>
            <th>
              <img src="img/DIESEL01.jpg" alt="DIESEL01" width="200px" height="200px">
              <img src="img/DIESEL02.jpg" alt="DIESEL02" width="200px" height="200px">
              <img src="img/DIESEL03.jpg" alt="DIESEL03" width="200px" height="200px">
              <img src="img/DIESEL04.jpg" alt="DIESEL04" width="200px" height="200px">
            </th>
          <tr>
          </tr>
          </tr>
        </table>
      </div>
      <div id=search02>
        <table>
          <tr>
            <h5>DIESEL、スウェット</h5>
            <th>
              <img src="img/DIESEL03.jpg" alt="DIESEL03" width="200px" height="200px">
              <img src="img/DIESEL07.jpg" alt="DIESEL07" width="200px" height="200px">
              <img src="img/DIESEL05.jpg" alt="DIESEL05" width="200px" height="200px">
              <img src="img/DIESEL06.jpg" alt="DIESEL06" width="200px" height="200px">
            </th>
          <tr>
          </tr>
          </tr>
        </table>
      </div>
      <div id=search02>
        <table>
          <tr>
            <h5>DIESEL、パーカー</h5>
            <th>
              <img src="img/DIESEL02.jpg" alt="DIESEL02" width="200px" height="200px">
              <img src="img/DIESEL04.jpg" alt="DIESEL04" width="200px" height="200px">
              <img src="img/DIESEL06.jpg" alt="DIESEL06" width="200px" height="200px">
              <img src="img/DIESEL05.jpg" alt="DIESEL05" width="200px" height="200px">
            </th>
          <tr>
          </tr>
          </tr>
        </table>
      </div>
    </table>
  </div>

</body>

</html>