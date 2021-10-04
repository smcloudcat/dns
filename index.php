<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>小猫咪免费域名解析</title>
  <link href="//lib.baomitu.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://www.layuicdn.com/layui/css/layui.css" rel="stylesheet"/>
  <link rel="stylesheet" href="//ximami-5g3cz0aqeba76e20-1257450857.tcloudbaseapp.com/404/bg.css" type="text/css" />
  <script src="https://www.layuicdn.com/layui/layui.js"></script>
  <script src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/layer/2.3/layer.js"></script>
   <script src="//lib.baomitu.com/jquery/1.12.4/jquery.min.js"></script>
  <script src="//lib.baomitu.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!--小猫咪免费域名解析-->
<!--请求接口-->
<script>
$(document).ready(function(){
  $("button").click(function(){
  layer.msg('正在解析中', {icon: 1});
  var type = $("#type").val();
  var subdomain = $("#subdomain").val();
  var value = $("#value").val();
    $.post("api.php",
    {
      type:type,
      value:value,
      subdomain:subdomain
    },
    function(data,status){
    var obj = JSON.parse(data);    
    if (obj.code == 1) {
    layer.confirm('解析成功\n结果：'+obj.msg+'<br>域名：'+obj.url+'<br>接口由小猫咪提供～',{
    btn: ['查看','好的'] }, 
    function(){
    window.location.href="http://"+obj.url;}, 
    function(){
});
                
            } else {
            layer.msg('添加解析失败');
            }
    
    });
  });
});
</script>
<!--请求结束-->
<body>
  <div class="container" style="padding-top:70px;">
    <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 center-block" style="float: none;">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">小猫咪免费域名解析网</h3></div>
        <div class="panel-body">
            <div class="input-group">
              <span class="input-group-addon"><span class="layui-icon layui-icon-auz"></span></span>
              <form method="post" enctype="multipart/form-data">
                <select name="type" id="type" class="form-control">
                <option value="a">A</option>
                <option value="CNAME">CNAME</option>
              </select>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-cloud"></span></span>
              <input type="text" name="subdomain" id="subdomain" class="form-control" placeholder="主机名" required>
              </div><br/>
              <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-cloud"></span></span>
              <input type="text" name="value" id="value" class="form-control" placeholder="解析地址" required>
              </div><br/>
              </form>
            
            <div class="form-group">
              <div class="col-xs-12">
                <button type="button" name="button" class="btn btn-primary form-control">添加解析记录</button>
               </div>
              
            </div>
        </div>
      </div>
 <script>
layer.msg('欢迎收藏哦');
</script>
 
</body>
</html>