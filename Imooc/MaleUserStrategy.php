<?php
/**
 * Created by PhpStorm.
 * User: coo08
 * Date: 2015/7/27
 * Time: 14:27
 */

namespace Imooc;

use UserStrategy;
class MaleUserStrategy implements UserStrategy{
     public  function showAd(){
	     echo 'Iphone';
     }

	public  function  showCategory(){
		echo '电子产品';
	}
}