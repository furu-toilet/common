<!DOCTYPE html>
<?php
session_start();

require "Common.php";
$prepare = new Common();


$furu = $prepare->db_sql("select * from user_info;");

if (isset($_POST["login"])) {

   //if (!empty($_POST['id']) && !empty($_POST['password'])) {
     $id = $_POST['id'];
     $password = $_POST['password'];
     $test = null;
	//echo "ID" . $_POST['id'];
	//echo "password". $_POST['password'];
	
	   $blo_log = false;			//ログインFLG
	foreach($furu as $value){	
		//echo "id" . $value['id'];
		//echo "pass" . $value['password'];
		   
		 if($id == $value['id']){
		  	if($password == $value['password']){
				$blo_log = true;		//ログインON
			  	$test = $value['name'];
				break;
			 }
		  }
     	}
     if($blo_log == false){
       echo("ユーザーIDまたはパスワードが間違っています");
     }else {
	     $_SESSION['id'] = $id;
	     $_SESSION['password'] = $password;
	     $_SESSION['username'] = $test;
	     header('location: info.php');
     }
  // }
}

?>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>会員登録</title>
    <link rel="stylesheet" href="inreg.css">
    <!-- bootstrap? -->
    <!-- link rel="stylesheet" href="styles.css"-->
  </head>
  <body>
    <!--div class="col-xs-6 col-xs-offset-3"-->
    <header>
    IoT2nd
    </header>
    <div class="main">
    <form method="post">
      <h1>ログイン</h1>
      <div class="form-disc">
      ユーザーID</div>
      <div class="form-group">
        <input type="text" class="form-control" name="id"  required />
      </div>
      <div class="form-disc">
      パスワード</div>
      <div class="form-group">    
        <input type="password" class="form-control" name="password"  required />
      </div>
      <button type="submit" class="btn" name="login">ログイン</button>
      </form>
      <br>
      <div class="fooder">
      <a href="register.php">ユーザー登録はこちら</a>
      </div>
    </div>
    <!-- /div-->
  </body>
</html>
