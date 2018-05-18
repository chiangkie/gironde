<?php
namespace app\glt168\controller;

class Product extends Glt168
{
    public function brand()
    {
        return $this->fetch(ATPL.'product/brand');
    }
     public function add()
    {
        return $this->fetch(ATPL.'product/add');
    }
    
    public function category(){
		return $this->fetch(ATPL.'product/category');
	}

	public function listpro(){
		return $this->fetch(ATPL.'product/listpro');
	}

	public function category_add(){
		return $this->fetch(ATPL.'product/category-add');
	}
}
