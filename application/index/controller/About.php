<?php
namespace app\index\controller;

class About extends \think\Controller{
	public function about(){
		return view('index/v1/about/about');
	}
}