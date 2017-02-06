<?php
namespace Home\Model;
use Think\Model;

class BlogModel extends Model
{
	//表名
	protected $tableName = 'blog'; 
	//查询所有的文章
	public function getBlog()
	{
		$Model = M('Blog');
		$blogList = $Model->query("SELECT * from blog INNER JOIN cart on cart.cart_id=blog.cart_id where status=1");
		return $blogList;
	}
	//根据id查询文章  详情页
	public function getBlogDetail($id)
	{
		$Model = M('Blog');
		$blogShow = $Model->query("SELECT * from `blog` INNER JOIN `cart` on cart.cart_id=blog.cart_id WHERE blog_id=$id");
		return $blogShow;
	}
	//根据分类父级id   查询该子类所有文章
	public function getBlogChild($cart_id)
	{
		$Model = M('Blog');
		$blogChild = $Model->query("
			SELECT * from `cart` INNER JOIN `blog` on cart.cart_id=blog.cart_id where cart.cart_id in (SELECT cart_id from `cart` where parent_id=$cart_id or cart_id=$cart_id)");
		return $blogChild;
	}
	//根据文章id 查找分类名
	public function getIdCartName($id)
	{
		$Model = M('Blog');
		$cartName = $Model->query("SELECT * FROM cart where (cart_id=(select cart_id from blog where blog_id=$id))");
		return $cartName;
		
	}
	
	//最新文章查询
	public function getNewBlog()
	{
		$Model = M('Blog');
		$newBlog = $Model->field('blog_id,title')->order('update_time desc')->limit(10)->select();
		return $newBlog;
	}
	//最热文章
	public function getNum()
	{
		$Model = M('Blog');
		$hotBlog = $Model->field('blog_id,title')->order('num desc')->limit(10)->select();
		return $hotBlog;
	}
}

?>