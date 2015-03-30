<?php $this->load->view('admin/header');?>
<div id="page-wrapper" style="width:100%;margin-left:0px;">
   <div class="row">
      <div class="col-lg-12">
         <h1 class="page-header">สมาชิกที่จ่ายเงินแล้ว</h1>
      </div> <!-- /.col-lg-12 -->
   </div>
   <div class="row">
      <div class="col-lg-3 col-md-6">
         <a href="admin_status_paper">
            <div class="panel panel-primary">
               <div class="panel-heading">
                  <div class="row">
                     <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                     </div>
                     <div class="col-xs-9 text-right">
                        <div class="huge"><?php ?>
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
            </div>
         </a>
      </div>  
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
                              <th width="40px">ที่</th>
                              <th>โปรเจ็ค</th>
                              <th>วันที่ส่ง</th>
                              <th>สถานะ</th>
                           </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>
                          xxx
                        </td>
                        <td>
                         xxx
                        </td>

                        <td>
                          xxx
                        </td>

                        <td>
                        xx
                        </td>

                        </tr>
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