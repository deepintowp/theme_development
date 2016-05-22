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
				<?php if($all_value['member_pic']):?>
				<div class="img-con" >
				<img src="<?php echo $all_value['member_pic'][0]; ?>" alt="" style="display:block; margin:0 auto;" />
				</div>
				<?php else:?>
					<div class="img-con"> </div>
				<?php endif;?>
				
				
				
				<input type="hidden" id="member_pic" name="member_pic" value="<?php 
					if($all_value['member_pic']){
					echo $all_value['member_pic'][0];
					}
				?>" />
				<div class="" style="margin:4px 0; display:block; border:none; text-align:center;" >
				
					<input type="button" id="add_mem_pic" class="button button-primary button-large add_mem_pic" value="Add Image" />
					<input type="button" id="remove_mem_pic" class="button button-primary button-large remove_mem_pic" value="Remove Image" />
				</div>
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

// portfolio cpt 

function theme_one_portfolio_cpt() {

	$singular = __( 'Portfolio' );
	$plural = __( 'Portfolio' );
        //Used for the rewrite slug below.
        $plural_slug = str_replace( ' ', '_', $plural );

        //Setup all the labels to accurately reflect this post type.
	$labels = array(
		'name' 					=> $plural,
		'singular_name' 		=> $singular,
		'add_new' 				=> 'Add New',
		'add_new_item' 			=> 'Add New ' . $singular,
		'edit'		        	=> 'Edit',
		'edit_item'	        	=> 'Edit ' . $singular,
		'new_item'	        	=> 'New ' . $singular,
		'view' 					=> 'View ' . $singular,
		'view_item' 			=> 'View ' . $singular,
		'search_term'   		=> 'Search ' . $plural,
		'parent' 				=> 'Parent ' . $singular,
		'not_found' 			=> 'No ' . $plural .' found',
		'not_found_in_trash' 	=> 'No ' . $plural .' in Trash'
	);

        //Define all the arguments for this post type.
	$args = array(
		'labels' 			  => $labels,
		'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-format-gallery',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => true,
        'query_var'           => true,
        'capability_type'     => 'page',
        'map_meta_cap'        => true,
        // 'capabilities' => array(),
        'rewrite'             => array( 
        	'slug' => strtolower( $plural_slug ),
        	'with_front' => true,
        	'pages' => true,
        	'feeds' => false,

        ),
        'supports'            => array( 
        	'title', 'editor', 'thumbnail'
        )
	);

        //Create the post type using the above two varaiables.
	register_post_type( 'portfolio', $args);
	register_taxonomy(
		'portfolio-cat',
		'portfolio',
		array(
			'label' => __( 'Category' ),
			'rewrite' => array( 'slug' => 'genre' ),
			'hierarchical' => true,
		)
	);
	
	add_action( 'add_meta_boxes', 'protfolio_add_metabox' );
	add_action('save_post', 'save_portfolio_all_team_meta');
	
}
add_action( 'init', 'theme_one_portfolio_cpt', 999 );


// Add meta box in tem cpt
function protfolio_add_metabox() {
	add_meta_box( 'portfoli-add-meta', 'Profolio Information', 'portfolio_add_meta_callback', 'portfolio');
}

function portfolio_add_meta_callback (){
	wp_nonce_field(basename(__FILE__), 'portfolio_none_meta');
	$all_value = get_post_meta(get_the_ID());
	?>
	
	<div class="metboxes_container">
			
			
			
			<div class="single_metbox" style="margin:8px 0; padding:10px 0;     font-size: 18px; font-weight: 700; vertical-align: top; margin: 5px 7px 0 0;" >
				<label for="short_title">Short Title</label>
				<input style="width: 80%;  float:right;  border: 1px solid #999;"type="text" id="short_title" name="short_title" value="<?php 
					if($all_value['short_title']){
					echo $all_value['short_title'][0];
					}
				?>" />
			</div><!-- single_metbox -->
			
			<div class="single_metbox" style="margin:8px 0; padding:10px 0;     font-size: 18px; font-weight: 700; vertical-align: top; margin: 5px 7px 0 0;" >
				<label for="port_des">Description</label>
				<input style="width: 80%; float:right;  border: 1px solid #999;"type="text" id="port_des" name="port_des" value="<?php 
					if($all_value['port_des']){
					echo $all_value['port_des'][0];
					}
				?>" />
			
			
	</div>
	
	<?php
}

function save_portfolio_all_team_meta(){
		$autosave = wp_is_post_autosave(get_the_ID());
		$revision = wp_is_post_revision(get_the_ID());
		if($autosave || $revision ){
		return;
		}
		if(!wp_verify_nonce($_POST['portfolio_none_meta'], basename(__FILE__))){
		return;
		}
		if(isset($_POST['short_title'])){
		update_post_meta(get_the_ID(), 'short_title', sanitize_text_field($_POST['short_title']));
		}
		if(isset($_POST['port_des'])){
		update_post_meta(get_the_ID(), 'port_des', sanitize_text_field($_POST['port_des']));
		}
		
		
	
	
	
	
}



















