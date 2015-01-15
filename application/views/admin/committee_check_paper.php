<?php $this->load->view('admin/header');?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ทั่วไป</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
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
        <div class="col-lg-3 col-md-6">
            <a href="#">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-share-square fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo count($get_paper_committee);?></div>
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
        <div class="col-lg-3 col-md-6">
            <a href="#">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo count($check_paper);?></div>
                                <div>โครงงานที่ต้องตรวจ</div>
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
        <div class="col-lg-3 col-md-6">
            <a href="#">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">13</div>
                                <div>โครงงานที่ตรวจแล้ว</div>
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
    </div>  <!-- /.row -->

    <div class="row">
        <div class="col-lg-16">
         <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-file-text fa-fx"></i> project   all              
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <table class="table table-hover">
                  <!-- <table class="table table-bordered table-hover table-striped"> -->
                  <thead>
                      <th>ที่</th>
                      <th>โปรเจ็ค</th>
                      <th>ประเภทโครงงาน</th>
                      <th>file Download</th>
                      <th>หัวหน้าโครงงาน</th>
                      <th>เวลาที่ส่ง</th>
                      <th>ผู้ส่ง</th>
                      <th>สถานการตรวจ</th>
                  </thead>
                  <?php
                  $number = count($check_paper);
                  foreach ($check_paper as $key_paper => $row_paper) {
                      ?>
                      <tbody>
                        <tr>
                            <td><?php echo $number--;?></td>
                            <td><?php echo $row_paper->paper_inputProjectName_TH;?></td>
                            <td><?php echo $row_paper->group_name;?></td>                            
                            <td>
                                <?php
                               

                                    echo  anchor('main/download/'.$row_paper->paper_fileProject,"download") ;

                                    ?>
                                </td>
                                <td><?php echo $row_paper->paper_inputName1;?></td>
                                <td><?php echo $row_paper->paper_date;?></td>
                                <td><?php echo $row_paper->user_first_name." ".$row_paper->user_last_name;?></td>
                                <td>
                                <?php echo form_open();?>
                                  <div class="input-group">
                                    <h4>
                                        <label class="label label-success" for="accept[]">
                                            <input type="radio"  value="accept" name="radio_check[]" id="accept[]"  />ผ่าน
                                        </label><br/>
                                        <label class="label label-warning" for="conditional_accept[]">
                                            <input type="radio" value="conditional_accept" name="radio_check[]" id="conditional_accept[]" />ผ่านแบบมีเงื่อนไข
                                        </label><br/>
                                        <label class="label label-danger" for="reject[]">
                                            <input type="radio" value="reject" name="radio_check[]" id="reject[]" />ไม่ผ่าน
                                        </label>
                                    </h4>
                                    <div class="btn btn-success">
                                    send
                                    </div>
                                    </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>

                </div>  <!-- ./panel body -->
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-16 -->

    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php $this->load->view('admin/footer');?>