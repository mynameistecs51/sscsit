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

<section id="about-us" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">   <!-- start panel -->
                <div class="panel-heading">
                    <h4 class="glyphicon glyphicon-file">  โครงงาน</h4>
                </div>
                <div class="panel panel-body"> <!-- strat body panel -->
                    <?php echo form_open_multipart('main/update_project','class="form-horizontal col-sm-10 pull-left" role="form"');

                    foreach ($get_paper_data as $key_paper_data => $value_paper_data) {

                       ?>
                       <div class="form-group">
                        <label for="inputName1" class="col-sm-3 control-label">ผู้ส่งโครงงาน 1</label>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <label for="male">Male
                                        <input type="radio"  value="male" name="sex" id="male" <?php  echo  ($value_paper_data->paper_sex === "male"? "checked" : "");?> />
                                    </label>
                                    <label for="female">Female
                                        <input type="radio" value="female" name="sex" id="female" <?php  echo  ($value_paper_data->paper_sex === "female"? "checked" : "");?>   />
                                    </label>
                                </div>
                                <input type="text" class="form-control " name="inputName1" id="inputName1"  value="<?php echo $value_paper_data->paper_inputName1;?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">ผู้ส่งโครงงาน 2</label>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <label for="male2">Male
                                        <input type="radio" value="male" name="sex2" id="male2" <?php  echo  ($value_paper_data->paper_sex2 === "male"? "checked" : "");?> />
                                    </label>
                                    <label for="female2">Female
                                        <input type="radio" value="female" name="sex2" id="female2" <?php  echo  ($value_paper_data->paper_sex2 === "female"? "checked" : "");?>  />
                                    </label>
                                </div>
                                <input type="text" class="form-control" name="inputName2" id="inputName2" value="<?php echo $value_paper_data->paper_inputName2;?>" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label for="inputProjectName_TH" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาไทย)</label>
                        <div class="col-sm-7">                           
                            <input type="text" class="form-control" id="inputProjectName_TH" name="inputProjectName_TH" value="<?php echo $value_paper_data->paper_inputProjectName_TH;?>" />
                        </div>
                    </div>
                    <!-- /////test//// -->
                    <div class="form-group"> 
                        <label for="inputProjectName_TH" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาไทย)</label>
                        <div class="col-sm-7">                           
                            <input type="text" class="form-control" id="inputProjectName_TH" name="inputProjectName_TH" value="<?php echo $value_paper_data->paper_inputProjectName_TH;?>" />
                        </div>
                    </div>
                    <!-- ///end test//// -->
                    <div class="form-group"> 
                        <label for="inputProjectName_EN" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาอังกฤษ)</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" id="inputProjectName_EN" name="inputProjectName_EN" value="<?php echo $value_paper_data->paper_inputProjectName_EN;?>" />
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label for="inputProjectName_EN" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาอังกฤษ)</label>
                        <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputProjectName_EN" name="inputProjectName_EN" value="<?php echo $value_paper_data->paper_inputProjectName_EN;?>" />
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label for="inputGroup" class="col-sm-3 control-label">ประเภทโครงงาน</label>
                        <div class="col-sm-7">  
                           <select  class="form-control "  id="select_group" name="select_group" >   <!--  เลือกประเภทของโครงงาน   -->
                               <?php

                               foreach ($paper_group as $key => $row_group) {
                                   $checked= ($value_paper_data->paper_group === $row_group->group_id ? "selected" : "");
                                   echo '<option value="'.$row_group->group_id.'" '.$checked.'>'.$row_group->group_name.'</option>';
                               }
                               ?>
                           </select>
                       </div>
                   </div>
                   <div class="form-group">
                    <label for="inputFileProject" class="col-sm-3 control-label">ไฟล์โปรเจ็ค</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="file" name="fileProject" id="inputFileProject"  accept=".doc, .docx, .pdf"  />
                            <p class="help-block">สามารถอัพโหลดไฟล์ .doc .docx .pdf <br/>*ควรตั้งชื่อเป็นภาษาอังกฤษ</p>   
                        </div>
                    </div>
                </div>  
                <div class="form-group pull-right">
                    <!-- <div class="col-sm-offset-2 col-sm-10"> -->
                    <button type="reset" class="btn btn-warning">Cancel </button>
                    <button type="submit" class="btn btn-success">UPDATE  </button>
                    <!-- </div> -->
                </div>
                <?php 
        } //end get_paper_data loop foreach;  
        echo form_close();
        ?>  <!-- end form -->
    </div>  <!-- end panel body -->
</div> <!-- end panel -->
</div>
</div><!--/.row-->

</section><!--/#bottom-->

<footer id="footer" class="midnight-blue" >
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <div class="col-sm-6">
                <ul class="pull-right">
                    <li><a href="#">หน้าหลัก</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--/#footer-->

<!-- end multi select -->

<!-- // <script  type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script> -->
<script  type ="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
<script  type ="text/javascript" src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
<script  type ="text/javascript" src="<?php echo base_url();?>js/main.js"></script>    

</body>
</html>
