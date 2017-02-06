<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>杨青个人博客网站—一个站在web前段设计之路的女技术员个人博客网站</title>
<base href="/product/tp/Public/">
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="css/base.css" rel="stylesheet">
<link href="css/new.css" rel="stylesheet">
</head>
<body>
<header>
  <!-- 引入公共模板 -->
<div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav">
  <a href="<?php echo U('Index/index');?>"><span>首页</span><span class="en">Protal</span></a>
  <?php if(is_array($cartList)): foreach($cartList as $key=>$vo): ?><a href="<?php echo U('New/knowledge');?>?cart_id=<?php echo ($vo["cart_id"]); ?>"><span><?php echo ($vo["cart_name"]); ?></span><span class="en"><?php echo ($vo["cart_name"]); ?></span></a><?php endforeach; endif; ?>
  </nav>
  </nav>

</header>
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置:
          <?php foreach($cartParent as $k1=>$v1):?>
                <a href="<?php echo U('New/knowledge');?>?cart_id=<?php echo ($v1['cart_id']); ?>"><?php echo ($v1['cart_name']); ?></a>&gt; 
          <?php endforeach;?> 
          </span>

                    <a href="/" class="n1">网站首页</a><a href="/" class="n2"><?php echo ($cartName['cart_name']); ?></a></h1>
  <div class="index_about">
    <h2 class="c_titile"><?php echo ($blogShow['title']); ?> </h2>
    <p class="box_c"><span class="d_time">发布时间：<?php echo ($blogShow['update_time']); ?></span><span>编辑：<?php echo ($blogShow['author']); ?></span><span>互动QQ群：<a href="http://wp.qq.com/wpa/qunwpa?idkey=d4d4a26952d46d564ee5bf7782743a70d5a8c405f4f9a33a60b0eec380743c64">280998807</a></span></p>
    <ul class="infos">
      <?php echo ($blogShow['content']); ?>
    </ul>
    <div class="keybq">
    <p><span>关键字词</span>：爱情,犯错,原谅,分手</p>
    
    </div>
    <div class="ad"> </div>
    <div class="nextinfo">
      <p>上一篇：<a href="/news/s/2013-09-04/606.html">程序员应该如何高效的工作学习</a></p>
      <p>下一篇：<a href="/news/s/2013-10-21/616.html">柴米油盐的生活才是真实</a></p>
    </div>
    <div class="otherlink">
      <h2>相关文章</h2>
      <ul>
        <li><a href="/news/s/2013-07-25/524.html" title="现在，我相信爱情！">现在，我相信爱情！</a></li>
        <li><a href="/newstalk/mood/2013-07-24/518.html" title="我希望我的爱情是这样的">我希望我的爱情是这样的</a></li>
        <li><a href="/newstalk/mood/2013-07-02/335.html" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情</a></li>
        <li><a href="/newstalk/mood/2013-07-01/329.html" title="世上最美好的爱情">世上最美好的爱情</a></li>
        <li><a href="/news/read/2013-06-11/213.html" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
        <li><a href="/news/s/2013-06-06/24.html" title="爱情的背叛者">爱情的背叛者</a></li>
      </ul>
    </div>
  </div>
  <aside class="right">
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->
    <div class="blank"></div>
    <div class="news">
      <h3>
        <p>栏目<span>最新</span></p>
      </h3>
      <ul class="rank">
<?php if(is_array($newBlog)): foreach($newBlog as $key=>$new): ?><li><a href="<?php echo U('New/index');?>?blog_id=<?php echo ($new["blog_id"]); ?>" title="<?php echo ($new["title"]); ?>" target="_blank"><?php echo ($new["title"]); ?></a></li><?php endforeach; endif; ?>
    </ul>
      <h3 class="ph">
        <p>最新<span>排行</span></p>
      </h3>
      <ul class="paih">
<?php if(is_array($hotBlog)): foreach($hotBlog as $key=>$hot): ?><li><a href="<?php echo U('New/index');?>?blog_id=<?php echo ($new["blog_id"]); ?>" title="<?php echo ($hot["title"]); ?>" target="_blank"><?php echo ($hot["title"]); ?></a></li><?php endforeach; endif; ?>   
    </ul>
    </div>
    <div class="visitors">
      <h3>
        <p>最近访客</p>
      </h3>
      <ul>
      </ul>
    </div>
  </aside>
</article>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>