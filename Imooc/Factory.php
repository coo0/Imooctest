<?php
/**
 * Created by PhpStorm.
 * User: coo08
 * Date: 2015/7/24
 * Time: 11:18
 */
namespace Imooc;

class Factory{

	static  function creatdatabase(){

		$db =  Database::getInstance();

		Register::set('db',$db);

		return $db;

	}

}