<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<!-- 头部 -->
@include('admin/head')
<div class="container clearfix">
  <!-- 导航栏 -->
   @include('admin/nav')  
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="{{URL('blog_show')}}">分类管理</a><span class="crumb-step">&gt;</span><span>新增分类</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="javascript:void(0);" method="post">
                    <table class="insert-tab" width="100%">
                        <tbody>
                       <tr>
                           <th></th>
                           <td>
                               <select name="parent_id">
                               <option value="0">顶级分类</option>
                               <?php foreach($res as $key=>$val):?>
                                  <option value="<?php echo $val['cart_id']?>">
                              <?php echo $val['html']?><?php echo $val['cart_name']?>
                                  </option>
                                <?php endforeach;?>
                               </select>
                           </td>
                       </tr>
                        <tr>
                            <th width="120"><i class="require-red">*</i>创建分类：</th>
                             <td>
                                <input class="common-text required" id="cart_name" name="cart_name" size="50" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="去创建" type="submit">
                                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
<script src="./js/jquery.1.12.min.js"></script>
<script>
    $('.mr10').click(function(){
      var cart_id = $("select option:selected").val();
      var cart_name = $("#cart_name").val();   
      $.ajax({
            type:'POST',
            url:'cartAdd',
            data:'cart_id='+cart_id+'&cart_name='+cart_name,
            success:function(msg){
                if(msg == 1)
                {
                    window.location.href="{{URL('cart_show')}}";
                }
                if(msg == 0)
                {
                    window.location.href = "{{URL('cart_add')}}";
                }
            }
        })
    })
</script>
</html>