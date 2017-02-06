<?php
namespace Home\Controller;
use Think\Controller;
use Think\CartModel;
use Think\BlogModel;
class NewController extends Controller 
{
	//首页文章的详情页
    public function index()
	{
        //分类Model
        $cartList = D('Cart')->getCart();
		//输出模块页面
		$id = $_REQUEST['blog_id'];
		//根据id查找详情也
		$Model = D('Blog');
		$blogShow = $Model->getBlogDetail($id);
		//根据id查找分类名    具体地址
		$cartName = D('Blog')->getIdCartName($id);
		$cartParent = D('Cart')->getRecursion($cartName);
		 //最新模板查询
        $newBlog = $Model->getNewBlog();
        //最热查询
        $hotBlog = $Model->getNum();
        $this->assign('cartParent',$cartParent);
        $this->assign('hotBlog',$hotBlog);
        $this->assign('newBlog',$newBlog);
		$this->assign('cartList',$cartList);
		$this->assign('blogShow',$blogShow[0]);
		$this->assign('cartName',$cartName[0]);
		$this->display('new');
    }
    //显示每个分类下的所有文章
    public function knowledge()
    {
    	//头部分类
        $cartList = D('Cart')->getCart();
    	//接收分类id
    	$cart_id = I('get.cart_id');
    	$Model = D('Blog');
    	$blogChild = $Model->getBlogChild($cart_id);
    	//查看分类名
    	$cartName = D('Cart')->getCateName($cart_id);
    	 //最新模板查询
        $newBlog = $Model->getNewBlog();
        //最热查询
        $hotBlog = $Model->getNum();
        
        $this->assign('hotBlog',$hotBlog);
        $this->assign('newBlog',$newBlog);
    	$this->assign('cartList',$cartList);
    	$this->assign('blogChild',$blogChild);
    	$this->assign('cartName',$cartName[0]);
    	$this->display('knowledge');
    }
}