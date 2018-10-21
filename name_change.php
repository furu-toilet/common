<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ユーザー名変更</title>
    <link rel="stylesheet" href="inreg.css">
  </head>
  <body>
    <header>
      IoT2nd
    </header>
    <div class="main">
      <form method="post">
        <h1>ユーザー名の変更</h1>
        <div class="form-disc">新しいユーザー名</div>
        <div class="form-group">
        <input type="text" class="form-control" name="username" required />
        </div>
        <button type="submit" class="btn" name="login" onClick="login1();">変更</button>
      </form>
      <br>
      <div class="fooder">
        <a href="info.php">戻る</a>
      </div>
    </div>
  </body>
</html>
