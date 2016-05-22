
<?php global $themeone; ?>
   <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php if( $themeone['about-sec-title']):  echo $themeone['about-sec-title'];  endif; ?></h2>
                    <h3 class="section-subheading text-muted"><?php if( $themeone['abou-sec-subtitle']):  echo $themeone['abou-sec-subtitle'];  endif; ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
					
					<?php if( !empty($themeone['all-about']) ):
						$i = 1;
				foreach($themeone['all-about'] as $single_about):
		
			?>
			
                        <li class=" <?php if ($i % 2 == 0) { echo 'wow slideInRight  timeline-inverted'; }else{ echo 'wow slideInLeft';} ?>"  >
                            <div class="timeline-image">
								
								 <img class="img-circle img-responsive" src="<?php if($single_about['image']):  echo $single_about['image'];  endif; ?>" alt="">
							
							</div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4><?php  if($single_about['url']):  echo $single_about['url'];  endif; ?></h4>
                                    <h4 class="subheading"><?php if($single_about['title']):  echo $single_about['title'];  endif; ?></h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"><?php if($single_about['description']):  echo $single_about['description'];  endif; ?></p>
                                </div>
                            </div>
                        </li>
						
					<?php $i++; endforeach; endif; ?>
					<li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                       <!--  <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo get_template_directory_uri () ;  ?> /img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo get_template_directory_uri () ;  ?> /img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?php echo get_template_directory_uri () ;  ?> /img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
						 -->
						
                    </ul>
                </div>
            </div>
        </div>
    </section>