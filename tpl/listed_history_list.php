<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/listed_history_list.css" />
    <title>フクリマ 出品履歴一覧</title>
</head>
<body>

  <header>
    <p class="back-icon">
      <a href="#" onClick="history.back(); return false;">
        <img src="./img/icon/arrow_back_ios_new_black_24dp.svg" alt="" width="24px">
      </a>
    </p>
    <h2>出品履歴一覧</h2>
  </header>

  <nav class="sort-nav">
    <ul>
      <li>並び替え</li>
      <li>絞り込み</li>
    </ul>
  </nav>

  <main>
    <?php foreach($listing_arr as $value):?>
    <section>
      <p class="product-img">
        <img src="./img/users/<?php echo $value['user_id'];?>/products/<?php echo $value['listing_id'];?>/<?php echo $value['product_name'] ;?>_1.<?php echo $value['img_extension'];?>" alt="商品画像" width="70px" height="70px">
        <img src="./img/icon/SOLDマーク.png" alt="購入済みマーク" class="sold-mark <?php echo $value['dealing_state'];?>">
      </p>
      <ul>
        <li class="requests<?php echo $value['requests_sum'];?>">
          <form action="receive_request.php" method="post">
            <button type="submit" class="requests-btn" name="requests-btn" value="<?php echo $value['listing_id'];?>">購入申請<?php echo $value['requests_sum'];?>件</button>
          </form>
        </li>
        <li class="product-name"><?php echo $value['product_name'];?></li>
        <li class="product-price">¥<?php echo $value['price'];?></li>
      </ul>
      <form action="listed_history.php" method="post">
        <button type="submit" name="listed_id" value="<?php echo $value['listed_id'];?>"><img src="./img/icon/進むアイコン.png" alt="進むボタン"></button>
      </form>
    </section>
    <?php endforeach;?>
  </main>

  <footer class="global-footer">
    <?php require_once('./footer.php'); ?>
  </footer>

    
</body>
</html>