<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
  <?php 
     require_once 'include/common.php';
   ?>
</head>

<body> 
 <div id="header" > <!-- 页首：LOGO，导航条 -->
 	 <?php
     require_once("include/header.php");	// 页面头部
     require_once("include/sidebar.php");  // side bar   
   ?>
 </div>
 <div id="content" style="margin-top: -15px"> <!-- 页中：banner，新闻区，实时区 -->
 	 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item">
            <img alt="First slide [1440x500]" src="img/banner_2.png" data-holder-rendered="true">
          </div>
          <div class="item active">
            <img alt="Second slide [1440x500]" src="img/banner_1.png" data-holder-rendered="true">
          </div>
          <div class="item">
            <img alt="Third slide [1440x500]" src="img/banner_3.png" data-holder-rendered="true">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only"> 下一张 </span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only"> 上一张 </span>
        </a>
   </div>
   <div>
      <div class="panel panel-default" style="margin-top:10px; height:300px; background-color:rgb(248,248,248);">
      <div class="panel-body">
         PRODUCT INTRODUCTION
      </div>
      </div>
   </div>
   <table width="100%">
	   <tr>
	    <td width="70%">
	     <div class="panel panel-default" style="margin:-10px 5px 10px 0px;height: 250px; background-color:rgb(248,248,248);">
	      <div class="panel-body">
	        MEDIA AND NEWS
	      </div>
	     </div>
	    </td>
	    <td>
	     <div class="panel panel-default" style="margin:-10px 0px 10px 5px;height: 250px; background-color:rgb(248,248,248);">
	      <div class="panel-body">
	        CREATOR'S WEIBO AND DYNAMICS
	      </div>
	     </div>
	    </td>
	   </tr>
   </table>    
  </div>

 <div id="footer"> <!-- 页尾 -->
 	 <?php
     require_once("include/footer.php"); // 页面尾部
   ?>
 </div>	
</body>

</html>


