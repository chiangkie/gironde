<?php
namespace app\glt168\controller;

class Article extends Glt168
{
    public function index()
    {
        
    }

    public function alist(){
    	return $this->fetch(ATPL.'Article/alist');
    }
}