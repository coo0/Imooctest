<?php
/**
 * FileName: PDO.php
 * User: Mr.J
 * Date: 2015/7/28
 * Time: 13:48
 */

namespace Imooc\Databases;

use Imooc\IDatabase;
class PDO  implements IDatabase{
	protected $con;
	public function connect($host,$user,$pwd,$db){
		$this->con = new \PDO("mysql:host={$host};dbname={$db}",$user,$pwd);
	}
	public function query($sql){
		return $this->con->query($sql);
	}

	public function close(){
		unset($this->conn);
	}
}