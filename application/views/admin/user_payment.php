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
      </div>  <!-- /.row -->
   </div>
</div>

<?php $this->load->view('footer');?>