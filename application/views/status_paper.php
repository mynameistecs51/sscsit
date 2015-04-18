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
<!-- ///end header/// -->
<section id="services">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="center gap">
          <h2>โครงงานทั้งหมด</h2>
          <p>โครงงาน สัมนาทางวิชาการของนักศึกษาสาขาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</p>
        </div>                
      </div>
    </div>
    <div class="row">       <!-- //    show paper all    //  -->
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
            <th>เวลาที่ส่ง</th>
            <th>ผู้ส่ง</th>
            <th>สถานการตรวจ <i class="label label-success">ผ่าน</i><i class="label label-warning">มีเงื่อนไข</i><i class="label label-danger">ไม่ผ่าน</i></label></th>
          </thead>
          <tbody>
            <?php
            $check_paper = array();
            foreach ($get_status_paper as $key_status_paper         => $value_status_paper) {
                //echo $value_status_paper->paper_id."=".$value_status_paper->user_first_name."<br/>";
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
            foreach ($get_paper as $key_paper=> $row_paper) {
              ?>
              <tr>
                <td><?php echo $row_paper->paper_inputProjectName_TH;?></td>
                <td><?php echo $row_paper->group_name;?></td>
                <td><?php echo $row_paper->paper_inputName1;?></td>
                <td><?php echo $row_paper->paper_date;?></td>
                <td><?php echo $row_paper->user_first_name." ".$row_paper->user_last_name;?></td>
                <td>
                 <div class="form-group">
                  <?php
                  if(!empty($check_paper[$row_paper->paper_id])){
                    for($i=0; $i<count($check_paper[$row_paper->paper_id]); $i++){

                      if($check_paper[$row_paper->paper_id][$i]['status'] === "accept"){
                        echo "<button class ='btn btn-success' data-toggle='modal' data-target='#myModal".$check_paper[$row_paper->paper_id][$i]['committee_id'].$check_paper[$row_paper->paper_id][$i]['id'] ."'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";
                        ?>
                        <!-- modal show comment -->
                        <!-- <div class="row col-sm-12"> -->
                        <div id="myModal<?php echo $check_paper[$row_paper->paper_id][$i]['committee_id'].$check_paper[$row_paper->paper_id][$i]['id'];?>"  class="modal fade bs-example-modal-lg " tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                          <!-- <div class="modal-dialog " style="width:60%" > -->
                          <div class="modal-dialog modal-lg ">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">ผลการตรวจเอกสาร</h4>

                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <div class="col-md-12">
                                   สถานะของคุณคือ: ผ่าน :
                                 </div>
                               </div>
                               <div class="form-group">
                                <div class="col-md-12">
                                  <label for="comment">
                                    Comment:
                                    <textarea id="comment" name="comment" class="form-control" rows="3" cols="80" disabled="true">
                                      <?php echo $check_paper[$row_paper->paper_id][$i]['comment'] ;?>                              
                                    </textarea>
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><!-- /.modal-content -->
                      </div><!-- /.modal-dialog -->
                      <!-- </div>/.modal -->
                      <!-- ./ end modal show comment -->
                      <?php
                    }elseif($check_paper[$row_paper->paper_id][$i]['status'] === "conditional_accept"){
                      echo "<button class ='btn btn-warning' data-toggle='modal' data-target='#myModal".$check_paper[$row_paper->paper_id][$i]['committee_id'].$check_paper[$row_paper->paper_id][$i]['id']."'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";
                      ?>
                      <!-- modal show comment -->
                      <!-- <div class="row col-sm-12"> -->
                      <div id="myModal<?php echo $check_paper[$row_paper->paper_id][$i]['committee_id'].$check_paper[$row_paper->paper_id][$i]['id'];?>"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                        <!-- <div class="modal-dialog " style="width:60%" > -->
                        <div class="modal-dialog modal-lg ">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                              <h4 class="modal-title">ผลการตรวจเอกสาร</h4>

                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <div class="col-md-12">
                                 สถานะของคุณคือ: ผ่านแบบมีเงื่อนไข :
                               </div>
                             </div>
                             <div class="form-group">
                              <div class="col-md-12">
                                <label for="comment">
                                  Comment:
                                  <textarea id="comment" name="comment" class="form-control" rows="3" cols="80" disabled="true">
                                    <?php echo $check_paper[$row_paper->paper_id][$i]['comment'] ;?>                              
                                  </textarea>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                    <!-- </div>/.modal -->
                    <!-- ./ end modal show comment -->
                    <?php
                  }elseif($check_paper[$row_paper->paper_id][$i]['status'] === "reject"){
                    echo "<button class ='btn btn-danger' data-toggle='modal' data-target='#myModal".$check_paper[$row_paper->paper_id][$i]['committee_id'].$check_paper[$row_paper->paper_id][$i]['id'] ."'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";
                    ?>
                    <!-- modal show comment -->
                    <!-- <div class="row col-sm-12"> -->
                    <div id="myModal<?php echo $check_paper[$row_paper->paper_id][$i]['committee_id'].$check_paper[$row_paper->paper_id][$i]['id'];?>"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                      <!-- <div class="modal-dialog " style="width:60%" > -->
                      <div class="modal-dialog modal-lg ">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">ผลการตรวจเอกสาร</h4>

                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                              <div class="col-md-12">
                               สถานะของคุณคือ: ไม่ผ่าน :
                             </div>
                           </div>
                           <div class="form-group">
                            <div class="col-md-12">
                              <label for="comment">
                                Comment:
                                <textarea id="comment" name="comment" class="form-control" rows="3" cols="80" disabled="true">
                                  <?php echo $check_paper[$row_paper->paper_id][$i]['comment'] ;?>                              
                                </textarea>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                  <!-- </div>/.modal -->
                  <!-- ./ end modal show comment -->
                  <?php
                }
              }
            }else{
              echo '<h4><span class ="label label-default">ยังไม่ตรวจ</span></h4>';
                     }              //end if !empty
                     ?>
                   </div> <!-- /. end  <div class="form-group"> -->
                 </td>
               </tr>
               <?php } ?>
             </tbody>         
           </table>

         </div>  <!-- ./panel body -->
       </div>
     </div><!--/.row  show paper-->
     <hr>
   </div> <!-- ./end div container -->
 </section><!--/#bottom-->
 <?php $this->load->view('footer');?>