<?php $this->load->view('header');?>

<?php 
if(!$fb_data['me']){     
	echo anchor($fb_data['loginUrl'],'<button >login</button>');
	echo "<br/>";
	print_r($fb_data);
}  else  {
	echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" />';
	echo "<br/>";
	echo $fb_data['me']['name']." "; 
	echo anchor($fb_data['logoutUrl'],'logout');
                 //echo anchor('sci_con/logout','logout');
	print_r($fb_data);

} 
?>
<?php $this->load->view('footer');?>