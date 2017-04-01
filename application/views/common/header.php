<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>codging-happy</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="<?php echo $resource; ?>css/zerogrid.css">
	<link rel="stylesheet" href="<?php echo $resource; ?>css/style.css">
	<link rel="stylesheet" href="<?php echo $resource; ?>css/component.css">
	<link rel="stylesheet" href="<?php echo $resource; ?>css/responsive.css">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='<?php echo $resource; ?>images/favicon.jpg' rel='icon' type='image/x-icon'/>
    
</head>
<body>
<div class="wrap-body">
<!-- Header -->
<div class="top-header">
	<div class="zerogrid">
		<div class="row">
			<nav>
			  <a class="toggleMenu" href="#">菜单</a>
			  <ul class="menu">
				  <li><a href="<?php echo site_url('home/index')?>">首页</a></li>
				  <li><a href="<?php echo site_url('content/index')?>">框架学习</a></li>
				  <li><a href="<?php echo site_url('content/index')?>">微信开发</a></li>				  
				   <li>
					  <a href="<?php echo site_url('content/index')?>" class="parent">数据缓存</a>
					  <ul>
						  <li><a href="<?php echo site_url('content/index')?>">mysql</a></li>

						  <li><a href="<?php echo site_url('content/index')?>">memcache</a></li>
						  <li><a href="<?php echo site_url('content/index')?>">mongdb</a></li>

						  <li><a href="<?php echo site_url('content/index')?>">redis</a></li>
					  </ul>
				  </li>

				  <li><a href="<?php echo site_url('content/index')?>">linux操作</a></li>
				  <li><a href="<?php echo site_url('content/index')?>">php</a></li>
                 <li><a href="<?php echo site_url('content/index')?>">nginx探究</a></li>
				  <li><a href="<?php echo site_url('content/index')?>">javascript</a></li>


				  <li><a href="<?php echo site_url('content/index')?>">html</a></li>
				  <li><a href="<?php echo site_url('content/index')?>">关于我们</a></li>
			  </ul>
			</nav>
		</div>
	</div>
</div>
<header>
	<div class="wrap-header">
		<div class="zerogrid">
			<div id="logo"><a href="#"><img src=""/></a></div>
			<!-- <div class="row">
				<div class="header-social">
					<a href="#"><img src="resource/images/topfb.png" title="facebook"/></a>
					<a href="#"><img src="resource/images/toptwitter.png" title="twitter"/></a>
					<a href="#"><img src="resource/images/topgoogle.png" title="google"/></a>
					<a href="#"><img src="resource/images/toppin.png" title="pinterest"/></a>
					<a href="#"><img src="resource/images/toptumblr.png" title="tumblr"/></a>
					<a href="#"><img src="resource/images/toprss.png" title="rss"/></a>
				</div>
			</div> -->
			<div class="header-search">
				<center><form method="get" action="/search" id="search">
				  <input name="q" type="text" size="40" placeholder="Type key to search" />
				</form></center>
			</div>
		</div>
	</div>
</header>