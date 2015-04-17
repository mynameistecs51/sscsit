<?php $this->load->view('header');?>

<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <ol class       = "carousel-indicators">
            <li data-target = "<?php echo base_url();?>#main-slider" data-slide-to = "0" class = "active"></li>
            <li data-target = "<?php echo base_url();?>#main-slider" data-slide-to = "1"></li>
            <li data-target = "<?php echo base_url();?>#main-slider" data-slide-to = "2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(<?php echo base_url();?>images/slider/bg1.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1"><?php echo "Student Symposium";?> </h2>
                                <p class="animation animated-item-2">โครงงานสัมนาทางวิชาการ ของสาขาวิขาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>images/slider/bg2.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content center centered">
                                <h2 class="animation animated-item-1"><?php echo "Student Symposium";?> </h2>
                                <p class="animation animated-item-2">โครงงานสัมนาทางวิชาการ ของสาขาวิขาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ.</p>
                                <br>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
            <div class="item" style="background-image: url(<?php echo base_url();?>images/slider/bg3.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="carousel-content centered">
                                <h2 class="animation animated-item-1"><?php echo "Student Symposium";?> </h2>
                                <p class="animation animated-item-2">โครงงานสัมนาทางวิชาการ ของสาขาวิขาวิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ.</p>
                                <a class="btn btn-md animation animated-item-3" href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="centered">
                                <div class="embed-container">
                                    <iframe src="//player.vimeo.com/video/69421653?title=0&amp;byline=0&amp;portrait=0&amp;color=a22c2f" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->

    <a class="prev hidden-xs" href="<?php echo base_url().'#main-slider';?>" data-slide="prev">
        <i class="icon-angle-left"></i>
    </a>
        <?php echo anchor(base_url().'#main-slider',' <i class="icon-angle-left"></i>','class="prev hidden-xs"  data-slide="prev" ');?>
        <a class="next hidden-xs" href="<?php echo base_url().'#main-slider';?>" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="services" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-desktop icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">เงื่อนไขการส่งโครงงาน</h3>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-list icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">หัวข้อโครงงาน</h3>
                            <p>
                                <ul>
                                    <li>โปรแกรมเพื่อความบันเทิง</li>
                                    <li>โปรแกรมส่งเสริมการเรียนรู้</li>
                                    <li>โปรแกรมเพื่อช่วยเหลือคนพิการและผู้สูงอายุ </li>
                                    <li>โปรแกรมเพื่องานการพัฒนาด้านวิทยาศาสตร์และเทคโนโลยี</li>
                                    <li>โปรแกรมเพื่อการประยุกต์ใช้งานสำหรับลินุกซ์</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-user icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">กรรมการ</h3>
                            <p>คณะกรรมการผู้ทรงคุณวุฒิ ที่จะมาพิจจารณาโครงงานของนักศึกษาที่ได้ส่งเข้ามา.</p>
                        </div>
                    </div>
                </div><!--/.col-md-4-->
            </div>
        </div>
    </section><!--/#services-->

    <section id="recent-works">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>โครงงาน ของนักศึกษา</h3>
                    <p>โครงงานทั้งหมดของนักศึกษาที่ส่งเข้าร่วมในการนำเสนอผลงาน</p>

                    <p class="gap"></p>
                </div>
                <div class="row col-md-9">       <!-- //    show paper all    //  -->
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
                                    <th>สถานการตรวจ <i class="label label-success">ผ่าน</i><i class="label label-warning">มีเงื่อนไข</i><i class="label label-danger">ไม่ผ่าน</i></label></th>
                                </thead>
                                <tbody>
                                    <?php
                                    $check_paper = array();
                                    foreach ($get_status_paper as $key_status_paper         => $value_status_paper) {
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
                                            <td>
                                                <div class="form-group">
                                                    <?php
                                                    if(!empty($check_paper[$row_paper->paper_id])){
                                                        for($i=0; $i<count($check_paper[$row_paper->paper_id]); $i++){

                                                            if($check_paper[$row_paper->paper_id][$i]['status'] === "accept"){
                                                                echo "<button class ='btn btn-success' disabled>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>&nbsp;";

                                                            }elseif($check_paper[$row_paper->paper_id][$i]['status'] === "conditional_accept"){
                                                                echo "<button class ='btn btn-warning' disabled>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button> &nbsp;";

                                                            }elseif($check_paper[$row_paper->paper_id][$i]['status'] === "reject"){
                                                                echo "<button class ='btn btn-danger' disabled>".$check_paper[$row_paper->paper_id][$i]['committee_check']  ."</button>&nbsp;";
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
</div><!--/.row-->
</div>
</section><!--/#recent-works-->

<section id="bottom" class="wet-asphalt">
    <div class="container">
        <h4>คณะกรรมการ</h4>
        <div class="row">
            <?php 
            foreach ($committee_profile as $commit_row) {
                ?>
                <!-- <a href="https://www.facebook.com/app_scoped_user_id/<?php echo $commit_row->user_facebook_id;?>/"> -->
                <div class="col-md-3 col-sm-6 ">   
                    <div class="media thumbnail">
                        <div class="pull-left">
                            <!-- <img src="https://graph.facebook.com/<?php echo $commit_row->user_facebook_id;?>/picture" alt="" class="pic" /> -->
                        </div>
                        <div class="media-body">
                            <span class="media-heading">
                             <?php echo $commit_row->user_first_name ." ".$commit_row->user_last_name    ;?>
                         </span>
                         <span class="media-footer"><?php echo $commit_row->user_status;?></span> 
                     </div>
                 </div>
             </div>
             <!-- </a> -->
             <?php
         }
         ?>
     </div>  <!-- /  .div row -->
 </div> <!--  / .div container -->
 <!-- </div> -->
</section><!--/#bottom-->
<?php $this->load->view('footer');?>