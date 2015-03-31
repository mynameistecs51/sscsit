<?php $this->load->view('admin/header');?>
<div id="page-wrapper" style="width:100%;margin-left:0px;">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">สมาชิกที่รอการอนุมัติ</h1>
      </div> <!-- /.col-lg-12 -->
   </div>
   <div class="row">
      <div class="row">
       <div class=" col-lg-3 col-md-2">
         <a href="admin_status_paper">
            <div class="panel panel-primary ">
               <div class="panel-heading">
                  <div class="row">
                     <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                     </div>
                     <div class="col-md-9 text-right">
                        <div class="huge"><?php echo count($get_paper);?></div>
                        <div>โปรเจ็คทั้งหมด</div>
                     </div>
                  </div>
               </div>
               <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </div>
         </a>
      </div>
      <div class=" col-lg-3 col-md-2">
         <a href="#">
            <div class="panel panel-green">
               <div class="panel-heading">
                  <div class="row">
                     <div class="col-xs-3">
                        <i class="fa fa-share-square fa-5x"></i>
                     </div>
                     <div class="col-md-9 text-right">
                        <div class="huge"><?php echo count($get_count_paper_committee);?></div>
                        <div>ส่งให้กรรมการแล้ว</div>
                     </div>
                  </div>
               </div>
               <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </div>
         </a>
      </div>
      <div class=" col-lg-3 col-md-2">
         <a href="#">
            <div class="panel panel-yellow">
               <div class="panel-heading">
                  <div class="row">
                     <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                     </div>
                     <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo  count($get_paper) - count($get_count_paper_committee);?></div>
                        <div>โครงงานที่ต้องส่ง</div>
                     </div>
                  </div>
               </div>
               <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </div>
         </a>
      </div>
      <div class=" col-lg-3 col-md-2">
         <a href="user_payment">
            <div class="panel panel-red">
               <div class="panel-heading">
                  <div class="row">
                     <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                     </div>
                     <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo count($data_payment);?></div>
                        <div>สถานะการจ่ายเงิน</div>
                     </div>
                  </div>
               </div>
               <div class="panel-footer">
                  <span class="pull-left">View Details</span>
                  <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                  <div class="clearfix"></div>
               </div>
            </div>
         </a>
      </div>
      <!-- ./end -->
   </div><!-- /.row -->
   <div class="row"> <!-- /. strat <div class="row"> -->
      <div class="col-lg-16"><!-- /. start <div class="col-lg-16">-->
         <div class="panel panel-primary"><!-- /. strat <div class="panel-default">-->
           <div class="panel-heading">
            <i class="fa fa-file-text fa-fx"></i>
         </div> <!-- ./end <div class='panel-heading'>-->
         <div class="panel-body"><!--/. <div class="panel-body">-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="table-responsive">
                     <table id="" class="display" cellspacing="0" width="100%">
                        <thead >
                           <tr >
                              <th class="col-sm-1">number</th>
                              <th class="col-md-7">Project</th>
                              <th>Payment</th>
                              <th class="col-md-5">Status Payment</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                           $i= 1;
                           foreach ($data_payment as $data_payment_row) {
                              ?>
                              <tr>
                                 <td>
                                   <?php echo $i++;?> <!-- row number-->
                                </td>
                                <td>
                                  <?php 
                                  echo $data_payment_row->paper_inputProjectName_TH."<br/>".$data_payment_row->paper_inputName1;
                                  ?>
                                  <!-- ./ project name -->
                               </td>
                               <td>
                                <img src="<?php echo base_url().'images/file_payment/'.$data_payment_row->payment_fileName;?>" width="120px" height="80px"/>
                             </td>

                             <td >
                              <?php  
                              if($data_payment_row->status_payment === "wait"){
                                 echo "<h3><label class='label label-warning'>รอการอนุมัติ</label>  <button class='btn btn-success'> ตอบรับ</button></h3>";
                              }else{
                                 echo "<label class='label label-success'>ยอมรับ</label>";
                              }

                              ?>
                           </td>

                        </tr>
                        <?php  } ?>
                     </tbody>
                  </table>
               </div><!-- /. <div class="table-responsive">-->
            </div><!-- end div col-lg-12-->
         </div> <!-- end div row-->
      </div><!-- /. end <div class="panel-body">-->
   </div><!-- ./end <div class="panel-defaut">-->
</div><!-- ./ end <div class="col-lg-16">-->
</div> <!-- ./ end <div class="row">-->
</div><!-- ./<div id="page-wrapper">-->

<?php $this->load->view('admin/footer');?>