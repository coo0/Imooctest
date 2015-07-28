<?php
/**
 * FileName: MySQLi.php
 * User: Mr.J
 * Date: 2015/7/28
 * Time: 13:46
 */

namespace Imooc\Databases;

use Imooc\IDatabase;
class MySQLi implements IDatabase{
	protected $con;
	public function connect($host,$user,$pwd,$db){
		$this->con = mysqli_connect($host,$user,$pwd,$db);
	}
	public function query($sql){
		return mysqli_query($this->con,$sql);
	}

	public function close(){
		mysqli_close($this->con);
	}
}