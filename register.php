<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>会員登録</title>
    <link rel="stylesheet" href="inreg.css">
  </head>
  <body>
    <header>
    IoT2nd
    </header>
    <div class="main">
    <form method="post">
      <h1>新規ユーザー登録</h1>
      <div class="form-group">
        <div class="form-disc">ユーザー名</div>
        <input type="text" class="form-control" name="username" required />
      </div>
      <div class="form-group">
        <div class="form-disc">ID</div>
        <input type="text" class="form-control" name="id" required />
      </div>
      <div class="form-disc">パスワード</div>
      <div class="form-group">
        <input type="password" class="form-control" name="password" required />
      </div>
      <button type="submit" class="btn" name="signup">登録</button>
      <br>
      <a href="index.php">ログインはこちら</a>
    </form>
    </div>
    <!-- /div-->
  </body>
</html>