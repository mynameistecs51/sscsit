<?php $this->load->view('header');?>

<section id="main-slider" class="no-margin">
    <div class="carousel slide wet-asphalt">
        <ol class="carousel-indicators">
            <li data-target="<?php echo base_url();?>#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="<?php echo base_url();?>#main-slider" data-slide-to="1"></li>
            <li data-target="<?php echo base_url();?>#main-slider" data-slide-to="2"></li>
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
       <!--  <a class="prev hidden-xs" href="<?php echo base_url().'#main-slider';?>" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a> -->
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
                    <h3>โครงงาน Student Sympsium</h3>
                    <p>โครงงานทั้งหมดของนักศึกษาที่ส่งเข้าร่วมในการนำเสนอผลงาน</p>
                    <div class="btn-group">
                        <a class="btn btn-danger" href="<?php echo base_url().'#scroller';?>" data-slide="prev"><i class="icon-angle-left"></i></a>
                        <a class="btn btn-danger" href="<?php echo base_url();?>#scroller" data-slide="next"><i class="icon-angle-right"></i></a>
                    </div>
                    <p class="gap"></p>
                </div>
                <div class="col-md-9">
                    <div id="scroller" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>images/portfolio/recent/item1.png" alt="">
                                                <h5>
                                                    Nova - Corporate site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>images/portfolio/recent/item3.png" alt="">
                                                <h5>
                                                    Fornax - Apps site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>images/portfolio/recent/item2.png" alt="">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.row-->
                            </div><!--/.item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>images/portfolio/recent/item2.png" alt="">
                                                <h5>
                                                    Flat Theme - Business Theme
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>images/portfolio/recent/item1.png" alt="">
                                                <h5>
                                                    Nova - Corporate site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                            
                                    <div class="col-xs-4">
                                        <div class="portfolio-item">
                                            <div class="item-inner">
                                                <img class="img-responsive" src="<?php echo base_url();?>images/portfolio/recent/item3.png" alt="">
                                                <h5>
                                                    Fornax - Apps site template
                                                </h5>
                                                <div class="overlay">
                                                    <a class="preview btn btn-danger" title="Malesuada fames ac turpis egestas" href="<?php echo base_url();?>images/portfolio/full/item1.jpg" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
        </div>
    </section><!--/#recent-works-->

    <section id="testimonial" class="alizarin">
        <div class="container">
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
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

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
                            <li><a href="#">Company Overview</a></li>
                            <li><a href="#">Meet The Team</a></li>
                            <li><a href="#">Our Awesome Partners</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Frequently Asked Questions</a></li>
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