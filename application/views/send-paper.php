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
                    <h4 class="glyphicon glyphicon-file"> โครงงาน</h4>

                    </div>
                    <div class="panel panel-body"> <!-- strat body panel -->
                     <!--  <form class="form-horizontal col-sm-10 pull-left" role="form">   -->  <!--   start form -->
                     <div class="form-group center">
                            <?php  
                        if(!empty($error)){echo "<div class='help-block center'><font color='red' size='5'>***กรุณาเลือกไฟล์ หรือ เข้าสู่ระบบ***</font></div>";}else{echo "";} 
                        ?>
                     </div>
                     <?php echo form_open_multipart('main/add_project','class="form-horizontal col-sm-10 pull-left" role="form"');?>
                     <div class="form-group">
                        <label for="inputName1" class="col-sm-3 control-label">ผู้ส่งโครงงาน 1</label>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <label for="male">Male
                                        <input type="radio"  value="male" name="sex" id="male" checked="true" />
                                    </label>
                                    <label for="female">Female
                                        <input type="radio" value="female" name="sex" id="female">
                                    </label>
                                </div>
                                <input type="text" class="form-control " name="inputName1" id="inputName1" placeholder="ชื่อสกุล  ผู้ส่งโครงงาน 1"  value="<?php echo set_value('inputName1');?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputName2" class="col-sm-3 control-label">ผู้ส่งโครงงาน 2</label>
                        <div class="col-sm-7">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <label for="male2">Male
                                        <input type="radio" value="male" name="sex2" id="male2" checked="true" />
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
                        <label for="inputProjectName_EN" class="col-sm-3 control-label">ชื่อโปรเจ็ค (ภาษาอังกฤษ)</label>
                        <div class="col-sm-7">                           
                            <input type="text" class="form-control" id="inputProjectName_EN" name="inputProjectName_EN" placeholder="ชื่อโปรเจ็คภาษาอังกฤษ">
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label for="inputGroup" class="col-sm-3 control-label">ประเภทโครงงาน</label>
                        <div class="col-sm-7">  
                         <select  class="form-control "  id="select_group" name="select_group" >   <!--  เลือกประเภทของโครงงาน   -->
                             <?php
                             foreach ($paper_group as $key => $row_group) {
                                echo '<option value="'.$row_group->group_id.'">'.$row_group->group_name.'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputFileProject" class="col-sm-3 control-label">ไฟล์โปรเจ็ค</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <input type="file" name="fileProject" id="fileProject"  accept=".doc, .docx, .pdf"  />
                            <p class="help-block">สามารถอัพโหลดไฟล์ .doc .docx .pdf <br/>*ควรตั้งชื่อเป็นภาษาอังกฤษ</p>   
                        </div>
                    </div>
                </div>
          <!-- <div class="form-group">
            <label for="inputPictureProject" class="col-sm-3 control-label">รูปภาพโปรเจ็ค</label>
            <div class="col-sm-7">
                <div class="input-group">
                    <input type="file" name="filePictureProject" id="filePictureProject" />
                    <p class="help-block">สามารถอัพโหลดไฟล์ .png .jpg <br/>*ควรตั้งชื่อเป็นภาษาอังกฤษ</p>                                            
                </div>
            </div>
        </div>           -->          
        <div class="form-group pull-right">
            <!-- <div class="col-sm-offset-2 col-sm-10"> -->
            <button type="reset" class="btn btn-warning">Cancel </button>
            <button type="submit" class="btn btn-success">Send  </button>
            <!-- </div> -->
        </div>
        <?php echo form_close();?>  <!-- end form -->
    </div>  <!-- end panel body -->
</div> <!-- end panel -->
</div>
</div><!--/.row-->

</section><!--/#bottom-->
<?php $this->load->view('footer');?>