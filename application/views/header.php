<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Student symposium โครงงานนักศึกษา">
    <meta name="author" content="">
    <title><?php echo $title;?></title>
    <!-- start bootstrap data table -->
    <script  <type="text/javascript" src="<?php echo base_url();?>js/bootstrap-table.js"></script> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-table.css" />
    <!-- data table bootstrap -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url();?>css/main.css" rel="stylesheet" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url();?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php echo anchor('main','<img src="'.base_url().'images/logo.png" alt="logo"/>','class="navbar-brand"');?>
                <!-- <a class="navbar-brand" href="index.php/main"><img src="images/logo.png" alt="logo"></a> -->
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li ><?php echo anchor('main','หน้าหลัก');?></li>
                    <li><?php echo anchor("main/send_page",'ส่งผลงาน');?></li>
                    <li><?php echo anchor("main/status_page",'สถานะโครงงาน');?></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="career.html">Career</a></li>
                            <li><a href="blog-item.html">Blog Single</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="registration.html">Registration</a></li>
                            <li class="divider"></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li> 
                    <li><a href="contact-us.html">Contact</a></li>
                    <li>
                        <?php 
                        if(empty($fb_data['me'])){
                            echo anchor($fb_data['loginUrl'],'Login');
                        }else{
                            echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" /><br/>'.$fb_data['me']['name']." ". anchor('main/logout','Logout');
                        }
                        ?>
                    </li>                    
                </ul>
            </div>
        </div>
    </header><!--/header-->