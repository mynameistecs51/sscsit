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
        <a href="status_page">
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
                                <div class="huge">124</div>
                                <div>ตรวจแล้ว</div>
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
                                <div>Support Tickets!</div>
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
                <i class="fa fa-file-text fa-fx"></i> project                
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ที่</th>
                                        <th>โปรเจ็ค</th>
                                        <th>ประเภท</th>
                                        <th>หัวหน้าโครงงาน</th>
                                        <th>วันที่ส่ง</th>
                                        <th>สถานะ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $number = count($get_paper);
                                    $a = "";
                                    foreach ($get_paper as $key_papger => $row_paper) {
                                        
                                       ?>
                                 <tr>
                                       <td><?php echo $number--;?></td>
                                       <td><?php echo $row_paper->paper_inputProjectName_TH;?></td>
                                       <td><?php echo $row_paper->group_name;?></td>
                                       <td><?php echo $row_paper->paper_inputName1;?></td>
                                       <td><?php echo $row_paper->paper_date;?></td>
                                       <td>
                                           <?php 
                                           foreach ($get_paper_committee as $key_commt_paper => $value_committee_paper) {
                                            # code...
                                            echo "--";
                                            // echo $value_committee_paper->paper_id ;
                                            if($value_committee_paper->paper_id === $row_paper->paper_id){
                                                echo $value_committee_paper->paper_id ."=".$row_paper->paper_id;
                                            }
                                           elseif($value_committee_paper->paper_id !== $row_paper->paper_id){
                                            echo "NO";
                                           }
                                        }
                                        echo $a;
                                           echo form_open('main/send_paper','class="form-horizontal  pull-left" role="form"');?>

                                           <input type="hidden" name="paper_id" value="<?php echo $row_paper->paper_id;?>">
                                           <select class="selectpicker" multiple data-live-search="true" data-actions-box="true" name="select_committee[]" title="เลือกกรรมการ">
                                            <?php foreach ($get_committee as $key_commt => $row_users) {
                                               echo '<option value="'.$row_users->user_facebook_id.'">'.$row_users->user_first_name."  ".$row_users->user_last_name.'</option>';
                                           }
                                           ?>
                                           <option>chicken</option>
                                           <option>turkey</option>
                                           <option >duck</option>
                                           <option>goose</option>
                                       </select>
                                       <button type="submit" class="btn btn-success">ส่ง</i></button>
                                   </form>
                               </td>
                           </tr>
                           <?php } ;?>
                       </tbody>
                   </table>
               </div>
               <!-- /.table-responsive -->
           </div>
           <!-- /.col-lg-4 (nested) -->
           <div class="col-lg-8">
            <div id="morris-bar-chart"></div>
        </div>
        <!-- /.col-lg-8 (nested) -->
    </div>
    <!-- /.row -->
</div>
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
