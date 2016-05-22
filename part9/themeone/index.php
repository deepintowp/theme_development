<?php global $themeone; ?>
<?php get_header(); ?>
 <?php 
 
 global $themeone;
$layout = $themeone['menu-item']['enabled'];
 
if ($layout): foreach ($layout as $key=>$value) {
 
    switch($key) {
 
        case 'portfolio': get_template_part( 'tem-part/content', 'portfolio' );
        break;
 
        case 'about': get_template_part( 'tem-part/content', 'about' ); 
        break;
 
        case 'team': get_template_part( 'tem-part/content', 'team_clints' );
        break;
 
        case 'contact': get_template_part( 'tem-part/content', 'contact' );    
        break;  
		
		case 'services': get_template_part( 'tem-part/content', 'services' );    
        break;  
		
		
    }
 
}
 
endif;
 
 
 
 
 
 ?>

  <?php get_footer(); ?>