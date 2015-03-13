<?php $this->load->view('header');?>
<!--================CONTENT=================-->
<div class="container col-md-12">
	<div class="row ">
		<div class="col-lg-18 col-sm-18">
			<div class="well">
				<div class="jumbotron">
					<div class="form-inline center">
						<div class="form-group pull-left">
							<img src="https://graph.facebook.com/<?=$fb_data['uid'];?>/picture" class="thumbnail img-responsive "  />
						</div>
						<div class="form-group ">
							<label for="fb_id">FB ID:</label>
							<div class="form-group">
								<input type="text" class="form-control" id="fb_id" name="fb_id" value="<?=$fb_data['uid'];?>">
							</div>
							<label for="fb_name">FB NAME:</label>
							<div class="form-group ">
								<input type="text" class="form-control" id="fb_name" name="fb_name" value="<?=$fb_data['me']['name'];?>" >
							</div>
						</div>
					</div>
					<div class="form-inline col-md-offset-3">
						<div class="form-group ">
							<label for="email">อีเมลล์:</label>
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email" value="<?=$fb_data['me']['email'];?>">
							</div>
							<label for="sex">เพศ:</label>
							<div class="form-group ">
								<input type="text" class="form-control" id="sex" name="sex" value="<?=$fb_data['me']['gender'];?>" >
							</div>
						</div>
					</div>
					<div class="form-inline col-md-offset-3">
						<div class="form-group ">
							<label for="name">ชื่อ:</label>
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" value="<?=$fb_data['uid'];?>">
							</div>
							<label for="lastname">นามสกุล:</label>
							<div class="form-group">
								<input type="text" class="form-control" id="lastname" name="lastname" value="<?=$fb_data['me']['name'];?>" >
							</div>
						</div>
					</div>
					<div class="form-inline col-md-offset-3">
						<div class="form-group ">
							<label for="project_name">โปรเจ็ค:</label>
							<div class="form-group col-sm-19">
								<input type="text" class="form-control" id="project_name" name="project_name" value="<?=$fb_data['uid'];?>">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /CONTENT ============-->
<?php $this->load->view('footer');?>