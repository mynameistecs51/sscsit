<?php $this->load->view('header');?>
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
                'committee_id' => $value_status_paper->user_facebook_id,
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
                            echo "ดูสถานะยังไม่สมบูรณ์เนื่องจาก ง่วง";
                            if($check_paper[$row_paper->paper_id][$i]['status'] === "accept"){
                                echo "<button class ='btn btn-success' data-toggle='modal' data-target='#myModal".$check_paper[$row_paper->paper_id][$i]['committee_id'] ."'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";
                                ?>
                                <!-- modal show comment -->
                                <!-- <div class="row col-sm-12"> -->
                                <div id="myModal<?php echo $check_paper[$row_paper->paper_id][$i]['committee_id'];?>"  class="modal fade bs-example-modal-lg " tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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
                            echo "<button class ='btn btn-warning' data-toggle='modal' data-target='#myModal".$check_paper[$row_paper->paper_id][$i]['committee_id'] ."'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";
                            ?>
                            <!-- modal show comment -->
                            <!-- <div class="row col-sm-12"> -->
                            <div id="myModal<?php echo $check_paper[$row_paper->paper_id][$i]['committee_id'];?>"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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
                        echo "<button class ='btn btn-danger' data-toggle='modal' data-target='#myModal".$check_paper[$row_paper->paper_id][$i]['committee_id'] ."'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";
                        ?>
                        <!-- modal show comment -->
                        <!-- <div class="row col-sm-12"> -->
                        <div id="myModal<?php echo $check_paper[$row_paper->paper_id][$i]['committee_id'];?>"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
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
</div><!--/.row  wsho paper-->
<hr>
</div> <!-- ./end div container -->
</section><!--/#bottom-->
<?php $this->load->view('footer');?>