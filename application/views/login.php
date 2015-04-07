<?php $this->load->view('header');?>
<script type="text/javascript">
	$(window).load(function(){
		$('#myModal').modal('show');
	});
</script>
<div class="row col-sm-12">
	<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		mymodal
	</button>
	<input type="text" class="form-control col-sm-6" placeholder="Text input"> -->

	<!-- <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" > -->
	<div id="myModal"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
		<!-- <div class="modal-dialog " style="width:60%" > -->
		<div class="modal-dialog modal-lg ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">เข้าระบบครั้งแรกกรุณากรอกชื่อ สกุล</h4>
					<hr/>
				</div>
				<div class="modal-body">
					<?php echo form_open('main/insert_users','class="form-horizontal" role="form"');?>
					<input type="hidden" name="inputFB_ID" value="<?php echo $fb_data['id'];?>">
					<input type="hidden" name="inputFB_name" value="<?php echo $fb_data['name'];?>">
					<input type="hidden" name="inputEmail" value="<?php echo $fb_data['email'];?>">
					<input type="hidden" name="inputGender" value="<?php echo $fb_data['gender'];?>">

					<div class="form-group">
						<div class="col-md-12">
							<div class="form-group row">
								<label for="inputFB_ID" class="col-md-2 control-label">FB ID</label>
								<div class="col-md-3">
									<input type="text" class="form-control " id="inputFB_ID" name="inputFB_ID" value="<?php echo $fb_data['id'];?>" disabled="true">
								</div>
								<label for="inputFB_name" class="col-md-2 control-label">FB NAME</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="inputFB_name" name="inputFB_name" value="<?php echo $fb_data['name'];?>"  disabled="true">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group center">
						<div class="col-md-14">
							<div class="form-group row">
								<label for="inputEmail" class="col-md-2 control-label">Email</label>
								<div class="col-md-5">
									<input type="email" class="form-control" id="inputEmail" name="inputEmail"value="<?php echo $fb_data['email'];?>"  disabled="true">
								</div>
								<label for="inputGender" class="col-md-1 control-label">Gender</label>
								<div class="col-md-3">
									<input type="email" class="form-control" id="inputGender" name="inputGender"value="<?php echo $fb_data['gender'];?>"  disabled="true">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10">
							<div class="form-group row">
								<label for="inputFirst_name" class="col-md-3 control-label">First Name</label>
								<div class="col-md-3">
									<input type="text" class="form-control " id="inputFirst_name" name="inputFirst_name" placeholder="ชื่อ">
								</div>
								<label for="inputLast_name" class="col-md-3 control-label">Last name</label>
								<div class="col-md-3">
									<input type="text" class="form-control" id="inputLast_name" name="inputLast_name" placeholder="นามสกุล">
								</div>
							</div>
						</div>
					</div>
					<div class  ="form-group">
						<div class  ="col-md-10">
							<div class="form-group row">
								<label for="status_user" class="col-md-4 control-label">สถานะผู้เข้าร่วม</label>
								<div class  ="input-group">
									<div class="checkbox">
										<label for  ="student_udru">
											<input type ="radio"  value="student_udru" name="status_user" id="student_udru" checked="true" />  นักศึกษาภายในผู้ส่งผลงาน
										</label>
									</div>
									<div class="checkbox">
										<label for  ="student_paper">
											<input type ="radio" value="student_paper" name="status_user" id="student_paper">  นักศึกษาภายนอกผู้ส่งผลงาน
										</label>
									</div>
									<div class="checkbox">
										<label for  ="student_public">
											<input type ="radio" value="student_public" name="status_user" id="student_public">  นักศึกษาภายนอกผู้เข้าร่วมงาน
										</label>
									</div>
									<div class="checkbox">
										<label for  ="teacher_public">
											<input type ="radio" value="teacher_public" name="status_user" id="teacher_public">  อาจารย์ภายนอก
										</label>
									</div>
									<div class="checkbox">
										<label for  ="people_public">
											<input type ="radio" value="people_public" name="status_user" id="people_public" checked="true">  บุคคลทั่วไป
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Account Login</button>
				</div>
				<?php echo form_close(); ?>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>
<?php $this->load->view('footer');?>