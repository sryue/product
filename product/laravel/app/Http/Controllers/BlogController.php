<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class  BlogController extends Controller{
	//博文添加
	public function add()
	{
		//分类查询
		$cart_list = DB::select("select * from `cart`");
		$cart_encode = json_encode($cart_list);
		$cart_show = json_decode($cart_encode,true);
		$cart_add = $this->graduallyAdd($cart_show);
		return view('admin/blog_add',['cart_add'=>$cart_add]);
	}
	//递归
	public function graduallyAdd($data,$parent_id=0,$space=-4,$level=1)
	{
		$space+=4;
		static $arr=[];
		foreach ($data as $key => $value) 
		{
			if($value['parent_id'] == $parent_id)
			{
				$value['html'] = str_repeat("&nbsp;",$space);
				$value['level'] = $level;
				$arr[] = $value;
				$this->graduallyAdd($data,$value['cart_id'],$space,$level+1);
			}
		}
		return $arr;
	}
	//博文添加图片
	public function blogImg(Request $request)
	{
		//ajax上传文件
		$tmp_name = $_FILES['image']['tmp_name'];  //临时文件
		$image = file_get_contents($tmp_name);

        $file_name = $_FILES['image']['name'];    //文件名
		//后缀名
		$time = time();
		$type = substr($file_name, strrpos($file_name, '.') + 1);
		$name = 'images/'.$time.'.'.$type;
		file_put_contents($name, $image);
		if(file_exists($name))
		{
			echo $name;
		}
		else
		{
			echo 0;
		}
		
	}
	//博文添加入库
	public function blogAdd(Request $request)
	{
		//接值
		$cart_id = $request->input('cart_id');
		$title = $request->input('title');
		$author = $request->input('author');
		$content=$request->input('content');
		$img = $request->input('img'); 
		$update_time = date('Y-m-d');
		//入库
		$result = DB::table('blog')->insert(
    		[
    		'cart_id' =>$cart_id, 
    		'title' =>$title,
    		'author'=>$author,
    		'content'=>$content,
    		'img'=>$img,
    		'update_time'=>$update_time
    		]);
		if($result)
		{
			echo 1;
		}
		else
		{
			echo 0;
		}

	}
	//博文展示
	public function show()
	{
		$blog_show = DB::table('blog')
            ->join('cart', 'blog.cart_id', '=', 'cart.cart_id')
            ->select('blog.*', 'cart.cart_name')
            ->get();
        $blog_encode = json_encode($blog_show);
        $blog_list = json_decode($blog_encode,true);
		return view('admin/blog_show',['blog_list'=>$blog_list]);
	}
}