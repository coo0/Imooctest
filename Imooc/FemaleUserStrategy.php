<?php
/**
 * Created by PhpStorm.
 * User: coo08
 * Date: 2015/7/27
 * Time: 14:24
 */

namespace Imooc;
use UserStrategy;
class FemaleUserStrategy implements UserStrategy{

	public  function showAD(){
             echo '2015女装';
	}

	public function  showCategory(){
		     echo '女装';
	}

}