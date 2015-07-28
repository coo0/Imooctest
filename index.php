<?php
/**
 * Created by PhpStorm.
 * User: coo08
 * Date: 2015/7/24
 * Time: 10:11
 */
define('BASEDIR',__DIR__);
echo '<meta http-equiv="content-type" content="text/html;charset=utf-8" />';
require 'Imooc/Loader.php';
spl_autoload_register('Imooc\\Loader::autoload');

class Page{

	protected $strategy;

	public function index(){
          $this->strategy->showAd();
		  echo '<br/>';
		   $this->strategy->showCategory();
	}

	public function  setStrategy( $strategy){
		$this->strategy = $strategy;
	}
}
if(isset($_GET['female'])){
	$strategy = new Imooc\FemaleUserStrategy();
}else{
	$strategy = new Imooc\MaleUserStrategy();
}

$page = new Page();

$page->setStrategy($strategy);
$page->index();