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

<div class="row col-sm-12">
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        mymodal
    </button>
    <input type="text" class="form-control col-sm-6" placeholder="Text input"> 

    <!-- <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" > -->
    <div id="myModal"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
        <!-- <div class="modal-dialog " style="width:60%" > -->
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">เข้าระบบครั้งแรกกรุณากรอกชื่อ สกุล</h4>
                    <hr/>
                </div>
                <div class="modal-body">
                    <?php echo form_open('main/insert_users','class="form-horizontal" role="form"');?>
                    <input type="hidden" name="inputFB_ID" value="<?php echo $fb_data['me']['id'];?>">
                    <input type="hidden" name="inputFB_name" value="<?php echo $fb_data['me']['name'];?>">
                    <input type="hidden" name="inputEmail" value="<?php echo $fb_data['me']['email'];?>"> 
                    <input type="hidden" name="inputGender" value="<?php echo $fb_data['me']['gender'];?>">

                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label for="inputFB_ID" class="col-md-2 control-label">FB ID</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control " id="inputFB_ID" name="inputFB_ID" value="<?php echo $fb_data['me']['id'];?>" disabled="true">
                                    </div>
                                    <label for="inputFB_name" class="col-md-2 control-label">FB NAME</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="inputFB_name" name="inputFB_name" value="<?php echo $fb_data['me']['name'];?>"  disabled="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group center">
                            <div class="col-md-14">
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-md-2 control-label">Email</label>
                                    <div class="col-md-5">
                                        <input type="email" class="form-control" id="inputEmail" name="inputEmail"value="<?php echo $fb_data['me']['email'];?>"  disabled="true">
                                    </div>
                                    <label for="inputGender" class="col-md-1 control-label">Gender</label>
                                    <div class="col-md-3">
                                        <input type="email" class="form-control" id="inputGender" name="inputGender"value="<?php echo $fb_data['me']['gender'];?>"  disabled="true">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 ">
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-md-3 control-label">Login Detail</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <div class="form-group row">
                                    <label for="inputFirst_name" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control " id="inputFirst_name" name="inputFirst_name" placeholder="inputFirst_name">
                                    </div>
                                    <label for="inputLast_name" class="col-md-3 control-label">Last name</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="inputLast_name" name="inputLast_name" placeholder="Value">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <?php echo anchor('#','FB Login','class="btn btn-primary pull-left"');?>
                            <button type="submit" class="btn btn-success">Account Login</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>
<?php $this->load->view('admin/footer');?>