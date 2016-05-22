<?php 
include( get_template_directory() .'/inc/theme_support.php'  );
include( get_template_directory() .'/inc/enqueue.php'  );
include( get_template_directory() .'/inc/themeone_cpt.php'  );

// Redux fremwork 
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' );
  }
  if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/redux-framework/sample/sample-config.php' );
  }
  
  // contact form handle
  function themeone_save_and_validatecontact_form (){
	 $data = $_POST['data'];
	$security = $_POST['security'];
	$honeypot = $_POST['honeypot'];
	if(!empty($honeypot)){
		wp_send_json_error('HONEY POT CHECK FAILED');
		return;
	}
	if(!check_ajax_referer('submitted-data','security')){
		wp_send_json_error('Security CHECK FAILED');
		return;
	}
	if(empty($data['email'])){
		//wp_send_json_error('HONEY POT CHECK FAILED');
		echo 'enter email';
		return;
	}
	if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
  echo 'Invalid email format'; 
  return;
}
	if(empty($data['name'])){
		//wp_send_json_error('HONEY POT CHECK FAILED');
		echo 'enter name';
		return;
	}
	if(empty($data['phone'])){
		//wp_send_json_error('HONEY POT CHECK FAILED');
		echo 'enter phone';
		return;
	}
	$test = 0714556260;

if (!preg_match('/^0\d{9}$/', $data['phone']) ) {
	  echo 'Phone number not valid';
	  return;
} 
	if(empty($data['message'])){
		//wp_send_json_error('HONEY POT CHECK FAILED');
		echo 'enter message';
		return;
	}
	
	
	
	
	
	
	
	$pstdata =  array(
		'post_title' =>$data['name'],
		
		'post_status' => 'publish',
		'post_type' => 'contact'
		
		);
	$post_id = wp_insert_post($pstdata, true);
		
	if($post_id){
	update_post_meta($post_id, 'contact_email',  $data['email'] );
	update_post_meta($post_id, 'contact_phone',  $data['phone'] );
	update_post_meta($post_id, 'contact_msg',  $data['message'] );
	
	
	}
	// mail it back to user 
	 $user_subject = 'Thank You For Cantacting Us.';
	 $user_message = 'Thank You'. $data['name'].' for cantacting us.';
	mail($data['email'], $user_subject, $user_message);
	
	// mail to admin
	 $admin_subject = $data['name'];
	 $admin_message = 'Name: '. $data['name'].'</br>'.'Email: '. $data['email'].'</br>'.'Name: '. $data['phone'].'</br>'.'Message: '. $data['message'].'</br>'.'IP: '. $_SERVER['REMOTE_ADDR'];
	mail($admin->user_email, $user_subject,  $admin_message);
	
	
	echo 'thank you form contact. We will  get back to you sonn';
	  
	  die();
  }
  add_action('wp_ajax_nopriv_our_action_function', 'themeone_save_and_validatecontact_form');
add_action('wp_ajax_our_action_function', 'themeone_save_and_validatecontact_form');












