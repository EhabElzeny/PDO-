<?php 
class databases {
public $server ='localhost';
public $dbname = 'itmes';
public $user ='root';
public $charset = 'utf8mb4' ;
public function __construct(){
	$dsn = "mysql:host=" . $this->server . ";dbname=" . $this->dbname . ";charset=" . $this->charset ;
	$con = new pdo($dsn , $this->user , $this->pass);
	$con->setattribute(PDO::ATTR_ERRMODE ,PDO::ERRMODE_EXCEPTION); // error
	$con->begintransaction(); // satrt order
	$con->exec("INSERT INTO itmes (id,email) values (null , 'e6@yahoo.com')") ;
	$con->commit(); // do it 
	echo 'DONE INPUTES ALL DATA';
}catch(PDOEXCEPTION $var){
	echo 'ITs NOT DONE PLease return your code ' . $var ;
	}
}
}
	$con = new databases;