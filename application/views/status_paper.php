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
                              <?
                              if(!empty($check_paper[$row_paper->paper_id])){
                                for($i=0; $i<count($check_paper[$row_paper->paper_id]); $i++){
                                 // echo   join(",",$check_paper[$row_paper->paper_id]).
                               if($check_paper[$row_paper->paper_id][$i]['status'] === "accept"){
                                    echo "<button class ='btn btn-success'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";

                                 }elseif($check_paper[$row_paper->paper_id][$i]['status'] === "conditional_accept") {
                                     echo "<button class ='btn btn-warning'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";

                                 }elseif($check_paper[$row_paper->paper_id][$i]['status'] === "reject") {

                                   echo "<button class ='btn btn-danger'>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>";
                              }  //end else if check_paper

                                }
                                }
                              //   }else{
                              // echo '<h4><span class ="label label-default">ยังไม่ตรวจ</span></h4>';
                              // }              //end if !empty
                            ?>
                         </td>
                      </tr>
                      <?php } ?>
                   </tbody>            
                </table>

             </div>  <!-- ./panel body -->
          </div>
       </div><!--/.row  wsho paper-->
       <hr>
</section><!--/#bottom-->
<?php $this->load->view('footer');?>