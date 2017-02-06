<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
	public function index()
	{
		//判断是否存session
		$session_value = session('session_info');
		if($session_value)
		{
			return view('admin/index');
		}
		else
		{
			return redirect('/');
		}
		
	}
	//退出
	public function loginout()
	{
		return session_destroy('session_info');
	}
}