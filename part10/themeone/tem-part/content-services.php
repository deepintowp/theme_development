<?php global $themeone; ?>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php if( $themeone['services-sec-title']):  echo $themeone['services-sec-title'];  endif; ?></h2>
                    <h3 class="section-subheading text-muted"><?php if( $themeone['services-sec-subtitle']):  echo $themeone['services-sec-subtitle'];  endif; ?></h3>
                </div>
            </div>
            <div class="row text-center">
			
			<?php if( !empty($themeone['all-service']) ):
						
				foreach($themeone['all-service'] as $single_service):
		
			?>
			
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa <?php if($single_service['url']):  echo $single_service['url'];  endif; ?> fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"><?php if($single_service['title']):  echo $single_service['title'];  endif; ?></h4>
                    <p class="text-muted"><?php if($single_service['description']):  echo $single_service['description'];  endif; ?></p>
                </div>
			<?php endforeach; endif; ?>
			
            </div>
        </div>
    </section>