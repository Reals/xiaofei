<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php 
     require_once("include/common.php");
   ?>
  <style type="text/css" rel="stylesheet">
     .panel-body h3 { width:100%; text-align:left;font-size:30px; font-family:'Microsoft YaHei';margin-left:5%;margin-bottom:30px;color:rgb(92,92,92);}	
     .panel-body hr { margin:20px 20px 50px 20px;border-color:rgb(158,158,158);}
  	 .input-style {margin-top:15px;}
  	 .single-line {padding-right:0px;}
  	 .btn-style {margin-top:20px;width:100%;}
  </style>   
</head>

<body> 
 <div id="header"> 
 	 <?php
     require_once("include/header.php");	// 页面头部
     require_once("include/sidebar.php");  // side bar   
   ?>
 </div>
 <div id="content" style="margin-top: -15px;margin-bottom:-10px;"> <!-- 页中：banner，新闻区，实时区 -->
   <div>
      <div class="panel panel-default" style="margin-top:10px; height:500px; background-color:rgb(248,248,248);">
	      <div class="panel-body">
	      	<h3> 帐户登陆 </h3> 
	      	<hr>
					<form class="form-inline" style="margin-left:20px;width:40%;border:1px solid">
					  <div class="form-group input-style">
					    <label class="sr-only" for="inputPhone"> Your Phone </label>
					    <div class="input-group single-line">
					      <div class="input-group-addon"> 手机号 </div>
					      <input type="text" class="form-control" id="inputPhone" placeholder="请输入您的手机号">
					    </div>
 				    </div>
 				    <br>
					  <div class="form-group input-style">
					    <label class="sr-only" for="inputPassword"> Your Password </label>
					    <div class="input-group">
					      <div class="input-group-addon"> 密 &nbsp 码 </div>
					      <input type="text" class="form-control" id="inputPassword" placeholder="请输入您的密码">
					    </div>
 				    </div>
 				    <br>
					  <button type="submit" class="btn btn-primary btn-style">  登 &nbsp 陆 </button>
					</form>
	      </div>
      </div>
   </div> 
  </div>

 <div id="footer"> <!-- 页尾 -->
 	 <?php
     require_once("include/footer.php"); // 页面尾部
   ?>
 </div>	
</body>

</html>


