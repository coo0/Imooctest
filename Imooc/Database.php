<?php
/**
 * Created by PhpStorm.
 * User: coo08
 * Date: 2015/7/24
 * Time: 11:17
 */

namespace Imooc;

class Database{

   private static $_instance;

	private function __construct(){}

	 static function getInstance(){

		if(!self::$_instance){
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function test(){
		echo 'ok!';
	}

}