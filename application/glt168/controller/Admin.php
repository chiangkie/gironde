<?php
namespace app\glt168\controller;
use think\Request;
use think\Validate;
use think\Loader;
class Admin extends Glt168
{
   //角色管理
   public function role(){
   		$role=new \app\common\model\Role;
   		$list=$role->where(array())->paginate(15);
   		$this->assign("list",$list);
   		return $this->fetch(ATPL.'admin/role');
   }
   //角色添加
   public function role_add(){
   		return $this->fetch(ATPL.'admin/role-add');
   }
   //角色修改
   public function role_edit(){
   		return $this->fetch(ATPL.'admin/role-edit');
   }
   //权限管理
   public function permission(){
   		$permission = new \app\common\model\Permission;
   		$list=$permission->where(array())->paginate(15);
   		$this->assign('list', $list);
   		return $this->fetch(ATPL.'admin/permission');
   }
   //权限添加
   public function permission_add(){
   		return $this->fetch(ATPL.'admin/permission-add');
   }
   //权限修改
   public function permission_edit(){
   		return $this->fetch(ATPL.'admin/permission-edit');
   }
   //管理员列表
   public function showlist(){
   		$admin = new \app\common\model\Adminlist;
   		$list=$admin->where(array())->paginate(15);
   		$this->assign('list', $list);
   		// echo'<pre>';
   		// print_r($list);exit;
   		return $this->fetch(ATPL.'admin/showlist');
   }
   //管理员添加
   public function add(){
   		return $this->fetch(ATPL.'admin/add');
   }
   //管理员添加操作
   public function add_do(){
   		if(request()->isAjax()){
   			
   			$data=input('post.');
   			$validate=Loader::validate('Adminlist');
   			if(!$validate->check($data)){

   				echo json_encode(["s"=>$validate->getError()]);
   			}else{
   				$adminlist = new \app\common\model\Adminlist;
	   			$adminlist->data($data);
	   			if($adminlist->save()){
	   				echo json_encode(["s"=>"1"]);
	   			}else{
	   				echo json_encode(["s"=>"输入的账号/手机号/邮箱已经被占用！"]);
	   			}
   			}
   			
   		}
   		
   }
   //管理员编辑
   public function edit(){
   		return $this->fetch(ATPL.'admin/edit');
   }
}