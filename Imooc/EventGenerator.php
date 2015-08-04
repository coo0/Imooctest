<?php
/**
 * FileName: EventGenerator.php
 * User: Mr.J
 * Date: 2015/8/4
 * Time: 16:53
 */

namespace Imooc;


 class EventGenerator {

	private  $observers = array();
	public  function addObsever(Observer $observer){
		$this->observers[] = $observer;
	}
	public function notify(){
		foreach($this->observers as $observer){
			$observer->update();
		}
	}
}