<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="./css/post.css">
  <title>Document</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <header>
      <!-- <img src="./img/icon/hukurima.png" alt="" width="60px" height=""> -->
      <p class="center">投稿</p>
      <p>
        <button type="submit" name="post_submit">投稿する</button>
      </p>
    </header>
    <main>
      <article>
        <section>
          <p class="textarea-wrapper">
            <textarea name="post_text" id="" cols="30" rows="10" maxlength="140"></textarea>
          </p>
          <div class="preview-wrapper">
            <img id="preview" class="post-img">
          </div>
          <div class="btn-wrapper">
            <label for="myImage">
              <input type="file" name="post_img" class="none" id="myImage" accept="image/*">
              <img src="./img/icon/出品アイコン.svg" alt="" width="24px" height="">
            </label>
            <button>
              <img src="./img/icon/紙袋アイコン.svg" alt="" width="24px" height="">
            </button>
          </div>
        </section>
      </article>
    </main>
  </form>
  <footer class="global-footer">
    <?php require_once('./sns_footer.php'); ?>
  </footer>
  <script src="./js/add.js"></script>
</body>

</html>