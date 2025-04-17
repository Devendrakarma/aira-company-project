<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aira
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--css links-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/css/tempusdominus-bootstrap-4.min.css" type="text/css" /> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<link href="<?php echo get_stylesheet_directory_uri();?>/assets/css/custom.min.css" rel="stylesheet" type="text/css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header position-fixed w-100">
    <div class="headerTop text-center d-md-block d-none">
        <div class="container">
			<?php 
			$topText = get_field('top_section_text_section', "option"); 
			$logoUrl = get_field('header_logo_section', "option"); 
			$showhideLanguage = get_field('show_language_header', "option"); 
			$showhideLogin = get_field('show_login_button_top_header', "option"); 
			$showhideGetStarted = get_field('show_hide_get_started_button', "option"); 
			$getStartedText = get_field('show_get_started_button_text', "option"); 
			?>
            <p class="mb-0"><?php if($topText!=''){ ?>✨ <?php echo $topText; } ?></p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container container-1760">
            <button class="navbar-toggler order-3" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand order-1" href="<?php echo get_site_url(); ?>/">
                <img src="<?php echo $logoUrl;?>" class="img-fluid" alt="header-logo" />
            </a>
            <div class="collapse navbar-collapse order-lg-2 order-3 justify-content-center" id="navbarTogglerDemo01">
				
                <ul class="navbar-nav mb-2 mb-lg-0">
					<?php 
					if( have_rows('top_header_menu','option') ):
						$firstLevelObjectId = '';
						while( have_rows('top_header_menu','option') ) : the_row();
						if(get_sub_field('is_sub_menu')=='1' && get_sub_field('is_mega_menu') != '1')
						{
							$firstLevelObjectId = get_sub_field('first_level_menu');?>
							<li class="nav-item dropdown dropdown-solution">
								<a class="nav-link" data-bs-toggle="dropdown" aria-current="page" href="<?php echo get_the_permalink($firstLevelObjectId);?>"> <?php echo get_the_title($firstLevelObjectId);?></a>
								<div class="dropdown-menu">
									<div class="row">
										<div class="col-md-12">
											
											<ul class="list-unstyled">
												<?php 
												if(function_exists('top_level_child')){
													$firstChildLevel = top_level_child($firstLevelObjectId);
													if(!empty($firstChildLevel))
													{ 
														if ($firstChildLevel->have_posts()) :
															while ($firstChildLevel->have_posts()) : $firstChildLevel->the_post();
																$firstlevelIds = get_the_ID();?>
																<li class="dropdownItem">
																	<a href="<?php echo get_the_permalink($firstlevelIds);?>">
																		<span class="dropdownItem_icon">
																			<em class="<?php echo get_field('top_menu_icon_class');?>"></em>
																		</span>
																		<span class="dropdownItem_text"> <?php echo get_the_title($firstlevelIds);?></span>
																	</a>
																</li>
														<?php 
															endwhile;
															wp_reset_postdata();
														else :
															echo '';
														endif;
													}
												}
												?>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<?php
						}
						else
						{ 
							$megamenuid = get_sub_field('first_level_menu');?>
							<li class="nav-item dropdown dropdown-product">
								<a class="nav-link" data-bs-toggle="dropdown" aria-current="page" href="<?php echo get_the_permalink($megamenuid);?>"> <?php echo get_the_title($megamenuid);?></a>
								<div class="dropdown-menu">
									<div class="row">
										<?php 
										if(function_exists('get_child_pages_by_id'))
										{
											$megaMenufirstChild = get_child_pages_by_id($megamenuid); 
											if(!empty($megaMenufirstChild))
											{
												if ($megaMenufirstChild->have_posts()) :
													$megamenucount = 1;
													while ($megaMenufirstChild->have_posts()) : $megaMenufirstChild->the_post();
														$megamenuchildIds = get_the_ID();
														$megamenuchildtitle = get_the_title($megamenuchildIds);
														if($megamenucount == '1' || $megamenucount =='2'){
															$bordercolclass = "col-md-5 border-right";
														}
														else
														{
															$bordercolclass = "col-md-2";
														}?>
														<div class="<?php echo $bordercolclass;?>">
															<h3> <?php echo get_the_title($megamenuchildIds);?> </h3>
															<div class="row">
																<div class="col-md-12">
																	<?php 
																	$megaMenulastChild = get_child_pages_by_id($megamenuchildIds); 
																	if(!empty($megaMenulastChild))
																	{ ?>
																		<ul class="list-unstyled">
																			<?php 
																			if ($megaMenulastChild->have_posts()) :
																				
																				while ($megaMenulastChild->have_posts()) : $megaMenulastChild->the_post();
																					$megamenuchildLastIds = get_the_ID(); ?>
																					<li class="dropdownItem">
																						<a href="<?php echo get_the_permalink($megamenuchildLastIds);?>">
																							<span class="dropdownItem_icon">
																								<em class="<?php echo get_field('top_menu_icon_class');?>"></em>
																							</span>
																							<span class="dropdownItem_text"> <?php echo get_the_title($megamenuchildLastIds);?></span>
																						</a>
																					</li>
																				<?php 
																				endwhile;
																					wp_reset_postdata();
																			else :
																				echo '';
																			endif; ?>	
																		</ul>
																		<?php 
																	} ?>
																</div>
															</div>
														</div>
											
														
													<?php 
													$megamenucount++;
													endwhile;
															wp_reset_postdata();
												else :
													echo '';
												endif;
											}
										}
										?>
									</div>
								</div>

							</li>
                    
							<?php 
						}
					endwhile; ?>
					<?php endif; ?>
					
                </ul>
            </div>
            <div class="headerBtn order-2 order-lg-3 d-flex align-items-center ms-auto me-lg-0 me-3">
				<?php 
				if($showhideLanguage=='1')
				{
					?>
					<div class="flagDropdown dropdown">
						<button
							class="btn btn-language btn-md btn-outline-warning btn-rounded font-bd justify-content-center"
							type="button" data-bs-toggle="dropdown" aria-expanded="false">
							<span id="selected-flag"><img src="<?php echo IMAGES_URL ?>/common/flag/us.png"
									class="img-fluid" /></span>
							<em class="icon-down"></em>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item d-flex align-items-center" href="#" data-flag="us">
									<img src="<?php echo IMAGES_URL ?>/common/flag/us.png" class="img-fluid me-2" /> English
								</a>
							</li>
							<li>
								<a class="dropdown-item d-flex align-items-center" href="#" data-flag="es">
									<img src="<?php echo IMAGES_URL ?>/common/flag/es.png" class="img-fluid me-2" /> Spanish
								</a>
							</li>
							<li>
								<a class="dropdown-item d-flex align-items-center" href="#" data-flag="fr">
									<img src="<?php echo IMAGES_URL ?>/common/flag/fr.png" class="img-fluid me-2" /> French
								</a>
							</li>
							<li>
								<a class="dropdown-item d-flex align-items-center" href="#" data-flag="de">
									<img src="<?php echo IMAGES_URL ?>/common/flag/de.png" class="img-fluid me-2" /> German
								</a>
							</li>
						</ul>
					</div>
					<?php 
				}
				 
				if($showhideLogin=='1')
				{
					?>
					<button class="btn btn-login btn-md btn-outline-warning btn-rounded font-bd justify-content-center">
						Login
					</button>
					<?php 
				} 
				if($showhideGetStarted=='1' && $getStartedText!='')
				{ ?>
					<a href="<?php echo get_site_url();?>/airaWp/free-trial-with-aira/" class="btn btn-getstarted btn-md btn-warning btn-rounded font-bd justify-content-center d-md-flex d-none">
                    <?php echo $getStartedText;?> <em class="icon-arrow-right"></em>
                </a>
					
					<?php 
				}
				?>
            </div>
        </div>
    </nav>
</header>
