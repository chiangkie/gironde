<?php
namespace app\glt168\controller;
use think\Controller;


class Picture extends Glt168
{
    
    public function listpic()
    {
        return $this->fetch(ATPL.'picture/listpic');
    }

    
}
