<?php 

include( get_template_directory() .'/inc/enqueue.php'  );
include( get_template_directory() .'/inc/themeone_cpt.php'  );
// Redux fremwork 
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/redux-framework/ReduxCore/framework.php' );
  }
  if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/inc/redux-framework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/inc/redux-framework/sample/sample-config.php' );
  }