<?php
namespace app\common\validate;
use think\Validate;
class Adminlist extends Validate{
	protected $rule = [
        'name'  =>  'require|length:5,15',
        'email' =>  'require|email',
        "sex"   =>  "require|in:1,0",
        "status"=>"in:1,0",
        "password" =>['regex'=>'/\w{5,15}/'],
        "comment"=>"chsDash|length:0,100",
        "phone"=>'^1[3-9]\d{9}',
        "role_id"=>'\d{1,50}',

    ];
    protected $message =[
    	'name.require'=>"管理员不能为空",
    	"name.length" =>"管理员账号有效长度5-15",
    	"email"=>"请输入合法邮箱",
    	"sex"=>"@禁止非法操作！你已经被锁定！",
    	"password"=>"密码长度5-15位！",
    	"comment"=>"禁止特殊字符输入！",
    	"email"	 =>"邮箱格式错误",
    	"phone"=>"请输入正确的手机号！",
    ];
    protected $scene=[];
}