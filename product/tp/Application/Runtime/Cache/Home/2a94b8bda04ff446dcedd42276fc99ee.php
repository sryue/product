<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>个人博客模板（寻梦）</title>
<base href="/product/tp/Public/">
<meta name="keywords" content="个人博客模板,博客模板" />
<meta name="description" content="寻梦主题的个人博客模板，优雅、稳重、大气,低调。" />
<link href="css/base.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
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
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p>打了死结的青春，捆死一颗苍白绝望的灵魂。</p>
      <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
      <p>加了锁的青春，不会再因谁而推开心门。</p>
    </ul>
    <div class="avatar"><a href="#"><span>杨青</span></a> </div>
  </section>
</div>
<div class="template">
  <div class="box">
    <h3>
      <p><span>个人博客</span>模板 Templates</p>
    </h3>
    <ul>
      <li><a href="/"  target="_blank"><img src="images/01.jpg"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>
      <li><a href="/" target="_blank"><img src="images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
      <li><a href="/"  target="_blank"><img src="images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
      <li><a href="/" target="_blank"><img src="images/04.jpg"></a><span>女生清新个人博客网站模板</span></li>
      <li><a href="/"  target="_blank"><img src="images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>
      <li><a href="/"  target="_blank"><img src="images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>
    </ul>
  </div>
</div>
<article>
  <h2 class="title_tj">
    <p>文章<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
  <?php if(is_array($blogList)): foreach($blogList as $key=>$v): ?><h3><?php echo ($v["title"]); ?></h3>
    <figure>
    <img src="<?php echo ($v["img"]); ?>" width="50" height="100">
    </figure>
    <ul>
      <p>
      <?php echo mb_substr($v['content'],0,10,'utf-8') ?>...
    </p>
      <a title="<?php echo ($v["title"]); ?>" href="<?php echo U('New/index');?>?blog_id=<?php echo ($v["blog_id"]); ?>" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <p class="dateview"><span><?php echo ($v["update_time"]); ?></span><span>作者：<?php echo ($v["author"]); ?></span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span></p><?php endforeach; endif; ?>
  </div>
  <aside class="right">
    <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
    <div class="news">
    <h3>
      <p>最新<span>文章</span></p>
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
    <h3 class="links">
      <p>友情<span>链接</span></p>
    </h3>
    <ul class="website">
      <li><a href="/">个人博客</a></li>
      <li><a href="/">谢泽文个人博客</a></li>
      <li><a href="/">3DST技术网</a></li>
      <li><a href="/">思衡网络</a></li>
    </ul> 
    </div>  
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->   
    <a href="/" class="weixin"> </a></aside>
</article>
<footer>
  <p>Design by DanceSmile <a href="http://www.miitbeian.gov.cn/" target="_blank">蜀ICP备11002373号-1</a> <a href="/">网站统计</a></p>
</footer>
<script src="js/silder.js"></script>
</body>
</html>