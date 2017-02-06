<?php
namespace Home\Controller;
use Think\Controller;
use Think\CartModel;
class AboutController extends Controller 
{
    public function index()
	{
		//输出模块页面
		$this->display('about');
    }
}