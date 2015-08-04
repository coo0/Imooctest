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

//class Page{
//
//	protected $strategy;
//
//	public function index(){
//          $this->strategy->showAd();
//		  echo '<br/>';
//		   $this->strategy->showCategory();
//	}
//
//	public function  setStrategy( $strategy){
//		$this->strategy = $strategy;
//	}
//}
//if(isset($_GET['female'])){
//	$strategy = new Imooc\FemaleUserStrategy();
//}else{
//	$strategy = new Imooc\MaleUserStrategy();
//}
//
//$page = new Page();
//
//$page->setStrategy($strategy);
//$page->index();

//class Page{
//	public function index(){
//		$user = Imooc\Factory::getuser(1);
//		$user->mobile = 11;
//		var_dump($user);
//		$this->test();
//	}
//	public function test(){
//		$user = Imooc\Factory::getuser(1);
//		var_dump($user);
//		$user->name = 'coco';
//	}
//}
//
//$test = new Page();
//$test->index();


class Event extends Imooc\EventGenerator{

	public  function trigger(){
		echo 'Event<br/>';
        $this->notify();
	}
}

class Observer1 implements Imooc\Observer{

	public function update($event_info = null){
		echo 'Observer1<br/>';
	}
}

$event = new Event();
$event->addObsever(new Observer1());
$event->trigger();


$func = function($str){
	echo $str;
};

$func('some string');


function getPrintStrFunc(){
	$func = function($str){
	  echo $str;
	};
	return $func;
}

$fun1 = getPrintStrFunc();

$fun1('some thins');

class Category{
	private $db;
	function __construct(){
		$this->db = new Imooc\Databases\MySQLi();
	}

	public function getCategorys($id){
		$res = $this->db->query('select id from category where parent_id =' .$id);
		$data = $res->fetch_assoc();

	}

	public function __destruct(){
		$this->db->close();
	}
}


