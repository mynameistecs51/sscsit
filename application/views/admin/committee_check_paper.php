<?php $this->load->view('admin/header');?>
<?php 
if(empty($javascript_myModal)){
    echo "";
}else{
    echo $javascript_myModal;
}
?>
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
            <!-- <a href="admin_status_paper"> -->
            <a href = "committee_check_paper">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-file-text fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo count($check_paper);?></div>
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
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo count($check_paper) - count($count_paper_check);?></div>
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
            <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo count($count_paper_check);?></div>
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
                  $checked = array();
                  foreach ($get_committee_checkpaper as $key_get_committee_checkpaper => $value_get_committee_checkpaper) {
                    if(!isset($checked[$value_get_committee_checkpaper->paper_id])){
                        $checked[$value_get_committee_checkpaper->paper_id] = array();
                    }
                    array_push($checked[$value_get_committee_checkpaper->paper_id],array('check_status' => $value_get_committee_checkpaper->check_status,'paper_id' => $value_get_committee_checkpaper->paper_id,'check_comment' => $value_get_committee_checkpaper->check_comment,'check_id' => $value_get_committee_checkpaper->check_id));
                }
                // echo '--------------------';
                // print_r($checked);
                // echo '--------------------';
                ?>
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
                            <?php
                            if(!empty($checked[$row_paper->paper_id])){
                                if($checked[$row_paper->paper_id][0]['check_status'] === "accept"){
                                    echo  "<button class='btn btn-success' data-toggle='modal' data-target='#myModal".$row_paper->paper_id."'>ผ่าน</button>";  
                                    ?>
                                    <div class="row col-sm-12">
                                        <div id="myModal<?php echo $row_paper->paper_id;?>"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                            <!-- <div class="modal-dialog " style="width:60%" > -->
                                            <div class="modal-dialog modal-lg ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title">ตรวจเอกสาร</h4>

                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo form_open('main/update_checked_paper','class="form-horizontal" role="form"');?>
                                                        <input type="hidden" name="user_facebook_id" value="<?php echo $fb_data['me']['id'];?>" />
                                                        <input type="hidden" name="project_id" value="<?php  echo $row_paper->paper_id;?> ">
                                                        <input type="hidden" name="check_id" value="<?php echo $checked[$row_paper->paper_id][0]['check_id'] ;?>">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="accept" class="btn btn-success">
                                                                    <input type="radio" id="accept" name="checked_paper" value="accept" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "accept" ? "checked" : '');?> />
                                                                    :ผ่าน
                                                                </label>&nbsp;
                                                                <label for="conditional_accept" class="btn btn-warning" >
                                                                    <input type="radio" id="conditional_accept" name="checked_paper" value="conditional_accept" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "conditional_accept" ? "checked" : '');?> />
                                                                    :ผ่านแบบมีเงื่อนไข
                                                                </label>&nbsp;
                                                                <label for="reject" class="btn btn-danger">
                                                                    <input type="radio" id="reject" name="checked_paper" value="reject" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "reject" ? "checked" : '');?> />
                                                                    :ไม่ผ่าน
                                                                </label>
                                                                <?php echo form_error('checked_paper'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="comment">
                                                                    Comment:
                                                                    <textarea id="comment" name="comment" class="form-control" rows="3" cols="80"><?php echo $checked[$row_paper->paper_id][0]['check_comment'];?></textarea>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">UPDATE</button>
                                                    </div>
                                                    <?php echo form_close();?>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <?php
                                }elseif($checked[$row_paper->paper_id][0]['check_status'] === "conditional_accept"){
                                    echo  "<button class='btn btn-warning'data-toggle='modal' data-target='#myModal".$row_paper->paper_id."'>ผ่านแบบมีเงื่อนไข</button>";  
                                    ?>
                                    <div class="row col-sm-12">
                                        <div id="myModal<?php echo $row_paper->paper_id;?>"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                            <!-- <div class="modal-dialog " style="width:60%" > -->
                                            <div class="modal-dialog modal-lg ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                        <h4 class="modal-title">ตรวจเอกสาร</h4>

                                                    </div>
                                                    <div class="modal-body">
                                                        <?php echo form_open('main/update_checked_paper','class="form-horizontal" role="form"');?>
                                                        <input type="hidden" name="user_facebook_id" value="<?php echo $fb_data['me']['id'];?>" />
                                                        <input type="hidden" name="project_id" value="<?php  echo $row_paper->paper_id;?> ">
                                                        <input type="hidden" name="check_id" value="<?php echo $checked[$row_paper->paper_id][0]['check_id'] ;?>">
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="accept" class="btn btn-success">
                                                                    <input type="radio" id="accept" name="checked_paper" value="accept" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "accept" ? "checked" : '');?> />
                                                                    :ผ่าน
                                                                </label>&nbsp;
                                                                <label for="conditional_accept" class="btn btn-warning" >
                                                                    <input type="radio" id="conditional_accept" name="checked_paper" value="conditional_accept" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "conditional_accept" ? "checked" : '');?> />
                                                                    :ผ่านแบบมีเงื่อนไข
                                                                </label>&nbsp;
                                                                <label for="reject" class="btn btn-danger">
                                                                    <input type="radio" id="reject" name="checked_paper" value="reject" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "reject" ? "checked" : '');?> />
                                                                    :ไม่ผ่าน
                                                                </label>
                                                                <?php echo form_error('checked_paper'); ?>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="comment">
                                                                    Comment:
                                                                    <textarea id="comment" name="comment" class="form-control" rows="3" cols="80"><?php echo $checked[$row_paper->paper_id][0]['check_comment'];?></textarea>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-success">UPDATE</button>
                                                    </div>
                                                    <?php echo form_close();?>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    <?php 
                                }elseif($checked[$row_paper->paper_id][0]['check_status'] === "reject"){
                                 echo  "<button class='btn btn-danger'data-toggle='modal' data-target='#myModal".$row_paper->paper_id."'>ไม่ผ่าน</button>";  
                                 ?>
                                 <div class="row col-sm-12">
                                    <div id="myModal<?php echo $row_paper->paper_id;?>"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                                        <!-- <div class="modal-dialog " style="width:60%" > -->
                                        <div class="modal-dialog modal-lg ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title">ตรวจเอกสาร</h4>

                                                </div>
                                                <div class="modal-body">
                                                    <?php echo form_open('main/update_checked_paper','class="form-horizontal" role="form"');?>
                                                    <input type="hidden" name="user_facebook_id" value="<?php echo $fb_data['me']['id'];?>" />
                                                    <input type="hidden" name="project_id" value="<?php  echo $row_paper->paper_id;?> ">
                                                    <input type="hidden" name="check_id" value="<?php echo $checked[$row_paper->paper_id][0]['check_id'] ;?>">
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="accept" class="btn btn-success">
                                                                <input type="radio" id="accept" name="checked_paper" value="accept" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "accept" ? "checked" : '');?> />
                                                                :ผ่าน
                                                            </label>&nbsp;
                                                            <label for="conditional_accept" class="btn btn-warning" >
                                                                <input type="radio" id="conditional_accept" name="checked_paper" value="conditional_accept" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "conditional_accept" ? "checked" : '');?> />
                                                                :ผ่านแบบมีเงื่อนไข
                                                            </label>&nbsp;
                                                            <label for="reject" class="btn btn-danger">
                                                                <input type="radio" id="reject" name="checked_paper" value="reject" <?php echo $is_admin = ($checked[$row_paper->paper_id][0]['check_status'] === "reject" ? "checked" : '');?> />
                                                                :ไม่ผ่าน
                                                            </label>
                                                            <?php echo form_error('checked_paper'); ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <label for="comment">
                                                                Comment:
                                                                <textarea id="comment" name="comment" class="form-control" rows="3" cols="80"><?php echo $checked[$row_paper->paper_id][0]['check_comment'];?></textarea>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">UPDATE</button>
                                                </div>
                                                <?php echo form_close();?>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <?php 
                            }
                        }else{
                            echo '<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal'.$row_paper->paper_id.'">
                            ตรวจเอกสาร
                        </button>';
                    }

                    ?>

                    <div class="row col-sm-12">
                        <div id="myModal<?php echo $row_paper->paper_id;?>"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
                            <!-- <div class="modal-dialog " style="width:60%" > -->
                            <div class="modal-dialog modal-lg ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title">ตรวจเอกสาร</h4>

                                    </div>
                                    <div class="modal-body">
                                        <?php echo form_open('main/checked_paper','class="form-horizontal" role="form"');?>
                                        <input type="hidden" name="user_facebook_id" value="<?php echo $fb_data['me']['id'];?>" />
                                        <input type="hidden" name="project_id" value="<?php  echo $row_paper->paper_id;?> ">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="accept" class="btn btn-success">
                                                    <input type="radio" id="accept" name="checked_paper" value="accept"/>
                                                    :ผ่าน
                                                </label>&nbsp;
                                                <label for="conditional_accept" class="btn btn-warning" >
                                                    <input type="radio" id="conditional_accept" name="checked_paper" value="conditional_accept">
                                                    :ผ่านแบบมีเงื่อนไข
                                                </label>&nbsp;
                                                <label for="reject" class="btn btn-danger">
                                                    <input type="radio" id="reject" name="checked_paper" value="reject">
                                                    :ไม่ผ่าน
                                                </label>
                                                <?php echo form_error('checked_paper'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label for="comment">
                                                    Comment:
                                                    <textarea id="comment" name="comment" class="form-control" rows="3" cols="80"></textarea>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">ส่ง</button>
                                    </div>
                                    <?php echo form_close();?>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
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

<?php $this->load->view('admin/footer');?>