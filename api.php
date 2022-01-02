<?php
/*
 *请求接口文件
 *author：云猫
 */
$type=$_POST["type"];
$subdomain=$_POST["subdomain"];
$value=$_POST["value"];
$email=$_POST["email"];
if($value==null)exit('{"code":0,"msg":"请输入解析地址"}');
if($email==null)exit('{"code":0,"msg":"请输入验证邮箱"}');
if($subdomain==null)exit('{"code":0,"msg":"请输入主机名"}');
if($type==null)exit('{"code":0,"msg":"请输入方式"}');
$urls="http://api.lwcat.cn/api/domain.php?subdomain=".$subdomain."&value=".$value."&type=".$type."&email=".$email."";
$curl=curl_init();//初始化curl
$ua='Mozilla/5.0 (compatible; Baiduspider/2.0; +http://www.baidu.com/search/spider.html)';
curl_setopt($curl, CURLOPT_URL, $urls);//访问的url
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//以文件流显示
curl_setopt($curl, CURLOPT_USERAGENT, $ua);//百度蜘蛛
curl_setopt($curl, CURLOPT_TIMEOUT, 20);//防止死循环
$result=curl_exec($curl);//返回结果
curl_close($curl);//关闭curl
echo $result;
?>