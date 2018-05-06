<?php
namespace app\glt168\controller;
use think\Controller;


class Feedback extends Glt168
{
    public function listfb()
    {
        return $this->fetch(ATPL.'feedback/listfb');
    }

    public function show()
    {
        return $this->fetch(ATPL.'feedback/show');
    }

  
}
