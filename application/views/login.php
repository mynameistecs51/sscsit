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

				<form class="form-horizontal col-sm-12" role="form">
					<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">FB ID</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						</div>
					</div>
					<div class="form-group ">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" placeholder="Text input" width="120px;">
						</div>
					</div>
					<div class="form-group col-sm-16">
						<label for="inputText" class="col-sm-2 control-label">Test</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="inputText" placeholder="Text input">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
								<label>
									<input type="checkbox"> Remember me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Sign in</button>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary pull-left" data-dismiss="modal">FB Login</button>
				<button type="button" class="btn btn-success">Account Login</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<?php $this->load->view('footer');?>