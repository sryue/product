<?php
namespace Home\Model;
use Think\Model;

class CartModel extends Model
{
	//表名
	protected $tableName = 'cart'; 
	public function getCart()
	{
		//查询数据库
		$cart = M("Cart"); // 实例化User对象
		$cartList = $cart->where('parent_id=0')->select();
		return $cartList;
	}
	//获取分类名
	public function getCateName($cart_id)
	{
		$Model = M("Cart");
		$cartName = $Model->where("cart_id=$cart_id")->select();
		return $cartName;
	}
	//获取具体位置  递归
	public function getRecursion($cartName)
	{
		$Model = M('Cart');
		foreach($cartName as $key => $value) 
		{
			$parent_id = $value['parent_id'];
			if($value['parent_id'] != 0)
			{
				$parent_id = $value['parent_id'];
				$data = $Model->where("cart_id=$parent_id")->select();
				foreach ($data as $k => $v) 
				{
					$pid = $v['parent_id'];
				}
				$cartName = array_merge($cartName,$data);
				$parent_cate = $Model->where("cart_id=$pid")->select();
				$cartName = array_merge($cartName,$parent_cate);
			}
			else
			{
				$data = $Model->where("cart_id=$parent_id")->select();
				$cartName = array_merge($cartName,$data);
			}
			
		}
		$cartName = array_reverse($cartName);
		return $cartName;
	}
	
}

?>