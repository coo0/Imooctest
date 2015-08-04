<?php
/**
 * FileName: IDatabase.php
 * User: Mr.J
 * Date: 2015/7/28
 * Time: 13:37
 */

namespace Imooc;


interface IDatabase {

	public function connect($host,$user,$pwd,$db);
	public function query($sql);
	public function close();
}


