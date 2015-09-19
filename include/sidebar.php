
<style type="text/css" rel="stylesheet">
  @charset "utf-8";
	.right_con ul {list-style:none;}
	.right_con ul li {border:1px solid rgb(198,198,198);margin-bottom:5px;}
	.right_con ul li img {height:100%;width:100%;}
	.right_con { position:fixed; top:130px; right:44px; width:50px; z-index:100;}
	
	.top_1,.top_2,.top_3,.top_4 { width:54px; height:54px; }	
	.top_1:hover,.top_2:hover,.top_3:hover,.top_4:hover {border:1px solid rgb(11,195,158);}
	
	.right_con_list ul li {display:none}
	.right_con_list {position:fixed; top:130px; right:54px; z-index:1000;}
	.top_list_1 { width:160px; height:92px ; background:url("img/sidebar_info_1.png");z-index:1000;/*filter:alpha(opacity=90);-moz-opacity:0.8;-khtml-opacity: 0.8;*/opacity: 0.8; }
	.top_list_2 { width:160px; height:92px; background:url("img/sidebar_info_2.png");z-index:1001;/*filter:alpha(opacity=90);-moz-opacity:0.8;-khtml-opacity: 0.8;*/opacity: 0.8; }
	.top_list_3 { width:160px; height:92px; background:url("img/sidebar_info_3.png");z-index:1002;/*filter:alpha(opacity=90);-moz-opacity:0.8;-khtml-opacity: 0.8;*/opacity: 0.8; }
	
	.server_tit,.weibo_text_tit,.weixin_text_tit { color:#111; font-size:16px; font-weight:800; width:130px; float:left; margin-left:10px; margin-top:10px; }
	.server_tit_phone { color:#111; font-size:18px; font-weight:800; width:150px; float:left; margin-left:10px; margin-top:5px; }
	.server_tit_time { color:#444; font-size:10px; width:140px; float:left; margin-left:10px; margin-top:2px; }
	.weibo_text { color:#444; font-size:10px; font-weight:800; text-align:center; width:110px; display:inline-block; float:left; margin-top:15px;}			
</style>

<script type="text/javascript">
	$(function(){
		$(".top_1").hover(function(){
			$(".right_con_list").show();
			$(".top_list_1").css({display:"block"});
			$(".contact_after1").css({display:"block"});
			$(".contact_before1").css({display:"none"});
		},function(){
			$(".right_con_list").hide();
			$(".top_list_1").css({display:"none"});
			$(".contact_after1").css({display:"none"});
			$(".contact_before1").css({display:"block"});
		})
		$(".top_list_1").hover(function(){
			$(".right_con_list").show();
			$(".top_list_1").css({display:"block"});
			$(".contact_after1").css({display:"block"});
			$(".contact_before1").css({display:"none"});
		},function(){
			$(".right_con_list").hide();
			$(".top_list_1").css({display:"none"});
			$(".contact_after1").css({display:"none"});
			$(".contact_before1").css({display:"block"});
		})
	});
	$(function(){
		$(".top_2").hover(function(){
			$(".right_con_list").show();
			$(".top_list_2").css({display:"block"});
			$(".contact_after2").css({display:"block"});
			$(".contact_before2").css({display:"none"});
		},function(){
			$(".right_con_list").hide();
			$(".top_list_2").css({display:"none"});
			$(".contact_after2").css({display:"none"});
			$(".contact_before2").css({display:"block"});
		})
		$(".top_list_2").hover(function(){
			$(".right_con_list").show();
			$(".top_list_2").css({display:"block"});
			$(".contact_after2").css({display:"block"});
			$(".contact_before2").css({display:"none"});
		},function(){
			$(".right_con_list").hide();
			$(".top_list_2").css({display:"none"});
			$(".contact_after2").css({display:"none"});
			$(".contact_before2").css({display:"block"});
		})
	});
	$(function(){
		$(".top_3").hover(function(){
			$(".right_con_list").show();
			$(".top_list_3").css({display:"block"});
			$(".contact_after3").css({display:"block"});
			$(".contact_before3").css({display:"none"});
		},function(){
			$(".right_con_list").hide();
			$(".top_list_3").css({display:"none"});
			$(".contact_after3").css({display:"none"});
			$(".contact_before3").css({display:"block"});
		})
		$(".top_list_3").hover(function(){
			$(".right_con_list").show();
			$(".top_list_3").css({display:"block"});
			$(".contact_after3").css({display:"block"});
			$(".contact_before3").css({display:"none"});
		},function(){
			$(".right_con_list").hide();
			$(".top_list_3").css({display:"none"});
			$(".contact_after3").css({display:"none"});
			$(".contact_before3").css({display:"block"});
		})
	})
	$(function(){
		$(".top_4").hover(function(){
			$(".contact_after4").css({display:"block"});
			$(".contact_before4").css({display:"none"});
		},function(){
			$(".contact_after4").css({display:"none"});
			$(".contact_before4").css({display:"block"});
		})
	})
	
	//返回顶部操作
  $(window).scroll(function() {
    if ($(this).scrollTop() > 400)
      $('.top_4').fadeIn(200);
    else 
      $('.top_4').fadeOut(200);
  });
  $('.top_4').click(function(event) {
    event.preventDefault();
    $('html, body').animate({scrollTop: 0}, 400);
  });
</script>		

<div class="right_con">
	<ul>
		<li class="top_1">
			<img src="img/icon_call_0.png" class="contact_before1" />
			<img src="img/icon_call_1.png" class="contact_after1" style="display:none;" />
		</li>		
		<li class="top_2 cs_btn ">
			<img src="img/icon_weibo_0.png" class="contact_before2" />
			<img src="img/icon_weibo_1.png" class="contact_after2" style="display:none;" />
		</li>
		<li class="top_3">
			<img src="img/icon_weixin_0.png" class="contact_before3" />
			<img src="img/icon_weixin_1.png" class="contact_after3" style="display:none;" />
		</li>
		<li class="top_4">
			<img src="img/icon_totop_0.png" class="contact_before4" />
			<img src="img/icon_totop_1.png" class="contact_after4" style="display:none;" />
		</li>
	</ul>
</div>

<div class="right_con_list" style="display:none">
	<ul style="list-style:none">
		<li class="top_list_1">
			<span class="server_tit">服务热线：</span>
			<span class="server_tit_phone">4000-888-888</span>
			<span class="server_tit_time">工作时间：8:00-18:00 </span>
		</li>
		<li class="top_list_2" style="margin-top:60px">
			<span class="weibo_text_tit" style="margin-top:12px"> 官方微博 </span>
			<span class="weibo_text">
				<a href="http://weibo.com/zn86" target="_blank">
					<img src="img/weibo_access.png" alt="微博">
				</a> 
			</span>
		</li>
		<li class="top_list_3" style="margin-top:120px"> 
		  <span class="weixin_text_tit" style="margin-top:12px"> 微信订阅号 </span>	
		 <!--
		  <span class="weixin_text">
		  	<img src="img/weixin_0.png" alt="微信订阅号" >	
		  </span>
		  <span class="weixin_text_tit" style="margin-top:12px"> 微信服务号 </span>
		  <span class="weixin_text">
		    <img src="img/weixin_1.png"> alt="微信服务号" >	
		  </span>
		  -->
		</li> 
		<li class="top_list_4"></li>
	</ul>
</div>
