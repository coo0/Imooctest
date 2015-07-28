<?php
/**
 * Created by PhpStorm.
 * User: coo08
 * Date: 2015/7/24
 * Time: 10:20
 */

namespace Imooc;

class Loader{

	static public function autoload($class){

		require str_replace('\\','/',$class).'.php';

	}

}