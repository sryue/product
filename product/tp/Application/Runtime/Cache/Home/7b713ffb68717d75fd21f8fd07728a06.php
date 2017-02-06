<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>杨青个人博客网站—一个站在web前段设计之路的女技术员个人博客网站</title>
<base href="/product/tp/Public/">
<meta name="keywords" content="个人博客,杨青个人博客,个人博客模板,杨青" />
<meta name="description" content="杨青个人博客，是一个站在web前端设计之路的女程序员个人网站，提供个人博客模板免费资源下载的个人原创网站。" />
<link href="css/base.css" rel="stylesheet">
<link href="css/learn.css" rel="stylesheet">
</head>
<body>
<header>
<!-- 头部公共部分 -->
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav">
  <a href="<?php echo U('Index/index');?>"><span>首页</span><span class="en">Protal</span></a>
  <?php if(is_array($cartList)): foreach($cartList as $key=>$vo): ?><a href="<?php echo U('New/knowledge');?>?cart_id=<?php echo ($vo["cart_id"]); ?>"><span><?php echo ($vo["cart_name"]); ?></span><span class="en"><?php echo ($vo["cart_name"]); ?></span></a><?php endforeach; endif; ?>
  </nav>
  </nav>
</header>
<article class="blogs">
<h1 class="t_nav"><span> </span><a href="/" class="n1">网站首页</a>
<a href="/" class="n2"><?php echo ($cartName['cart_name']); ?></a></h1>
<div class="newblog left">
<?php if(is_array($blogChild)): foreach($blogChild as $key=>$v): ?><h2><?php echo ($v["title"]); ?></h2>
   <p class="dateview"><span>发布时间：<?php echo ($v["update_time"]); ?></span><span>作者：<?php echo ($v["author"]); ?></span><span>分类：[<a href="/news/life/"><?php echo ($v["cart_name"]); ?></a>]</span></p>
    <figure><img src="images/01.jpg"></figure>
    <ul class="nlist">
    <p>
    <?php echo mb_substr($v['content'],0,10,'utf-8') ?>...
    </p>
       <a title="<?php echo ($v["title"]); ?>" href="<?php echo U('New/index');?>?blog_id=<?php echo ($v["blog_id"]); ?>" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="line"></div><?php endforeach; endif; ?>
    <div class="blank"></div>
    <div class="ad">  
    <img src="images/ad.png">
    </div>
   <!--  <div class="page"><a title="Total record"><b>41</b></a><b>1</b><a href="/news/s/index_2.html">2</a><a href="/news/s/index_2.html">&gt;</a><a href="/news/s/index_2.html">&gt;&gt;</a></div> -->
</div>
<aside class="right">
   <div class="rnav">
      <h2>栏目导航</h2>
      <ul>
       <li><a href="/download/" target="_blank">CSS3|Html5</a></li>
       <li><a href="/newsfree/" target="_blank">推荐工具</a></li>
       <li><a href="/newsfree/" target="_blank">心得笔记</a></li>
       <li><a href="/newsfree/" target="_blank">IP查询</a></li>
      <li><a href="/newsfree/" target="_blank">JS经典实例</a></li>
      <li><a href="/newsfree/" target="_blank">网站建设</a></li>
     </ul>      
    </div>
<div class="news">
<h3>
      <p>最新<span>模板</span></p>
    </h3>
    <ul class="rank">
<?php if(is_array($newBlog)): foreach($newBlog as $key=>$new): ?><li><a href="<?php echo U('New/index');?>?blog_id=<?php echo ($new["blog_id"]); ?>" title="<?php echo ($new["title"]); ?>" target="_blank"><?php echo ($new["title"]); ?></a></li><?php endforeach; endif; ?>
    </ul>
    <h3 class="ph">
      <p>最热<span>排行</span></p>
    </h3>
   <ul class="paih">
<?php if(is_array($hotBlog)): foreach($hotBlog as $key=>$hot): ?><li><a href="<?php echo U('New/index');?>?blog_id=<?php echo ($new["blog_id"]); ?>" title="<?php echo ($hot["title"]); ?>" target="_blank"><?php echo ($hot["title"]); ?></a></li><?php endforeach; endif; ?>   
    </ul>
    </div>
    <div class="visitors">
      <h3><p>最近访客</p></h3>
      <ul>

      </ul>
    </div>
     <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
</aside>
</article>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>