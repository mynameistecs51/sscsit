<!-- header -->
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
<!-- end header -->
<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <ol class       = "carousel-indicators">
            <li data-target = "<?php echo base_url();?>#main-slider" data-slide-to = "0" class = "active"></li>
            <li data-target = "<?php echo base_url();?>#main-slider" data-slide-to = "1"></li>
            <li data-target = "<?php echo base_url();?>#main-slider" data-slide-to = "2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?php echo base_url();?>images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1"><?php echo "Student Symposium";?> </h2>
                                <p class="animation animated-item-2">โครงงานสัมนาทางวิชาการ ของสาขาวิขาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1"><?php echo "Student Symposium";?> </h2>
                                <p class="animation animated-item-2">โครงงานสัมนาทางวิชาการ ของสาขาวิขาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ.</p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1"><?php echo "Student Symposium";?> </h2>
                                <p class="animation animated-item-2">โครงงานสัมนาทางวิชาการ ของสาขาวิขาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ.</p>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                       <!--  <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="centered">
                                <div class="embed-container">
                                    <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->

    <a class="prev hidden-xs" href="<?php echo base_url().'#main-slider';?>" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
    <?php echo anchor(base_url().'#main-slider',' <i class="icon-angle-left"></i>','class="prev hidden-xs"  data-slide="prev" ');?>
    <a class="next hidden-xs" href="<?php echo base_url().'#main-slider';?>" data-slide="next">
        <i class="icon-angle-right"></i>
    </a>
</section><!--/#main-slider-->


<section id="services" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-desktop icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">เงื่อนไขการส่งโครงงาน</h3>
                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-list icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">หัวข้อโครงงาน</h3>
                        <p>
                            <ul>
                                <li>โปรแกรมเพื่อความบันเทิง</li>
                                <li>โปรแกรมส่งเสริมการเรียนรู้</li>
                                <li>โปรแกรมเพื่อช่วยเหลือคนพิการและผู้สูงอายุ </li>
                                <li>โปรแกรมเพื่องานการพัฒนาด้านวิทยาศาสตร์และเทคโนโลยี</li>
                                <li>โปรแกรมเพื่อการประยุกต์ใช้งานสำหรับลินุกซ์</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
            <div class="col-md-4 col-sm-6">
                <div class="media">
                    <div class="pull-left">
                        <i class="icon-user icon-md"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">กรรมการ</h3>
                        <p>คณะกรรมการผู้ทรงคุณวุฒิ ที่จะมาพิจจารณาโครงงานของนักศึกษาที่ได้ส่งเข้ามา.</p>
                    </div>
                </div>
            </div><!--/.col-md-4-->
        </div>
    </div>
</section><!--/#services-->

<section id="recent-works">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3>โครงงาน ของนักศึกษา</h3>
                <p>โครงงานทั้งหมดของนักศึกษาที่ส่งเข้าร่วมในการนำเสนอผลงาน</p>

                <p class="gap"></p>
            </div>
            <div class="row col-md-9">       <!-- //    show paper all    //  -->
                <div class="panel panel-primary">
                    <div class ="panel-heading">
                        <div class ="panel-title">โครงงาน
                        </div>
                    </div>
                    <div class ="panel-body">
                        <table id ="" class="display" cellspacing="0" width="100%">
                            <thead>
                                <th>โปรเจ็ค</th>
                                <th>ประเภทโครงงาน</th>
                                <th>หัวหน้าโครงงาน</th>
                                <th>สถานการตรวจ <i class="label label-success">ผ่าน</i><i class="label label-warning">มีเงื่อนไข</i><i class="label label-danger">ไม่ผ่าน</i></label></th>
                            </thead>
                            <tbody>
                                <?php
                                $check_paper = array();
                                foreach ($get_status_paper as $key_status_paper         => $value_status_paper) {
                                    if(!isset($check_paper[$value_status_paper->paper_id])){
                                        $check_paper[$value_status_paper->paper_id] = array();
                                    }

                                    array_push($check_paper[$value_status_paper->paper_id], array(
                                        'status' => $value_status_paper->check_status, 
                                        'comment' => $value_status_paper->check_comment,
                                        'id' => $value_status_paper->paper_id,
                                        'committee_check'=> $value_status_paper->user_first_name,
                                        'committee_id' => $value_status_paper->user_id,
                                        )
                                    );
                                }

                                foreach ($get_paper as $key_paper=> $row_paper) :
                                    ?>
                                <tr>
                                    <td><?php echo $row_paper->paper_inputProjectName_TH;?></td>
                                    <td><?php echo $row_paper->group_name;?></td>
                                    <td><?php echo $row_paper->paper_inputName1;?></td>
                                    <td>
                                        <div class="form-group">
                                            <?php
                                            if(!empty($check_paper[$row_paper->paper_id])){
                                                for($i=0; $i<count($check_paper[$row_paper->paper_id]); $i++){

                                                    if($check_paper[$row_paper->paper_id][$i]['status'] === "accept"){
                                                        echo "<button class ='btn btn-success' disabled>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>&nbsp;";

                                                    }elseif($check_paper[$row_paper->paper_id][$i]['status'] === "conditional_accept"){
                                                        echo "<button class ='btn btn-warning' disabled>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button> &nbsp;";

                                                    }elseif($check_paper[$row_paper->paper_id][$i]['status'] === "reject"){
                                                        echo "<button class ='btn btn-danger' disabled>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>&nbsp;";
                                                    }
                                                }
                                            }else{
                                                echo '<h4><span class ="label label-default">ยังไม่ตรวจ</span></h4>';
                                                }                                                 //end if !empty
                                                ?>
                                            </div> <!-- /. end  <div class="form-group"> -->
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>  <!-- ./panel body -->
                </div>
            </div><!--/.row  show paper-->
        </div><!--/.row-->
    </div>
</section><!--/#recent-works-->


<?php $this->load->view('footer');?>