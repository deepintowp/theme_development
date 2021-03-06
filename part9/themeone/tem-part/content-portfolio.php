
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
			<?php 
									// The Query
				$the_query = new WP_Query( array('post_type'=>'portfolio') );
				
				// The Loop
				if ( $the_query->have_posts() ) {
					
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					
			?>
			
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal<?php echo get_the_ID(); ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
						<?php if ( has_post_thumbnail() ) { ?>
                        <img src="<?php  the_post_thumbnail_url( 'profolio-size' );  ?>" class="img-responsive" alt="">
						<?php } ?>
					</a>
                    <div class="portfolio-caption">
                        <h4><?php  if(get_post_meta(get_the_ID(), 'short_title', true)): echo get_post_meta(get_the_ID(), 'short_title', true);  endif; ?></h4>
                        <p class="text-muted">
						<?php $term_list = wp_get_post_terms(get_the_ID(), 'portfolio-cat', array("fields" => "all"));
									foreach($term_list as $term_single) {
									echo $term_single->name; //do something here 
									}
						
						?>					
						</p>
                    </div>
                </div>
				
				<?php  }}else{?>
				<h1>No Portfolio found</h1>
				<?php  } wp_reset_postdata(); ?>
                <!-- <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/portfolio/startup-framework.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Startup Framework</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/portfolio/treehouse.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Treehouse</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/portfolio/golden.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Golden</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Escape</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/portfolio/dreams.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Dreams</h4>
                        <p class="text-muted">Website Design</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
	<?php var_dump(get_term_by( 'id', get_the_ID(), 'portfolio-cat' )); ?>