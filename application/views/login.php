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
									<label for="inputKey" class="col-md-1 control-label">Key</label>
									<div class="col-md-3">
										<input type="text" class="form-control " id="inputKey" placeholder="Key">
									</div>
									<label for="inputValue" class="col-md-1 control-label">Value</label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="inputValue" placeholder="Value">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group row">
									<label for="inputKey" class="col-md-1 control-label">Key</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputKey" placeholder="Key">
									</div>
									<label for="inputValue" class="col-md-1 control-label">Value</label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="inputValue" placeholder="Value">
									</div>
								</div>
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