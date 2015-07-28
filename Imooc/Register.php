<?php
/**
 * Created by PhpStorm.
 * User: coo08
 * Date: 2015/7/24
 * Time: 13:38
 */

namespace Imooc;

class Register{

	static  $objects;

	static function set($key,$object){
		self::$objects[$key] = $object;
	}
	static function get($key){
		return self::$objects[$key];
	}
	static function _unset($key){
		unset(self::$objects[$key]);
	}
}