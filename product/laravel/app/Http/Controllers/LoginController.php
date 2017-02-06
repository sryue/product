<?php
namespace App\Http\Controllers;

use App\Login;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use DB;
class LoginController extends Controller{
    /**
     * 显示所有有效航班列表
     *
     * @return Response
     */
    public function index()
    {
        //接值
        $user = $_REQUEST['user'];
        $pwd = $_REQUEST['pwd'];
         //查询数据库
        $login_user = DB::table('login')
                    ->where('username',$user)
                    ->get();
        if($login_user)
        {
            //判断密码
            $login_pwd = DB::table('login')
                        ->where('pwd',$pwd)
                        ->get();
            if($login_pwd)
            {
                session_start();
                //存session
                session(['session_info'=>$login_pwd]);
                echo 1;
            }
            else
            {
                echo 2;
            }
        }
        else
        {
            echo 0;
        }
    }
}