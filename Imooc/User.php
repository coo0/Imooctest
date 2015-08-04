<?php
/**
 * FileName: User.php
 * User: Mr.J
 * Date: 2015/8/4
 * Time: 16:02
 */

namespace Imooc;


class User {
    public $id;
	public $name;
	public $mobile;
	public $regtime;
    private  $db;
	public function __construct($id){
		$this->db = new Databases\MySQLi();
		$this->db->connect('localhost','root','root','test');
		$res =$this->db->query('select * from user where id =' .$id);
		$data = $res->fetch_array();
		$this->id = $data['id'];
		$this->name = $data['name'];
		$this->mobile = $data['mobile'];
		$this->regtime = $data['regtime'];

	}

	public function __destruct(){
        $this->db->query('update user set name ="'.$this->name .'" , mobile ="'.$this->mobile.'" , regtime = "'.$this->regtime.'"  where id ='.$this->id);
		$this->db->close();
	}
}