<?php
namespace app\glt168\controller;
use think\Controller;


class Member extends Glt168
{
    public function listm()
    {
        return $this->fetch(ATPL.'member/listm');
    }

    public function add()
    {
        return $this->fetch(ATPL.'member/add');
    }

    public function del()
    {
        return $this->fetch(ATPL.'member/del');
    }

    public function level()
    {
        return $this->fetch(ATPL.'member/level');
    }

    public function scoreoperation()
    {
        return $this->fetch(ATPL.'member/scoreoperation');
    }

    public function record_history()
    {	
        return $this->fetch(ATPL.'member/record-history');
    }
    public function record_download()
    {
        return $this->fetch(ATPL.'member/record-download');
    }
    public function record_share()
    {
        return $this->fetch(ATPL.'member/record-share');
    }

}
