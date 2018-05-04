<?php
namespace app\index\controller;
use think\Controller;
class Captcha extends Controller{
	public function index(){

		
}
$config =    [
					    // 验证码字体大小
					    'fontSize'    =>    60,    
					    // 验证码位数
					    'length'      =>    1,   
					    // 关闭验证码杂点
					    'useNoise'    =>    false, 
					];
$captcha = new Captcha($config);
return $captcha->entry();
}