<?php $this->load->view('header');?>
<script type="text/javascript">
	$(window).load(function(){
		$('#myModal').modal('show');
	});
</script>
<div class="row col-sm-12">
	<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
		mymodal
	</button>
	<input type="text" class="form-control col-sm-6" placeholder="Text input">
	<!-- <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" > -->
	<div id="myModal"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
		<!-- <div class="modal-dialog " style="width:60%" > -->
		<div class="modal-dialog modal-lg ">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Login Detail</h4>
					<hr/>
				</div>
				<div class="modal-body">

					<?php 
				// if(!$fb_data['me']){     
				// 	echo anchor($fb_data['loginUrl'],'<button >login</button>');
				// 	echo "<br/>";
				// 	print_r($fb_data);
				// }  else  {
				// 	echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" />';
				// 	echo "<br/>";
				// 	echo $fb_data['me']['name']." "; 
				// 	echo anchor($fb_data['logoutUrl'],'logout');
    //              //echo anchor('sci_con/logout','logout');
				// 	print_r($fb_data);

				// } 
					?>
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group row">
									<label for="inputFB_ID" class="col-md-2 control-label">FB ID</label>
									<div class="col-md-3">
										<input type="text" class="form-control " id="inputFB_ID" name="inputFB_ID" placeholder="Key" disabled="true">
									</div>
									<label for="inputFB_name" class="col-md-2 control-label">FB NAME</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputFB_name" name="inputFB_name" placeholder="Value" disabled="true">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group row">
									<label for="inputEmail" class="col-md-2 control-label">Email</label>
									<div class="col-md-8">
										<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="inputEmail" disabled="true">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10 ">
								<div class="form-group row">
									<label for="inputEmail" class="col-md-3 control-label">Login Detail</label>
								</div>
							</div>
						</div>						
						<div class="form-group">
							<div class="col-md-10">
								<div class="form-group row">
									<label for="inputUser_name" class="col-md-3 control-label">User Name</label>
									<div class="col-md-3">
										<input type="text" class="form-control " id="inputUser_name" name="inputUser_name" placeholder="inputUser_name">
									</div>
									<label for="inputPassword" class="col-md-3 control-label">Password</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputPassword" name="inputPassword" placeholder="Value">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-10">
								<div class="form-group row">
									<label for="inputFirst_name" class="col-md-3 control-label">First Name</label>
									<div class="col-md-3">
										<input type="text" class="form-control " id="inputFirst_name" name="inputFirst_name" placeholder="inputFirst_name">
									</div>
									<label for="inputLast_name" class="col-md-3 control-label">Last name</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputLast_name" name="inputLast_name" placeholder="Value">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<?php echo anchor('#','FB Login','class="btn btn-primary pull-left"');?>
							<button type="button" class="btn btn-success">Account Login</button>
						</div>
					</form>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
</div>
<?php $this->load->view('footer');?>