<?php $this->load->view('header');?>

<script type="text/javascript">
/**
 * show picture upload payment
 */
 function PreviewImage() {

 	var oFReader = new FileReader();

 	oFReader.readAsDataURL(document.getElementById("images[]").files[0]);

 	oFReader.onload = function (oFREvent) {

 		document.getElementById("show_pic").src = oFREvent.target.result;

 	};

 } 

</script>
<section  class="well" style="margin-top:30px;">
	<div class="container">
		<hr/>
		<div class="row">
			<!-- left column -->
			<div class="col-md-3">
				<div class="text-center">
					<img src="https://graph.facebook.com/<?php echo $fb_data['uid'];?>/picture" class="thumbnail img-responsive col-md-offset-5"  alt="avatar" />

					<label class="control-label">สถานะ :<span class="label label-warning">รออนุมัติงานวิจัย</span></label>

				</div>
			</div>
			<!-- edit form column -->
			
			<div class="col-md-9 personal-info">
				<form class="form-horizontal" role="form">
					<?php 
					foreach ($data_profile as $profile_row) :
						?>
					<div class="form-group">
						<label class="col-lg-3 control-label">FB ID:</label>
						<div class="col-lg-3">
							<input class="form-control" type="text" value="<?php echo $fb_data['uid'];?>" disabled="dissabled"/>
						</div>
						<label class="col-lg-2 control-label ">FB NAME:</label>
						<div class="col-lg-3">
							<input class="form-control" type="text" value="<?php echo $fb_data['me']['name'];?>" disabled="dissabled"/>
						</div>
					</div>
					<div class="form-group"></div> <!--- เว้นวรรค -->
					<div class="form-group">
						<label class="col-lg-3 control-label">Email:</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" value="<?php echo $fb_data['me']['email'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">First name:</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" value="<?php echo $profile_row->user_first_name;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Last name:</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" value="<?php echo $profile_row->user_last_name;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Gender:</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" value="<?php echo $fb_data['me']['gender'];?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Project TH:</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" value="<?php echo $profile_row->paper_inputProjectName_TH;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Project EN:</label>
						<div class="col-md-8">
							<input class="form-control" type="text" value="<?php echo $profile_row->paper_inputProjectName_EN;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Group:</label>
						<div class="col-md-8">
							<input class="form-control" type="text" value="<?php echo $profile_row->group_name;?>">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Payment:</label>
						<div class="col-md-8">
							<img id="show_pic" name="show_pic" src="<?php echo base_url().'images/no-image.jpg';?>" alt="" style="width:130px; height:130px" /><br/><br/>
							<input type="file" id="images"  name="images" size="20" onchange="PreviewImage();"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<input type="button" class="btn btn-primary" value="Save Changes">
							<span></span>
							<input type="reset" class="btn btn-default" value="Cancel">
						</div>
					</div>
				<?php endforeach; ?>
			</form>
		</div>
	</div>
</div>
<hr/>
</section>
<?php $this->load->view('footer');?>