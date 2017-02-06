<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
    <!-- 引入百度编辑器 -->
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="ueditor/ueditor.all.min.js"> </script>
    <!-- 语言引入 -->
    <script type="text/javascript" charset="utf-8" src="ueditor/lang/zh-cn/zh-cn.js"></script>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/jscss/admin/design/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="{{URL('blog_show')}}">作品管理</a><span class="crumb-step">&gt;</span><span>新增作品</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="javascript:void(0);" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="colId" id="catid" class="required">
                                    <option value="">请选择</option>
                                    <?php foreach($cart_add as $key=>$value):?>
                                    <option value="{{$value['cart_id']}}" id="cart_id">
                                    {{$value['html']}}{{$value['cart_name']}}</option>
                                <?php endforeach ?>
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th>作者：</th>
                                <td><input class="common-text" name="author" id="author" size="50" type="text">
                                </td>
                            </tr>

                            <tr>
                                <th>上传图片</th>
                                <td><input type="file" name="image">
                                <input type="button" name="" value="上传文件" id="btn">
                                <span id="upload"></span>
								</td>
                            </tr>

                            <tr>
                                <th>内容：</th>
                                <td>
                                    <textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">   
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
</div>
</body>
<script src="./js/jquery.1.12.min.js"></script>
<script>
    //引入百度编辑器
    var ue = UE.getEditor('content');
    // //添加入库
    $('.mr10').click(function(){
        var cart_id = $("select option:selected").val();   //分类id
        var title = $('#title').val();   //标题
        var author = $('#author').val();   //作者
        var content=ue.getPlainTxt();      //内容
        var img = $("img").attr("src");    //图片
        $.ajax({
            type:"POST",
            url:"blogAdd",
            data:"cart_id="+cart_id+"&title="+title+"&author="+author+"&content="+content+"&img="+img,
            success:function(result)
            {
                if(result == 1)
                {
                    window.location.href="{{URL('blog_show')}}";
                }
                if(result == 0)
                {
                    window.location.href="{{URL('blog_add')}}";
                }
                
            }
        })
        
    })
//图片上传
$('#btn').click(function(){
    var UploadFile = document.getElementById('myform');
    var fd = new FormData(UploadFile);
    $.ajax({
        type:"POST",
        url:"blogImg",   
        data:fd,
        processData:false,
        contentType:false,
        success:function(result)
        {
            $('#upload').html("<img src="+result+" width="+50+" height="+50+">");
        }
    })
})

</script>
</html>