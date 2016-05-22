<?php 

/*
*This template is for enueue style and scripts.
*/

/*

 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

   

	
	
	 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
*/

function themeone_style_n_scripts() {
	// Styles
    wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.0', 'all'  );
    wp_enqueue_style( 'agency.css', get_template_directory_uri() . '/css/agency.css', array(), '1.0', 'all'  );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all'  );
    wp_enqueue_style( 'montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700', array(), '1.0', 'all'  );
    wp_enqueue_style( 'Kaushan', 'https://fonts.googleapis.com/css?family=Kaushan+Script', array(), '1.0', 'all'  );
    wp_enqueue_style( 'droid', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic', array(), '1.0', 'all'  );
    wp_enqueue_style( 'roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700', array(), '1.0', 'all'  );
	
	
	
	
	//scripts 
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.0.0', true );
    
    wp_enqueue_script( 'esing', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), '3.0.0', true );
	
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array('jquery'), '3.0.0', true );
	wp_enqueue_script( 'cbpAnimatedHeader', get_template_directory_uri() . '/js/cbpAnimatedHeader.js', array('jquery'), '3.0.0', true );
	wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'), '3.0.0', true );
	wp_enqueue_script( 'contact_me.js', get_template_directory_uri() . '/js/contact_me.js', array('jquery'), '3.0.0', true );
	wp_enqueue_script( 'agency', get_template_directory_uri() . '/js/agency.js', array('jquery'), '3.0.0', true );
	
}
add_action( 'wp_enqueue_scripts', 'themeone_style_n_scripts' );
// IE Support

function themeone_ie_support(){
	?>
	 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
}
add_action('wp_head', 'themeone_ie_support');




