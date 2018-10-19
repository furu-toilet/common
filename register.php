<?php

require "Common.php";
$prepare = new Common();
$furusele = $prepare->db_sql("select * from user_info;");
var_dump($furusele);
if (isset($_POST['register'])) {
   //if (!empty($_POST['id']) && !empty($_POST['password'])) {
   
   //inputから変数取得
	$username = $_POST['username'];
	$id = $_POST['id'];
	$password = $_POST['password'];
	

	
	//IDの重複CK
	$blo_log = 0;
	
	foreach($furusele as $value){
		if($id == $value['id']){
			$blo_log = 1;
			break;
		}
	}
	
     if($blo_log == 0){
	     echo "既に同じIDが登録されています。別のIDを入力してください。";
	     
     }else {
	     $prepare->db_sql_only("insert into user_info values('" . $username . "','" . $id . "','" . $password . "')");
	     //echo "登録完了";
     }
  // }
}

?>

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
      <button type="submit" class="btn" name="register">登録</button>
      <br>
      <a href="index.php">ログインはこちら</a>
    </form>
    </div>
    <!-- /div-->
  </body>
</html>
