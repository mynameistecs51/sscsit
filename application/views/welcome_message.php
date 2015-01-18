<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Student symposium โครงงานนักศึกษา">
	<meta name="author" content="">
	<title><?php echo $title;?></title>
	<!-- start bootstrap data table -->

	<!-- end data table bootstrap -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>css/animate.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>css/main.css" rel="stylesheet" type="text/css"/>
	<!-- --------------------------------------- -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/media/css/jquery.dataTables.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/examples/resources/syntax/shCore.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/examples/resources/demo.css"> -->
	<style type="text/css" class="init">
		div.dataTables_wrapper {
			margin-bottom: 3em;
		}
	</style>
	<!--<script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.js"></script>-->
	<script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.dataTables.js"></script>
	<!--<script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/examples/resources/syntax/shCore.js"></script>-->
	<!--<script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/examples/resources/demo.js"></script>-->
	<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function () {
			$('table.display').dataTable();
		});
	</script>
</head>

<body class="dt-example">
	<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php echo anchor('main','<img src="'.base_url().'images/logo.png" alt="logo"/>','class="navbar-brand"');?>
				<!-- <a class="navbar-brand" href="index.php/main"><img src="images/logo.png" alt="logo"></a> -->
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li ><?php echo anchor('main','หน้าหลัก');?></li>
					<li><?php echo anchor("main/send_page",'ส่งผลงาน');?></li>
					<li><?php echo anchor("main/status_page",'สถานะโครงงาน');?></li>
					<li><?php echo anchor("main/service_page",'service');?></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="career.html">Career</a></li>
							<li><a href="blog-item.html">Blog Single</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="registration.html">Registration</a></li>
							<li class="divider"></li>
							<li><a href="privacy.html">Privacy Policy</a></li>
							<li><a href="terms.html">Terms of Use</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a></li> 
					<li><a href="contact-us.html">Contact</a></li>
					<li>
						<?php 
						if(empty($fb_data['me'])){
							echo anchor($fb_data['loginUrl'],'Login');
						}else{
							echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" /><br/>'.$fb_data['me']['name']." ". anchor('main/logout','Logout');
						}
						?>
					</li>                    
				</ul>
			</div>
		</div>
	</header><!--/header-->

	<div class="container">
		<section>
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
							<td>ผ่านแบบมีเงื่อนไข</td>
						</tr>           
						<?php } ?> 
					</tbody>
				</table>

			</section>
		</div>


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">หน้าหลัก</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <!-- end multi select -->

    <script  type="text/javascript" src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script  type="text/javascript" src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
    <script  <type="text/javascript" src="<?php echo base_url();?>js/main.js"></script>    

</body>
</html>
