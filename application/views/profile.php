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
					<br/>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
						แจ้งชำระเงิน
					</button>
					<div id="myModal"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
						<div class="modal-dialog modal-lg ">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									<h4 class="modal-title">แจ้งชำเงินค่าลงทะเบียน</h4>
									<hr/>
								</div>
								<div class="modal-body">
									<?php echo form_open('main/send_pament','class="form-horizontal" role="form"');?>
									<input type="hidden" name="inputFB_ID" value="<?php echo $fb_data['me']['id'];?>">
									<input type="hidden" name="inputFB_name" value="<?php echo $fb_data['me']['name'];?>">
									<input type="hidden" name="inputEmail" value="<?php echo $fb_data['me']['email'];?>">
									<input type="hidden" name="inputGender" value="<?php echo $fb_data['me']['gender'];?>">

									<div class="form-group">
										<label for="form_datetime" class="col-sm-2 control-label">วันที่แจ้ง</label>
										<div class="col-md-5">
											<div id="datetimepicker1" class="input-append date">
												<input  type="date" class="form-control"></input>
												<span class="add-on">
													<i data-time-icon="icon-time" data-date-icon="icon-calendar">
													</i>
												</span>
											</div>
										</div>
										<script type="text/javascript">
											$(function() {
												$('#datetimepicker1').datetimepicker({
													language: 'th-th',
													formate:"dd/MMMM/yyyy hh:mm"
												});
											});
										</script>
									</div>
								</div>  <!-- /. <div class="modal-body">-->
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Send</button>
								</div>
								<?php echo form_close(); ?>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div> <!-- /.<div class="text-center">-->
			</div>	<!-- /. end <div class="row"> -->
			<!-- edit form column -->

			<div class="col-md-9 personal-info">
				<form class="form-horizontal" role="form" action="send_pament">
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
							<input class="form-control" type="text" value="<?php echo $profile_row->user_gender?>" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Project TH:</label>
						<div class="col-lg-8">
							<input class="form-control" type="text" value="<?php echo $profile_row->paper_inputProjectName_TH;?>" disabled="dissabled"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Project EN:</label>
						<div class="col-md-8">
							<input class="form-control" type="text" value="<?php echo $profile_row->paper_inputProjectName_EN;?>" disabled="dissabled"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Group:</label>
						<div class="col-md-8">
							<input class="form-control" type="text" value="<?php echo $profile_row->group_name;?>" disabled="dissabled"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<input type="button" class="btn btn-primary" value="Save">
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