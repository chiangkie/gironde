<?php
namespace app\index\controller;

define("ITPL","index/v1/");
class Index extends \think\Controller
{
    public function index()
    {
    	
        return view(ITPL."index/index");
    }
   
}
