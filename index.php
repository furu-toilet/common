<!DOCTYPE html>
<?php require "Common.php";
$test = new Common();
//test
//$all = $test->db_sql("select * from info;");
if(isset($_POST['sql'])){
  echo "実行したSQL文: " . $_POST['sql'] . "<br>";
  $test->db_sql_only($_POST['sql']);
  $all = $test->db_sql("select * from info order by id asc;");  //データを取得

/*  
  foreach($all as $value){
    //echo "value" . key($value[0][0]);
    //echo " " . $value[0][0];
    //echo " " . $value[0][1];
    //echo "column" . array_column($value[1]);
    /*
    foreach($value as $clum){
	key($clum) . "<br>";

    }
   //
    echo "ID: " . $value['id'] . "    NAME: " . $value['name'] . "<br>";
   } 

*/
}


function h($str){
	return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}


?>



<html lang="ja">
<head>
<meta charset="utf-8">
</head>
<body>
<div>
  <form action="#" method="post">
    <label>SQL</label> <input type="text" name="sql">
    <input type="submit" value="実行">
    <br>
 
  </form>
<?php if(isset($_POST['sql'])){ ?>
  <h1>データ一覧</h1>
  <table>
    <tr>
<?php foreach($all[0] as $key => $_): ?>
      <th><?=h($key) ?></th>
<?php endforeach; ?>
    </tr>
<?php foreach($all as $values): ?>
    <tr>
<?php foreach($values as $value): ?>
	<td><?=h($value)?></td>
<?php endforeach; ?>
    </tr>
<?php endforeach; ?>
  </table>
<?php } ?>

</div>


<?php

$test->db_close();


?>


</body>
</html>








