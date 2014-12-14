<?php $this->load->view('header');?>

<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>About Us</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
            </div>
            <div class="col-sm-6">
                <ul class="breadcrumb pull-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="about-us" class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">   <!-- start panel -->
                <div class="panel-heading">
                    <h4 class="glyphicon glyphicon-file">  โครงงาน</h4>
                </div>
                <div class="panel panel-body"> <!-- strat body panel -->
                 <!--  <form class="form-horizontal col-sm-10 pull-left" role="form">   -->  <!--   start form -->
                 <?php echo form_open_multipart('main/add_project','class="form-horizontal col-sm-10 pull-left" role="form"');?>
                 <div class="form-group">
                    <label for="inputName1" class="col-sm-3 control-label">ผู้ส่งโครงงาน 1</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <label for="male">Male
                                    <input type="radio"  value="male" name="sex" id="male"/>
                                </label>
                                <label for="female">Female
                                    <input type="radio" value="female" name="sex" id="female">
                                </label>
                            </div>
                            <input type="text" class="form-control " name="inputName1" id="inputName1" placeholder="ชื่อสกุล  ผู้ส่งโครงงาน 1"  onfocus="" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputName2" class="col-sm-3 control-label">ผู้ส่งโครงงาน 2</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <label for="male2">Male
                                    <input type="radio" value="male" name="sex2" id="male2"/>
                                </label>
                                <label for="female">Female
                                    <input type="radio" value="female" name="sex2" id="female2">
                                </label>
                            </div>
                            <input type="text" class="form-control" name="inputName2" id="inputName2" placeholder="ชื่อสกุล  ผู้ส่งโครงงาน 2">
                        </div>
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputProjectName_TH" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาไทย)</label>
                    <div class="col-sm-7">                           
                        <input type="text" class="form-control" id="inputProjectName_TH" name="inputProjectName_TH" placeholder="ชื่อโปรเจ็คภาษาไทย">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputProjectName_ENG" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาอังกฤษ)</label>
                    <div class="col-sm-7">                           
                        <input type="text" class="form-control" id="inputProjectName_ENG" name="inputProjectName_ENG" placeholder="ชื่อโปรเจ็คภาษาอังกฤษ">
                    </div>
                </div>
                <div class="form-group"> 
                    <label for="inputGroup" class="col-sm-3 control-label">ประเภทโครงงาน</label>
                    <div class="col-sm-7">                           
                    <select  class="form-control "  id="select_paper" name="select_paper[]" multiple>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFileProject" class="col-sm-3 control-label">ไฟล์โปรเจ็ค</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="file" name="fileProject" id="fileProject" />
                            <p class="help-block">สามารถอัพโหลดไฟล์ .doc .docx .pdf <br/>*ควรตั้งชื่อเป็นภาษาอังกฤษ</p>                                               
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPictureProject" class="col-sm-3 control-label">รูปภาพโปรเจ็ค</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="file" name="filePictureProject" id="filePicture" />
                            <p class="help-block">สามารถอัพโหลดไฟล์ .png .jpg .JPG<br/>*ควรตั้งชื่อเป็นภาษาอังกฤษ</p>                                            
                        </div>
                    </div>
                </div>                    
                <div class="form-group pull-right">
                    <!-- <div class="col-sm-offset-2 col-sm-10"> -->
                    <button type="reset" class="btn btn-warning">Cancel </button>
                    <button type="submit" class="btn btn-success">Send  </button>
                    <!-- </div> -->
                </div>
            </form>  <!-- end form -->
        </div>  <!-- end panel body -->
    </div> <!-- end panel -->
</div>
</div><!--/.row-->

<div class="gap"></div>
<h1 class="center">Meet the Team</h1>
<p class="lead center">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
<div class="gap"></div>

<div id="meet-the-team" class="row">
    <div class="col-md-3 col-xs-6">
        <div class="center">
            <p><img class="img-responsive img-thumbnail img-circle" src="images/team-member.jpg" alt="" ></p>
            <h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
            <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
        </div>
    </div>

    <div class="col-md-3 col-xs-6">
        <div class="center">
            <p><img class="img-responsive img-thumbnail img-circle" src="images/team-member.jpg" alt="" ></p>
            <h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
            <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
        </div>
    </div>        
    <div class="col-md-3 col-xs-6">
        <div class="center">
            <p><img class="img-responsive img-thumbnail img-circle" src="images/team-member.jpg" alt="" ></p>
            <h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
            <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
        </div>
    </div>        
    <div class="col-md-3 col-xs-6">
        <div class="center">
            <p><img class="img-responsive img-thumbnail img-circle" src="images/team-member.jpg" alt="" ></p>
            <h5>David J. Robbins<small class="designation muted">Senior Vice President</small></h5>
            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
            <a class="btn btn-social btn-facebook" href="#"><i class="icon-facebook"></i></a> <a class="btn btn-social btn-google-plus" href="#"><i class="icon-google-plus"></i></a> <a class="btn btn-social btn-twitter" href="#"><i class="icon-twitter"></i></a> <a class="btn btn-social btn-linkedin" href="#"><i class="icon-linkedin"></i></a>
        </div>
    </div>
</div><!--/#meet-the-team-->
</section><!--/#about-us-->

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
                            <img src="images/blog/thumb1.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 17 Aug 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/blog/thumb2.jpg" alt="">
                        </div>
                        <div class="media-body">
                            <span class="media-heading"><a href="#">Pellentesque habitant morbi tristique senectus</a></span>
                            <small class="muted">Posted 13 Sep 2013</small>
                        </div>
                    </div>
                    <div class="media">
                        <div class="pull-left">
                            <img src="images/blog/thumb3.jpg" alt="">
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