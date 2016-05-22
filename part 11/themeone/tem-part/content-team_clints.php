<?php global $themeone; ?>
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php if( $themeone['team-sec-title']):  echo $themeone['team-sec-title'];  endif; ?></h2>
                    <h3 class="section-subheading text-muted"><?php if( $themeone['team-sec-subtitle']):  echo $themeone['team-sec-subtitle'];  endif; ?></h3>
                </div>
            </div>
            <div class="row">
			<?php 
				$the_query = new WP_Query(array('post_type'=> 'team') );

				if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
				$the_query->the_post();
			?>
			
			
                <div class="col-sm-4">
                    <div class=" wow zoomInUp team-member">
						
					
					<?php if(get_post_meta(get_the_id(), 'member_pic', true )): ?>
                        <img src="<?php echo get_post_meta(get_the_id(), 'member_pic', true );  ?>" class="img-responsive img-circle" alt="">
						<?php endif; ?>
						
                        <h4><?php echo get_the_title(); ?></h4>
                        <p class="text-muted">
						<?php
						if(get_post_meta(get_the_id(), 'member_position', true )){
						echo get_post_meta(get_the_id(), 'member_position', true );
						}
						
						?>
						</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="<?php
						if(get_post_meta(get_the_id(), 'member_twitter', true )){
						echo get_post_meta(get_the_id(), 'member_twitter', true );
						}
						
						?>"><i class="fa fa-twitter"></i></a>
                            </li>
							
                            <li><a href="<?php
						if(get_post_meta(get_the_id(), 'member_facebook', true )){
						echo get_post_meta(get_the_id(), 'member_facebook', true );
						}
						
						?>"><i class="fa fa-facebook"></i></a>
                            </li>
							
                            <li><a href="<?php
						if(get_post_meta(get_the_id(), 'member_linkedin', true )){
						echo get_post_meta(get_the_id(), 'member_linkedin', true );
						}
						
						?>"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
				<?php } }else{?>
					<h1>No team member found.</h1>
				<?php }?>
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/team/2.jpg" class="img-responsive img-circle" alt="">
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Diana Pertersen</h4>
                        <p class="text-muted">Lead Developer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> -->
				
				
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"><?php if( $themeone['team-footer']):  echo $themeone['team-footer'];  endif; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri () ;  ?> /img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>