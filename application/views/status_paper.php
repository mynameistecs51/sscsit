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
                <div class="panel-heading">
                    <div class="panel-title">tttttt</div>
                </div>
                <div class="panel-body">
                  <table class="table table-hover">

                      <thead>
                        <th>โปรเจ็ค</th>
                         <th>ประเภทโครงงาน</th>
                        <th>หัวหน้าโครงงาน</th>
                        <th>เวลาที่ส่ง</th>
                        <th>ผู้ส่ง</th>
                        <th>สถานการตรวจ</th>
                    </thead>
                    <?php
                    foreach ($get_paper as $key_paper => $row_paper) {
                      ?>
                      <tbody>
                        <tr>
                            <td><?php echo $row_paper->paper_inputProjectName_TH;?></td>
                            <td><?php echo $row_paper->group_name;?></td>
                            <td><?php echo $row_paper->paper_inputName1;?></td>
                            <td><?php echo $row_paper->paper_date;?></td>
                            <td><?php echo $row_paper->user_first_name." ".$row_paper->user_last_name;?></td>
                            <td>ผ่านแบบมีเงื่อนไข</td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>

            </div>  <!-- ./panel body -->
        </div>
    </div><!--/.row  wsho paper-->
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <div class="center">
                <h2>What our clients say</h2>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-6">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
                <div class="col-md-6">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!--/#services-->

<section id="bottom" class="wet-asphalt">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <h4>About Us</h4>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
                <p>Pellentesque habitant morbi tristique senectus.</p>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <h4>Company</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="#">The Company</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Conatct Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Copyright</a></li>
                    </ul>
                </div>
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <h4>Latest Blog</h4>
                <div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="<?php echo base_url();?>images/blog/thumb1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 17 Aug 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="<?php echo base_url();?>images/blog/thumb2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 13 Sep 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="<?php echo base_url();?>images/blog/thumb3.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 11 Jul 2013</small>
                        </div>
                    </div>
                </div>  
            </div><!--/.col-md-3-->

            <div class="col-md-3 col-sm-6">
                <h4>Address</h4>
                <address>
                    <strong>Twitter, Inc.</strong><br>
                    795 Folsom Ave, Suite 600<br>
                    San Francisco, CA 94107<br>
                    <abbr title="Phone">P:</abbr> (123) 456-7890
                </address>
                <h4>Newsletter</h4>
                <form role="form">
                    <div class="input-group">
                        <input type="text" class="form-control" autocomplete="off" placeholder="Enter your email">
                        <span class="input-group-btn">
                            <button class="btn btn-danger" type="button">Go!</button>
                        </span>
                    </div>
                </form>
            </div> <!--/.col-md-3-->
        </div>
    </div>
</section><!--/#bottom-->
<?php $this->load->view('footer');?>