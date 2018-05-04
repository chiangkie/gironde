<?php
namespace app\index\controller;

class Gallery extends \think\Controller{
	public function gallery(){
		return view('index/v1/gallery/gallery');
	}
}