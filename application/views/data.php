<?php $this->load->view('admin/header');?>
<div id="page-wrapper" style="margin-left:0px;">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
				ตารางจัดการ สิทธิ์กรรมการการ
			</h1>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<!-- /.row -->
	<div class="row">
		<div class="col-lg-3 col-md-6">
			<a href="admin_status_paper">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-file-text fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo count($get_paper);?></div>
								<div>โปรเจ็คทั้งหมด</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-6">
			<a href="#">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-share-square fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo count($get_count_paper_committee);?></div>
								<div>ส่งให้กรรมการแล้ว</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-6">
			<a href="#">
				<div class="panel panel-yellow">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-shopping-cart fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo  count($get_paper) - count($get_count_paper_committee);?></div>
								<div>โครงงานที่ต้องส่ง</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
			</a>
		</div>
		<div class="col-lg-3 col-md-6">
			<a href="#">
				<div class="panel panel-red">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-support fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo count($count_paper_check);?></div>
								<div>โครงงานที่ตรวจแล้ว</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</div>
			</a>
		</div>
	</div>  <!-- /.row -->
	<hr/>
	<div class="container">
		<section >

			<table id="" class="display" cellspacing="0" width="100%">
				<thead>
					<th>ที่</th>
					<th>ชื่อ</th>
					<th>สกุล</th>
					<th>อีเมลล์</th>
					<th>เพศ</th>
					<th>สถานะกรรมการ</th>
				</thead>
				<tfoot>
					<th>ที่</th>
					<th>ชื่อ</th>
					<th>สกุล</th>
					<th>อีเมลล์</th>
					<th>เพศ</th>
					<th>สถานะกรรมการ</th>
				</tfoot>
				<tbody>
					<?php
					$number =  count($get_users);
					foreach ($get_users as $key_users => $row_users) {
						$user_status = ($row_users->user_status === 'committee'? "checked":"");

						?>
						<tr>
							<td><?php echo $number-- ;?></td>
							<td><?php echo $row_users->user_first_name;?></td>
							<td><?php echo $row_users->user_last_name;?></td>
							<td><?php echo $row_users->user_email;?></td>
							<td><?php echo $row_users->user_gender;?></td>
							<td>
								<form class="check_status" name="check_status">

									<input type="hidden" name="user_id" id="user_id" value="<?php echo $row_users->user_facebook_id;?>"/>
									<input type="hidden" name="user" id="user" value="<?php echo $row_users->user_first_name;?>"/>
									<input type="checkbox" id="my-checkbox" name="my-checkbox"  <?php echo $user_status;?> />
								</form>
							</td> 
						</tr>
						<?php }  ?> 
					</tbody>
				</table>
			</section>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("[name = 'my-checkbox']").bootstrapSwitch({ onSwitchChange : function(e,s){
				if(s){
					$.ajax({
						url: "<?php echo site_url('main/manage_status');?>",
						type: "POST",
						data: $(this).closest('form').serialize(),
					}).success(function(data){
						alert("อัพเดทสถานะแล้ว");						
										//alert(data);
									});
				}else{
					$.ajax({
						url: "<?php echo site_url('main/manage_status');?>",
						type: "POST",
						data: $(this).closest('form').serialize(),
					}).success(function(data){
						alert("ยกเลิกสถานะแล้ว");
											// alert(data);
										});					
				}
			}
		});
		});
	</script>
	<?php $this->load->view("admin/footer");?>
