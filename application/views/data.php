<?php $this->load->view('header');?>
<div class="container">
	<section >
		
		<h1>DataTables example <span>Multiple tables</span></h1>

		<table id="" class="display" cellspacing="0" width="100%">
			<thead>
				<th>ที่</th>
				<th>โปรเจ็ค</th>
				<th>ประเภทโครงงาน</th>
				<th>หัวหน้าโครงงาน</th>
				<th>เวลาที่ส่ง</th>
				<th>ผู้ส่ง</th>
				<th>สถานการตรวจ</th>
			</thead>
			<tfoot>
				<th>ที่</th>
				<th>โปรเจ็ค</th>
				<th>ประเภทโครงงาน</th>
				<th>หัวหน้าโครงงาน</th>
				<th>เวลาที่ส่ง</th>
				<th>ผู้ส่ง</th>
				<th>สถานการตรวจ</th>
			</tfoot>
			<tbody>
				<?php
				$number =  count($get_paper);
				foreach ($get_paper as $key_paper => $row_paper) {
					?>                  
					<tr>
						<td><?php echo $number-- ;?></td>
						<td><?php echo $row_paper->paper_inputProjectName_TH;?></td>
						<td><?php echo $row_paper->group_name;?></td>
						<td><?php echo $row_paper->paper_inputName1;?></td>
						<td><?php echo $row_paper->paper_date;?></td>
						<td><?php echo $row_paper->user_first_name." ".$row_paper->user_last_name;?></td>
						<td><input type="checkbox" id="my-checkbox" name="my-checkbox" onclick="checked()" ></td>  <!-- ถ้าต้องการให้สถานะเป็น on เปิด checked -->
					</tr>           
					<?php } ?> 
				</tbody>
			</table>
		</section>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("[name='my-checkbox']").bootstrapSwitch();
			
		});
		function checked(){
			
				
				alert('OK');
			
		}
	</script>
	<?php $this->load->view('footer');?>