<?php $this->load->view('header');?>
<div class="container">
	<section >
		
		<h1>ตารางจัดการ สิทธิ์กรรมการการ</h1>

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
							 <?php echo form_open('main/test_checkbox',array('id' => "check_status",'name' => "check_status"));?>
								<input type="hidden" name="user_id" id="user_id" value="<?php echo $row_users->user_facebook_id;?>">
								<input type="checkbox" id="my-checkbox" name="my-checkbox"  <?php echo $user_status;?> />								
							</form>
						</td> 
					</tr>      

					<?php }  ?> 
				</tbody>
			</table>
		</section>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("[name='my-checkbox']").bootstrapSwitch({
				onSwitchChange : function(e,s){
					if(s){
						$.ajax({
							url: '<?php echo site_url("main/test_checkbox"); ?>',
							type: 'POST',
							//data: {'value_checked' : "committee",'user_id':$('#user_id').val()},
							data:$('#check_status').serialize(),
							//dataType:"json",
						}).success(function(data){
							alert(data);
							//console.log(data +' this is return');
						});
					}else{
						$.ajax({
							url: '<?php echo site_url("main/test_checkbox"); ?>',
							type: 'POST',
							//data: {'value_checked' :"user", 'user_id':$('#user_id').val()},
							 data:$('#check_status').serialize(),
							//dataType:"json",
						}).success(function(data){
							alert(data);
							//console.log(data +' this is return');
						});
					}
					
				}
			});

		});

	</script>
	<?php $this->load->view('footer');?>