<?php 
$data = array(
	'title' => "เข้าสู่ระบบ",
	'get_paper' => $this->m_main->get_paper(),
	'get_status_paper' => $this->m_main->get_status_paper(), 

	);
	?>
	<?php $this->load->view('index',$data);?>
	<script type="text/javascript">

		$(function() {

			$(window).load(function(){
				$('#myModal').modal('show');
			});
			$('#login-form-link').click(function(e) {
				$("#login-form").delay(100).fadeIn(100);
				$("#register-form").fadeOut(100);
				$('#register-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});
			$('#register-form-link').click(function(e) {
				$("#register-form").delay(100).fadeIn(100);
				$("#login-form").fadeOut(100);
				$('#login-form-link').removeClass('active');
				$(this).addClass('active');
				e.preventDefault();
			});

		});

	</script>
	<div class="container">
		<div class="row ">
	<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		mymodal
	</button>
	<input type="text" class="form-control col-sm-6" placeholder="Text input"> -->

	<!-- <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" > -->
	<div id="myModal"  class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" >
		<!-- <div class="modal-dialog " style="width:60%" > -->
		<div class="modal-dialog  ">
			<div class="modal-content">
				<div class="modal-header">
				<!--	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">เข้าระบบครั้งแรกกรุณากรอกชื่อ สกุล</h4> -->
				<div class="row">
					<div class="pull-left">
						<a href="#" class="active" id="login-form-link">Login</a>
					</div>
					<div class="pull-right">
						<a href="#" id="register-form-link">Register</a>
					</div>
				</div>
				<hr/>
			</div>

			<div class="modal-body" >
				<div class="row">
					<div class="col-lg-12">  <!-- login-->
						<?php echo form_open('verifyLogin','class="form-horizontal" role="form" id="login-form" style="display: block;" ');?>
						<div class="col-md-2"></div>
						<div class="form-group " >
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="email" class="form-control" id="useremail" name="useremail" placeholder="Email " style="width:60%;">
							</div>
						</div> <!-- /.form-group -->

						<div class="col-md-2"></div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" id="userpassword"  name="userpassword" placeholder="Password" style="width:60%;">
							</div> <!-- /.input-group -->
						</div> <!-- /.form-group -->
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Account Login</button>
						</div>
						<?php echo form_close(); ?>
						<!-- /. login -->
						<!-- register -->
						<?php echo form_open('register','class="form-horizontal" role="form" id="register-form" style="display: none;" ');?>
						<div class="col-md-2"></div>
						<div class="form-group " >
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="email" class="form-control" id="useremail" name="useremail" placeholder="User Email" style="width:60%;">
							</div>
						</div> <!-- /.form-group -->

						<div class="col-md-2"></div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" id="userpassword"  name="userpassword" placeholder="Password" style="width:60%;">
							</div> <!-- /.input-group -->
						</div> <!-- /.form-group -->
						<div class="modal-footer">
							<button type="submit" class="btn btn-success">Account Login</button>
						</div>
						<?php echo form_close(); ?>
						<!-- / .register -->
					</div>
				</div>
			</div> <!-- / .modal-body-->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div> <!-- /. row /-->
</div><!--/.container-->