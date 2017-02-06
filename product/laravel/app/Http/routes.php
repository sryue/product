<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//登录页面
	Route::get('/', function () {
	    return view('admin/login');
	});
	//退出
	Route::any('loginout','IndexController@loginout');


//前台  首页
	Route::any('user','UserController@user');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']],function () {
    //登录时  控制器，方法
	Route::any('logined','LoginController@index');
	//后台 首页
	Route::any('index','IndexController@index');
	//后台  新增博文
	Route::any('blog_add','BlogController@add');
	//博文添加图片
	Route::any('blogImg','BlogController@blogImg');
	//博文添加入库
	Route::any('blogAdd','BlogController@blogAdd');
	//后台  博文展示
	Route::any('blog_show','BlogController@show');
	//后台 分类添加
	Route::any('cart_add','CartController@add');
	//分类入库
	Route::any('cartAdd','CartController@cartAdd');
	//后台  分类展示
	Route::any('cart_show','CartController@show');
	//后台  系统设置
	Route::any('system','systemController@index');
});
