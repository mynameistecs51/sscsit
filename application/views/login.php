<?php 
if(!$fb_data['me']){     
	echo anchor($fb_data['loginUrl'],'<image src="'.base_url().'image/pict_admin/fb_login.png"/>');
}  else  {
	echo ' <img src="https://graph.facebook.com/'.$fb_data['uid'].'/picture" alt="" class="pic" />';
	echo "<br/>";
	echo $fb_data['me']['name']." "; 
            //echo anchor($fb_data['logoutUrl'],'logout');
	echo anchor($fb_data['logoutUrl'],'logout');
} 
?>