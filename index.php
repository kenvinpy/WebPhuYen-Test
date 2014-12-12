<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo $title_meta; ?></title>
    <link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery.min.js"></script>
	
    <script>
$(function(){

    $('html').append('<div id="totop"></div><div id="totop2"></div>')
    $('#totop').hover(function(){
        $('#totop2').fadeIn().mouseout(function(){
            $(this).fadeOut(200)
        })
    })

    var defaultTop=$(window).height()-10-249//10 vị trí canh bottom ban đầu, 249 là chiều cao
    $(window).resize(function(){
        defaultTop=$(window).height()-10-249//phòng trường hợp resize trình duyệt
    })

    var ranPo=['-298px 0','-447px 0','-596px 0','-745px 0']

    $(window).scroll(function(){

        var $top=$(window).scrollTop()
        if($top>50){
            $('#totop').fadeIn(100)
            $('#totop2').css('top',defaultTop)
        }else{
            $('#totop,#totop2').fadeOut(100)
        }
    })

    $('#totop2').click(function(){
        timeranPo=window.setInterval(function(){
           $('#totop2').css({'background-position':ranPo[Math.floor(Math.random()*ranPo.length)],'display':'block'})
        },200)

        setTimeout(function(){
            $('html,body').stop().animate({scrollTop:'50px'},400,function(){
                $('#totop2').stop().animate({'top':'-250px'},300,function(){
                    clearInterval(timeranPo)
                    $('#totop2').css('background-position','-149px 0').hide()
                })
            })
        },800)
    })
})
</script>

</head>
<body >
<?php
require_once("ketnoi.php");
?> 
    <div id="mainWap">
    <div class="subnav">
		<div class="wrap-subnav zerogrid">
			<div class="links">
				<ul>
					<li><a href="index.html" style="text-decoration: none">Home</a></li>
					<li><a href="blog.html" style="text-decoration: none">About</a></li>
					<li><a href="blog.html" style="text-decoration: none">Archives</a></li>
					<li><a href="blog.html" style="text-decoration: none">Advertise</a></li>
					<li><a href="blog.html" style="text-decoration: none">Contact</a></li>
				</ul>
			</div>
			
			<div class="share">
				<ul>
					<li><a href="#"><img src="images/rss-icon.png" title="RSS"/></a></li>
					<li><a href="#"><img src="images/twitter-icon.png" title="Twitter"/></a></li>
					<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://hoangtin.zz.mu/demo"target="_blank"><img src="images/facebook-icon.png" title="Facebook"/></a></li>
					<li><a href="#"><img src="images/google-plus-icon.png" title="Google Plus"/></a></li>
				</ul>
			</div>
		</div>
	</div>
        <div id="header">
        
<div class="clr"></div>
        	<div id="banner">
<div class="aleoflash-swf" style="display:block;"><embed src="img/banner.swf" quality="high" type="application/x-shockwave-flash" wmode="transparent" width="820" height="195" pluginspage="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="always"></embed></div>
<div class="aleoflash"></div>
<script language="JavaScript">var hasFlash=false;if(window.ActiveXObject){ try { if (new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) hasFlash=true;} catch(e){}} else { if(navigator.plugins["Shockwave Flash"]){hasFlash=true;}}var elems=document.getElementsByTagName("div"); for(var i in elems){if(!hasFlash && elems[i].className=="aleoflash-gif") elems[i].style.display="block"; else if ((!hasFlash && elems[i].className=="aleoflash-swf") || elems[i].className=="aleoflash") elems[i].style.display="none";}</script></div>
        	<div id="thongtin">
					<p align="right"><form action="https://www.google.com.vn/" method="get" class="searchform" >  <input class="textinput left" name="q" size="25" placeholder="Nội dung cần tìm" type="text"/> 
					<center><input  value="Tìm" class="buttonsubmit" name="submit" type="submit"/></center></form></div>
 <div class="clr"></div>
             
    
	<div id='cssmenu'>
				<ul>
						<li class="active"><a href="index.html" title="Home"><span>Trang Chủ</span></a></li>

						<li ><a href="tuyhoa.html" title="Home"><span>Tp.Tuy Hòa</span></a></li>
						<li ><a href="thangcanh.html" title="Danh lam"><span>Thắng Cảnh</span></a></li>
						<li><a href="monngon.html" title="Am thuc"><span>Ẩm Thực</span></a></li>
						<li><a href="map.html" title="Ban do"><span>Bản Đồ</span></a></li>
						<li><a href="lienhe.html" title="Ban do"><span>Liên Hệ</span></a></li>




				</ul>

	</div>
	
	
	
	
	
	
	
	
	
	
	
	

		
	
	
	
	
	
        </div><!-- End header -->
   


        <div id="left">
 					<div class="tieude">Đăng Nhập</div>	
        </div><!-- End left -->
        <div id="center">
         	 <h1 style="text-align: j">&nbsp;</h1>
						<font face="Times New Roman, Times, serif" align=left size=4>
    					<p style="text-align: justify"><br />
    					</p>


    					<p>&nbsp;</p></font>

			        </div><!-- end center -->
		<div id="right">

			

								<div class="tieude">Tiêu Đề</div>				
								<ul>
									<li><a href="#">Free Html5 Templates</a></li>
									<li><a href="#">Free Responsive Themes</a></li>
									<li><a href="#">Free Html5 and Css3 Themes</a></li>
								</ul>
						
						

		</div><!-- end right -->
	
	
<div id="right">
	Modun 2 
</div><!-- end right -->

        		<div class="clr"></div>
        		
        		
        		
        		
        		
        		
        		

		<div id="quicknav" class="grid_12">
			<div class="quicknavgrid_3 quicknav alpha" >
					<h4 class="title ">Về Chúng Tôi </h4>
					<p>Thông Tin cơ bản của các thành viên  </p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
					
				
			</div >
			<div  class="quicknavgrid_3 quicknav" >
					<h4 class="title ">Liên Kết </h4>
					<p>Chia sẻ liên kết ở đây  </p>
						<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
					
				
			</div >
			<div class="quicknavgrid_3 quicknav" >
					<h4 class="title ">Thông Tin Số lượt truy cập </h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="images/Blog_Artdesigner.lv.png" /></p>
				
			</div>
				</div>
		<div class="clr">&nbsp;</div>

        	
        		
        		
        		
        		
        <div id="footer">
					<span>
					<a href="index.html" title="Home" style="text-decoration: none">Trang Chủ</a> </span>&nbsp;||
					<span>&nbsp;<a href="tuyhoa.html" title="Home" style="text-decoration: none">Tp.Tuy Hòa</a></span>&nbsp; ||&nbsp; <span>
					<a href="thangcanh.html" title="Danh lam" style="text-decoration: none">Thắng Cảnh</a> </span>||&nbsp; <span>
					<a href="monngon.html" title="Am thuc" style="text-decoration: none">Ẩm Thực</a> </span>||
					<span>&nbsp;<a href="map.html" title="Ban do" style="text-decoration: none">Bản Đồ</a> </span>||&nbsp;
					<a href="lienhe.html" title="Ban do" style="text-decoration: none"><span>Liên Hệ</span></a>&nbsp;

            		<p>Coppyright © 2013 Nguyễn Hoàng Tín</p>
					<p>Email: kenvin.alone@gmail.com</p>
        </div><!-- end footer -->
    </div>
    <!-- end wapper -->

</html>