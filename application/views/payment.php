<?php $this->load->view('header');?>

<script type="text/javascript">
/**
 * show picture upload payment
 */
 function PreviewImage() {

 	var oFReader = new FileReader();

 	oFReader.readAsDataURL(document.getElementById("file_payment").files[0]);

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
				</div> <!-- /.<div class="text-center">-->
			</div>	<!-- /. end <div class="row"> -->
			<!-- edit form column -->

			<div class="col-md-9 personal-info">
				<!-- <form class="form-horizontal" role="form" action="send_pament"> -->

				<?php 
				echo form_open_multipart('main/insert_payment','class="form-horizontal" role="form"');
				//echo $get_payment[0]->payment_id;
				//print_r($get_payment);
				?>
				<div class="form-group">
					<label class="col-lg-3 control-label">FB ID:</label>
					<div class="col-lg-3">
						<input class="form-control" type="text" name="fb_id" value="<?php echo $fb_data['uid'];?>" readonly/>
						<!-- <input type="hidden" name="f_id" value="<?php echo $profile_row->user_facebook_id;?>"> -->
					</div>
					<label class="col-lg-2 control-label ">FB NAME:</label>
					<div class="col-lg-3">
						<input class="form-control" type="text" name="fb_name" value="<?php echo $fb_data['me']['name'];?>" disabled="dissabled"/>
					</div>
				</div>
				<div class="form-group"></div> <!--- เว้นวรรค -->
				<div class="form-group">
					<label class="col-lg-3 control-label">วันที่แจ้ง:</label>
					<div class="col-lg-8">
						<div class="input-append date datepicker" >
							<input size="16" type="text"  class="form-control " name="send_date" value="<?php echo (!empty($get_payment) ? $get_payment[0]->send_date : '');?>" readonly/>
							<span class="add-on">
								<i class="icon-th"></i>
							</span>
						</div>
						<!-- </div> -->
						<script type="text/javascript">
							$(function () {
								$('.datepicker').datepicker({
									language:'th',
									format: "dd-mm-yyyy",
								});
							});
						</script>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">ธนาคาร:</label>
					<div class="col-lg-8">
						<?php //print_r($get_payment);?>
						<select class="selectpicker show-tick form-control "  data-live-search="true"  name="select_bank">
							<?php 

							foreach ($data_bank as $bank_row) {
								$selected =  (!empty($get_payment)?($get_payment[0]->bank_id === $bank_row->bank_id?"selected":''):'');
								echo '<option value="'.$bank_row->bank_id.'" '.$selected.' >'.$bank_row->bank_name.'</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">สาขา:</label>
					<div class="col-lg-8">
						<input class="form-control" type="text" name="branch_bank" value="<?php echo (!empty($get_payment) ? $get_payment[0]->branch_bank : '');?> "/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">จำนวนเงิน:</label>
					<div class="col-lg-8">
						<input class="form-control" type="text" name="amount" value="<?php echo (!empty($get_payment) ? $get_payment[0]->amount : '');?>"/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Payment:</label>
					<div class="col-lg-8">
						<img id="show_pic" src="<?php echo (!empty($get_payment)?base_url().'images/file_payment/'.$get_payment[0]->payment_fileName : base_url().'images/no-image.jpg');?>" alt="" style="width:130px; height:130px" /><br/>
						<input type="file" name="file_payment" id="file_payment"  size="20" onchange="PreviewImage();" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"></label>
					<div class="col-md-8">
						<input type="submit" class="btn btn-primary" value="Save">
						<span></span>
						<input type="reset" class="btn btn-default" value="Cancel">
					</div>
				</div>
				<!-- </form> -->
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	<hr/>
</section>
<?php $this->load->view('footer');?>