<?php
namespace app\glt168\controller;

class Welcome extends \think\Controller{
	public function welcome(){
		return $this->fetch();
	}
}