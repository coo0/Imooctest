<?php
/**
 * FileName: Mysql.php
 * User: Mr.J
 * Date: 2015/7/28
 * Time: 13:40
 */

namespace Imooc\Databases;

use Imooc\IDatabase;
class Mysql  implements  IDatabase{
    protected $con;
	public function connect($host,$user,$pwd,$db){
		$con = mysql_connect($host,$user,$pwd);
		mysql_select_db($db,$con);
		mysql_set_charset('utf8',$con);
		$this->con = $con;
	}
	public function query($sql){
		return mysql_query($sql,$this->con);
	}

	public function close(){
		mysql_close($this->con);
	}
}