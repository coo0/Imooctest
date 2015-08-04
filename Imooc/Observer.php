<?php
/**
 * FileName: Observer.php
 * User: Mr.J
 * Date: 2015/8/4
 * Time: 16:54
 */

namespace Imooc;


interface Observer {

	public function update($event_info = null);

}