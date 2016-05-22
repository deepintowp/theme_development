<?php global $themeone; ?>

<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="title" content="<?php bloginfo('title'); ?>">
	<?php $user = get_user_by( 'id', 1 ); ?>
    <meta name="author" content="<?php echo $user->first_name . ' ' . $user->last_name; ?>">

    <title><?php if(!is_home()): bloginfo('name'); echo ' | ';  wp_title();  else: bloginfo('name'); endif; ?></title>

   
	<?php  wp_head(); ?>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><?php bloginfo('title'); ?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					
                    
					<?php 
					//var_dump($themeone['menu-item']);
					
					$layout = $themeone['menu-item']['enabled'];
					 
					if ($layout): foreach ($layout as $key=>$value) {
					 
						switch($key) {
					 
							case 'portfolio': 
							echo '<li>
								<a class="page-scroll" href="#portfolio">Portfolio</a>
							</li>';
							break;
						  case 'about': 
						  echo '<li>
									<a class="page-scroll" href="#about">About</a>
								</li>';
								break;
							case 'team': 
							echo '<li>
									<a class="page-scroll" href="#team">Team</a>
								</li>';
								break;
							case 'contact':
							echo '<li>
									<a class="page-scroll" href="#contact">Contact</a>
								</li>';
								break;
						  case 'services': 
						  echo '<li>
									<a class="page-scroll" href="#services">Services</a>
								</li>';
								break;
						  
					 
						}
					 
					}
					 
					endif;
					
					?>
                    <!-- 
					<li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
					
					<li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li> -->
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header <?php if($themeone['banner-img']): ?> style="<?php echo 'background-image: url('.$themeone['banner-img']['url'].')'; ?>"  <?php endif; ?> >
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in"><?php if($themeone['banner-welcome-title']):  echo $themeone['banner-welcome-title'];  endif;  ?></div>
                <div class="intro-heading"><?php if($themeone['banner-title']):  echo $themeone['banner-title'];  endif;  ?></div>
                <a href="<?php if($themeone['button-url']):  echo $themeone['button-url'];  endif;  ?>" class="page-scroll btn btn-xl"><?php if($themeone['banner-button']):  echo $themeone['banner-button'];  endif;  ?></a>
            </div>
        </div>
    </header>

