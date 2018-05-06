<?php
namespace app\glt168\controller;

class System extends Glt168
{
	public function setting(){
		return $this->fetch(ATPL.'system/setting');
	}
	public function columns(){
		return $this->fetch(ATPL.'system/columns');
	}
	public function data(){
		return $this->fetch(ATPL.'system/data');
	}
	public function shielding(){
		return $this->fetch(ATPL.'system/shielding');
	}
	public function logs(){
		return $this->fetch(ATPL.'system/logs');
	}
}