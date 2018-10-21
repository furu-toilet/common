
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>パスワードの変更</title>
    <link rel="stylesheet" href="inreg.css">
  </head>
  <body>
    <header>
      IoT2nd
    </header>
    <div class="main">
      <form method="post">
        <h1>パスワードの変更</h1>
        <div class="form-disc">現在のパスワード
          </div>
        <div class="form-group">
          <input id="pass" type="password" class="form-control" name="password"  required />
        </div>
        <div class="form-disc">
          新しいパスワード</div>
        <div class="form-group">    
          <input id="pass"  type="password" class="form-control" name="newpass"  required />
        </div>
        <button type="submit" class="btn" name="login" >変更</button>
      </form>
      <br>
      <div class="fooder">
        <a href="register.html">戻る</a>
      </div>
    </div>
  </body>
</html>
