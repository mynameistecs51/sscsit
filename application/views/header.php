<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Student symposium โครงงานนักศึกษา">
   <meta name="author" content="">
   <title><?php echo $title;?></title>

    <link rel="shortcut icon" href="<?php echo base_url();?>'images/favicon.ico"/> 

   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
   <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url();?>css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url();?>css/animate.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo base_url();?>css/main.css" rel="stylesheet" type="text/css"/>

   <!-- start bootstrap data table -->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/media/css/jquery.dataTables.css">
   <style type="text/css" class="init">
      div.dataTables_wrapper {
         margin-bottom: 3em;
      }
   </style>
   <script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.js"></script>
   <script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.dataTables.js"></script>
   <script type="text/javascript" language="javascript" class="init">
      $(document).ready(function () {
         $('table.display').dataTable();
      });
   </script>
   <!-- end data table bootstrap -->

   <!-- start bootstrap switch -->
   <script type="text/javascript" src="<?php echo base_url();?>js/bootstrap-switch.js"></script>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap-switch.css">
   <!-- end bootstrap switch -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->       
<!-- <link rel="shortcut icon" href="<?php echo base_url();?>images/ico/favicon.ico"> -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>images/ico/apple-touch-icon-57-precomposed.png">

<!-- bootstrap hover dropdown -->
 <script src="<?php echo base_url();?>js/bootstrap-hover-dropdown.min.js"></script>
<!-- ./bootstrap hover dropdown ./ -->

<!-- /. bootstrap datetime picker-->
<script type="text/javascript" src="<?php echo base_url();?>datetimepicker/js/bootstrap-datepicker.js"></script>
<!-- thai extension -->
<script type="text/javascript" src="<?php echo base_url();?>datetimepicker/js/bootstrap-datepicker-thai.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>datetimepicker/js/locales/bootstrap-datepicker.th.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>datetimepicker/css/datepicker.css">
<!-- ./ end bootstrap datetime picker-->

</head><!--/head-->
<body >
   <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
      <div class="container">
         <div class="navbar-header" style="margin-top: 30px;">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <?php echo anchor('main/home','<img src="'.base_url().'images/logo.png" alt="logo"/>','class="navbar-brand"');?>
            <!-- <a class="navbar-brand" href="index.php/main"><img src="images/logo.png" alt="logo"></a> -->
         </div>
         <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="margin-top:30px; ">
               <li style="margin-top:20px;font-weight: bold; "><?php echo anchor('main/index','หน้าหลัก');?></li>
               <li style="margin-top:20px;font-weight: bold; "><?php echo anchor("main/send_page",'ส่งผลงาน');?></li>
               <li style="margin-top:20px;font-weight: bold; "><?php echo anchor("main/status_page",'สถานะโครงงาน');?></li>
               <li style="margin-top:20px;font-weight: bold; ">
                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">
                   รายละเอียด<b class="caret"></b>
                </a>
                <ul class="dropdown-menu ">
                   <li><a tabindex ="-1"><?php echo anchor('main/download_file_template/template_SSCSIT2014.doc','ดาว์นโหลด Template','class="horizontal"');?></li>
                   <li><a tabindex ="-1"><?php echo anchor('main/detail/1','หลักการและเหตุผล','class="horizontal"');?></li>
                  <li><a tabindex ="-1"><?php echo anchor('main/detail/2','วัตถุประสงค์','class="horizontal"');?></li>
                  <li><a tabindex ="-1"><?php echo anchor('main/detail/3','ประโยชน์ที่จะได้รับ');?></li>
                  <li><a tabindex ="-1"><?php echo anchor('main/detail/4','รูปแบบของงาน');?></li>
                  <li><a tabindex ="-1"><?php echo anchor('main/detail/5','ผู้เข้าร่วมโครงงาน/กลุ่มเป้าหมาย');?></li>
                  <li><a tabindex ="-1"><?php echo anchor('main/detail/6','อาคาร/สถานที่/อุปกรณ์');?></li>
                  <li><a tabindex ="-1"><?php echo anchor('main/detail/7','ระยะเวลาดำเนินการ');?></li>
                  <li><a tabindex ="-1"><?php echo anchor('main/detail/8','กิจกรรมดำเนินการ');?></li>
                  <li><a tabindex ="-1"><?php echo anchor('main/detail/9','ผู้รับผิดชอบโครงการ');?></li>
               </ul>
            </li>
            <li style="margin-top:20px;font-weight: bold;" class="form-inline text-center ">
               <?php
               if(empty($fb_data)){
                 echo anchor('main/login_view','login');
               }else{
                  ?>
                  <li style="margin-top:20px;font-weight: bold; ">
                     <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">
                        <!-- <img src="https://graph.facebook.com/<?php echo $fb_data['id'];?>/picture" alt="" class="pic" /> <b class="caret"></b> ///--- picture profile---// -->
                        <?php echo $fb_data['user_first_name'];?>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a tabindex="-1" href="profile">โปรไฟล์</a></li>
                        <li><a tabindex="-1" href="send_payment">แจ้งชำระเงิน</a></li>
                        <!-- <li><a tabindex="-1" href="logout">ออกจากระบบ</a></li> -->
                        <li><?php echo anchor('main/logout','ออกจากระบบ','tabindex="-1"');?></li>
                     </ul>
                  </li>
                  <?php
               }
               ?>
            </li>
         </ul>
      </div>

   </div>
</header><!--/header-->