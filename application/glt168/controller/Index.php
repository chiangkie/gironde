<?php
namespace app\glt168\controller;
use think\Controller;


class Index extends Glt168
{
    public function index()
    {
        return $this->fetch(ATPL.'index/index');
    }


    public function welcome(){
		return $this->fetch(ATPL.'index/welcome');
	}
}


