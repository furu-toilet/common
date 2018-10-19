
<?php
session_start();
require "Common.php";
$prepare = new Common();
echo $_SESSION['id'];

function h($str){       //文字列出力用
        return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

$selename = $prepare->db_sql("select * from user_info where id = '" . $_SESSION['id'] . "';");
$selepass = $prepare->db_sql("select password  from user_info where id = '" . $_SESSION['id'] . "';");

var_dump($selename);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>会員情報</title>
  <link rel="stylesheet" href="info.css">
</head>
<body>
  <header>
  IoT2nd
  </header>
  <div class="main">
  <h1>ユーザー情報</h1>
  <table align="center">
  <tr>
    <td class="left">ユーザー名</td>
    <td class="center"><?php echo htmlspecialchars($selename['name'])?></td>
    <td class="right"><a href="changename.html">ユーザー名の変更</a></td>
  </tr>  
    <tr>
      <td class="left">ID</td>
      <td class="center"><?php echo $_SESSION['id']; ?></td>
      <td class="right"><a href="changename.html">IDの変更</a></td>
    </tr>  
    <tr>
      <td class="left">パスワード</td>
      <td class="center"><a href="changepass.html">パスワードの変更</a></td>
    </tr>  
  </table>
  </div>
  <div class="others"><a href="index.html">ログアウト</a></div>
</body>
</html>
