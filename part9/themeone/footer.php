  <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Subhasish 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
	<?php 
	global $themeone;
$layout = $themeone['menu-item']['enabled'];
	//var_dump($layout);
	if(array_key_exists ( 'portfolio' , $layout )):
		 
		 $the_query = new WP_Query( array('post_type'=>'portfolio') );
				
				// The Loop
				if ( $the_query->have_posts() ) :
					
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
		 ?>
		 <div class="portfolio-modal modal fade" id="portfolioModal<?php  echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php echo get_the_title(); ?></h2>
                            <p class="item-intro text-muted"><?php echo get_post_meta( get_the_ID(), 'port_des', true ); ?></p>
							<?php if ( has_post_thumbnail() ) { ?>
                            <img class="img-responsive img-centered" src="<?php  the_post_thumbnail_url( 'large' );?>" alt="">
							
							<?php } ?>
                            <p><?php echo get_the_content(); ?></p>
                            <ul class="list-inline">
                                <li>Date: <?php the_date('Y-m-d'); ?></li>
                                <li>Client: Round Icons</li>
                                <li>Category: <?php $term_list = wp_get_post_terms(get_the_ID(), 'portfolio-cat', array("fields" => "all"));
									foreach($term_list as $term_single) {
									echo $term_single->name; //do something here 
									}
						
						?></li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
				<?php endwhile; endif;
      
		
		?>
	
	
    
	<?php endif; ?>


   <?php wp_footer(); ?>
	
</body>

</html>
