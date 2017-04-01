<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>博客后台管理系统</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <!-- <link href='http://fonts.useso.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'> -->
    <link href="<?php echo $resource;?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $resource;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $resource;?>css/templatemo-style.css" rel="stylesheet">
    <link href='<?php echo $resource; ?>images/favicon.jpg' rel='icon' type='image/x-icon'/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>博客后台</h1>
        </header>
        <div class="profile-photo-container">
          <img src="<?php echo $resource;?>images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="查找" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="<?php echo site_url('admin/index');?>" class="active"><i class="fa fa-home fa-fw"></i>网站信息</a></li>
             <li><a href="<?php echo site_url('map/datas');?>"><i class="fa fa-map-marker fa-fw"></i>分类管理</a></li>
            <li><a href="<?php echo site_url('map/datas');?>"><i class="fa fa-bar-chart fa-fw"></i>文章管理</a></li>
            <li><a href="<?php echo site_url('map/datas');?>"><i class="fa fa-database fa-fw"></i>评论管理</a></li>
           
            <li><a href="<?php echo site_url('useradmin/index');?>"><i class="fa fa-users fa-fw"></i>用户管理</a></li>
          
            <li><a href="<?php echo site_url('map/datas');?>"><i class="fa fa-eject fa-fw"></i>登出后台</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li><a href="<?php echo site_url('map/datas');?>" class="active">管理员信息</a></li>
                <li><a href="<?php echo site_url('map/datas');?>">网站管理</a></li>
                <li><a href="<?php echo site_url('home/index');?>">进入首页</a></li>
                <li><a href="<?php echo site_url('map/datas');?>">二维码管理</a></li>

              </ul>  
            </nav> 
          </div>
        </div>