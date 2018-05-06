<?php
namespace app\glt168\controller;

class Article extends Glt168
{
	//资讯列表
    public function alist(){
    	return $this->fetch(ATPL.'Article/alist');
    }
    //添加资讯
    public function add(){
    	return $this->fetch(ATPL.'Article/add');
    }
    //编辑资讯
    public function edit(){
    	return $this->fetch(ATPL.'Article/edit');
    }
}