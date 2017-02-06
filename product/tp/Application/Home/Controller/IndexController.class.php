<?php
namespace Home\Controller;
use Think\Controller;
use Think\CartModel;
use Think\BlogModel;
// use Home\Model;
class IndexController extends Controller 
{
    public function index()
	{
		//分类Model
        $cartList = D('Cart')->getCart();
        //博客 Model
        $Model = D('Blog');
        $blogList = $Model->getBlog();
        //最新模板查询
        $newBlog = $Model->getNewBlog();
        //最热查询
        $hotBlog = $Model->getNum();
        // print_r($hotBlog);die;
        $this->assign('hotBlog',$hotBlog);
        $this->assign('newBlog',$newBlog);
        $this->assign('cartList',$cartList);
        $this->assign('blogList',$blogList);
		//输出模块页面
		$this->display('index');
    }
}