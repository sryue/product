<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
class CartController extends Controller{
	public function add()
	{
		//查询所有
		$data = DB::table('cart')
                ->get();
        $cate_encode = json_encode($data);
        $cate_decode = json_decode($cate_encode,true);
        $res = $this->recursion($cate_decode);
		return view('admin/cart_add',['res'=>$res]);
	}
	public function recursion($data,$parent_id=0,$space=0,$level=1)
	{
		$space +=4;
		static $arr;
		foreach ($data as $key => $value) 
		{
			if($value['parent_id'] == $parent_id)
			{
				$value['html'] = str_repeat("&nbsp;",$space);
				$value['_html'] = str_repeat("&nbsp;",$space)."|--";
				$value['level'] = $level;
				$arr[] = $value;
				$this->recursion($data,$value['cart_id'],$space,$level+1);
			}
		}
		return $arr;
	}
	//分类添加入库
	public function cartAdd(Request $request)
	{
		//接值
		$parent_id = $_REQUEST['cart_id'];
		$cart_name = $request->input('cart_name'); 
		//入库
		$cart = DB::table('cart')->insert(['cart_name' =>$cart_name,'parent_id'=>$parent_id]);
		if($cart)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	public function show()
	{
		//查询数据库  
		$first_show = DB::select('select * from `cart`');
		$sec_encode = json_encode($first_show);
		$sec_show = json_decode($sec_encode,true);
		$list = $this->recursion($sec_show);
		return view('admin/cart_show',['list'=>$list]);
	}
}