<?php
Class Common {
	private $pdo = null;
	private $stmt = null;
	private $sql = null;


	function Common(){
		/*  PostgreSQLに接続  */
		try{	
		error_reporting(E_ALL & ~E_NOTICE);
		$url = parse_url(getenv('DATABASE_URL'));
		$dsn = sprintf("pgsql:host=%s;dbname=%s",$url['host'],substr($url['path'],1));	

		$this->pdo = new PDO($dsn,$url['user'],$url['pass']);
		//$this->pdo->setAttribute(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
		//$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			exit('データベース接続失敗：' .$e->getMessage());
		}

	}


	/*  SQL文をDBに投げる（戻り値無し） */
	function db_sql_only($sql){
		try{
			$this->stmt = $this->pdo->prepare($sql);	//SQL文の用意
			$this->stmt->execute();				//SQL文の実行
			//var_dump(PDO::errInfo());
				
		
		}catch(PDOExeption $e){
			var_dump(PDO::errorInfo());	//ErrInfo
			//print_r($this->stmt->errorInfo());	//エラーメッセージ取得
			exit('SQL Error or PHP Error(Common.php"furusawa") :' .$e->getMessage());
		}
	}


	/*  SQL文をDBに投げる （戻り値有 SELECT） */
	function db_sql($sql){

		try{	
			$this->stmt = $this->pdo->prepare($sql);
			$this->stmt->execute();
		
			$all = $this->stmt->fetchALL(PDO::FETCH_ASSOC);
		
			return $all;
		}catch (PDOException $e){
			exit('SQL実行エラー:' .$e->getMessage());
		}
	}
	
	
	
	
	/* DBとの接続の切断  */
	function db_close(){
		$pdo = null;
	}
	
	
}
?>
