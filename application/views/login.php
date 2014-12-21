<?php $this->load->view('header');?>
<script type="text/javascript">
	$(window).load(function(){
		$('#myModal').modal('show');
	});
</script>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  mymodal
</button>
<!-- <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" > -->
<div id="myModal"  class="modal fade bs-example-modal-lg" tabindex="1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Modal title</h4>
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
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php $this->load->view('footer');?>