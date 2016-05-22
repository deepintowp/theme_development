<?php 

function register_team_cpt_type() {
	$post_labels = array(
		'name' 			    => 'Team',
		'singular_name' 	=> 'Teams',
		'add_new' 		    => 'Add Team',
		'add_new_item'  	=> 'Add Team',
		'edit'		        => 'Edit',
		'edit_item'	        => 'Add  Team',
		'new_item'	        => 'Add Team',
		'view' 			    => 'View  Team Member',
		'view_item' 		=> 'View  Team Member',
		'search_term'   	=> 'Search Team Member',
		'parent' 		    => 'Parent Team Member',
		'not_found' 		=> 'No Team Member found',
		'not_found_in_trash' 	=> 'No Team Member in Trash'
	);
	
	register_post_type( 'team', array( 
	'labels' => $post_labels, 
	'public' => true,
	'supports' => array( 'title'),
	'menu_icon' => 'dashicons-businessman'
	)
	


	);
	add_action( 'add_meta_boxes', 'my_contact_add_meta_box' );
	add_action('save_post', 'save_all_team_meta');
}
add_action( 'init', 'register_team_cpt_type' );


// Add meta box in tem cpt
function my_contact_add_meta_box() {
	add_meta_box( 'contact_email', 'Member Profile', 'term_member_profile_meta_callback', 'team');
}

function term_member_profile_meta_callback (){
	wp_nonce_field(basename(__FILE__), 'all_meta_nonce');
	$all_value = get_post_meta(get_the_ID());
	?>
	
	<div class="metboxes_container">
			
			<div class="single_metbox" style="margin:8px 0; padding:10px 0;     font-size: 18px; font-weight: 700; vertical-align: top; margin: 5px 7px 0 0;" >
				<label for="member_pic">Mmber Image</label>
				<input style="width: 80%;  float:right;  border: 1px solid #999;"type="text" id="member_pic" name="member_pic" value="<?php 
					if($all_value['member_pic']){
					echo $all_value['member_pic'][0];
					}
				?>" />
			</div><!-- single_metbox -->
			
			<div class="single_metbox" style="margin:8px 0; padding:10px 0;     font-size: 18px; font-weight: 700; vertical-align: top; margin: 5px 7px 0 0;" >
				<label for="member_position">Mmber Position</label>
				<input style="width: 80%;  float:right;  border: 1px solid #999;"type="text" id="member_position" name="member_position" value="<?php 
					if($all_value['member_position']){
					echo $all_value['member_position'][0];
					}
				?>" />
			</div><!-- single_metbox -->
			
			<div class="single_metbox" style="margin:8px 0; padding:10px 0;     font-size: 18px; font-weight: 700; vertical-align: top; margin: 5px 7px 0 0;" >
				<label for="member_facebook">Facebook</label>
				<input style="width: 80%; float:right;  border: 1px solid #999;"type="url" id="member_facebook" name="member_facebook" value="<?php 
					if($all_value['member_facebook']){
					echo $all_value['member_facebook'][0];
					}
				?>" />
			</div><!-- single_metbox -->
			<div class="single_metbox" style="margin:8px 0; padding:10px 0;     font-size: 18px; font-weight: 700; vertical-align: top; margin: 5px 7px 0 0;" >
				<label for="member_twitter">Twitter</label>
				<input style="width: 80%;  float:right;  border: 1px solid #999;"type="url" id="member_twitter" name="member_twitter" value="<?php 
					if($all_value['member_twitter']){
					echo $all_value['member_twitter'][0];
					}
				?>" />
			</div><!-- single_metbox -->
			<div class="single_metbox" style="margin:8px 0; padding:10px 0;     font-size: 18px; font-weight: 700; vertical-align: top; margin: 5px 7px 0 0;" >
				<label for="member_linkedin">LinkedIn</label>
				<input style="width: 80%;  float:right;  border: 1px solid #999;"type="url" id="member_linkedin" name="member_linkedin" value="<?php 
					if($all_value['member_linkedin']){
					echo $all_value['member_linkedin'][0];
					}
				?>" />
			</div><!-- single_metbox -->
			
			
	</div>
	
	<?php
}

function save_all_team_meta(){
		$autosave = wp_is_post_autosave(get_the_ID());
		$revision = wp_is_post_revision(get_the_ID());
		if($autosave || $revision ){
		return;
		}
		if(!wp_verify_nonce($_POST['all_meta_nonce'], basename(__FILE__))){
		return;
		}
		if(isset($_POST['member_pic'])){
		update_post_meta(get_the_ID(), 'member_pic', sanitize_text_field($_POST['member_pic']));
		}
		if(isset($_POST['member_position'])){
		update_post_meta(get_the_ID(), 'member_position', sanitize_text_field($_POST['member_position']));
		}
		if(isset($_POST['member_facebook'])){
		update_post_meta(get_the_ID(), 'member_facebook', sanitize_text_field($_POST['member_facebook']));
		}
		if(isset($_POST['member_twitter'])){
		update_post_meta(get_the_ID(), 'member_twitter', sanitize_text_field($_POST['member_twitter']));
		}
		if(isset($_POST['member_linkedin'])){
		update_post_meta(get_the_ID(), 'member_linkedin', sanitize_text_field($_POST['member_linkedin']));
		}
		
	
	
	
	
}
