<?php $this->load->view('header');?>
<section  class="well" style="margin-top:30px;">
	<div class="container">
		<hr/>
		<div class="row">
			<!-- left column -->
			<div class="col-md-3">
				<div class="text-center">
					<!-- <img src="https://graph.facebook.com/<?=$fb_data['uid'];?>/picture"  class="avatar img-circle" alt="avatar"> -->
					<img src="https://graph.facebook.com/<?php echo $fb_data['uid'];?>/picture" class="thumbnail img-responsive col-md-offset-5"  alt="avatar" />

					<h6>Upload a different photo...</h6>

					<input type="file" class="form-control">
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
						<label class="col-md-3 control-label">Confirm password:</label>
						<div class="col-md-8">
							<input class="form-control" type="password" value="11111122333">
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