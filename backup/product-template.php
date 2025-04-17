<?php /* Template Name: Product Page Template */ ?>
<?php get_header();?>
<main class="mainContent">
        <section class="innerBanner innerBanner-sm">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb position-relative">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo ucwords(get_the_title());?></li>
                        </ol>
                    </nav>
                    <h1><?php echo get_the_title();?></h1>
                    <p class="text-24"><?php the_field('header_section_common_short_content');?></p>
                </div>
            </div>
        </section>

        <section class="solutions py-80">
            <div class="container">
                <div class="py-80 pt-0">
                    <div class="commonHead">
                        
                    </div>

                    <div class="row g-md-4 g-3">
						<?php 
						$product_objects = get_field('select_posts');
						if(!empty($product_objects))
						{  
							$imagAlt = '';
							foreach($product_objects as $productValues)
							{ 
								if(function_exists('getImgAlt')){
									$imagAlt = getImgAlt($productValues);
								}?>
								<div class="col-xl-3 col-md-4 col-sm-6 h-100">
									<a href="<?php echo get_the_permalink($productValues);?>" class="solutions_card commonBorder h-100">
										<div>
											<img src="<?php echo the_field('icon_image_section',$productValues);?>" class="img-fluid" width="47" alt="<?php echo $imagAlt;?>" />
											<h3> <?php echo get_the_title($productValues);?></h3>
											<p> <?php the_field('short_content_section',$productValues);?> </p>
										</div>
									</a>
								</div>
								<?php 
							}
						}
						?>
                    </div>
                </div>
                
            </div>
        </section>
		
		<?php
		$show_data_connector_slider = get_field('show_data_connector_slider');
		if(true === $show_data_connector_slider)			
		{ ?>
			<!-- Highly Pre-Integrated Data Connectors  -->
			<section class="dataConnectors py-80">
				<div class="container z-1 glow">
					<h1 class="text-42 text-center font-bd mb-50"> <?php the_field('data_connector_slider_main_title_section', get_the_ID());?> </h1>
					<?php 
					if( have_rows('data_connector_icons_slider_section') ):
						$slidercounts = 1;
						$sliderClass = '';
						
						while( have_rows('data_connector_icons_slider_section') ) : the_row();
							if($slidercounts == '1'){$sliderClass = "mb-4"; $swapslider = "";} else{$sliderClass =" "; $swapslider = "2";}?>
							<div class="dataConnectors_slider <?php echo $sliderClass;?>">
								<div class="swiper dataConnectorsSwiper<?php echo $swapslider;?>">
									<div class="swiper-wrapper">
										<?php 
										if( have_rows('data_connector_icon_slider_inner_section') ):
											while( have_rows('data_connector_icon_slider_inner_section') ) : the_row(); 
												$sliderImg = get_sub_field('data_connector_slider_icon_image_section');
												$imgAlt = $sliderImg['title'];
												$imgUrl = $sliderImg['url'];?>
												<div class="swiper-slide">
													<div class="dataConnectorsBox">
														<img src="<?php echo $imgUrl;?>" class="img-fluid" alt="<?php echo $imgAlt;?>" />
													</div>
												</div>
											<?php 
											endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<?php 
							$slidercounts++;
							endwhile; ?>
						<?php endif; ?>
					

					<div class="dataConnectors_footer">
						<p> <?php echo get_field('data_connector_slider_below_text_section');?> </p>
						<a href=" <?php echo get_field('data_connector_slider_below_button_link_section');?>" class="btn btn-warning btn-rounded position-relative d-inline-flex">
							<?php echo get_field('data_connector_slider_below_button_section');?>
							<em class="icon-arrow-right"></em>
						</a>
					</div>
				</div>
			</section>
			<!--!! Highly Pre-Integrated Data Connectors  -->
			<?php 
		} ?>
    </main>
<?php get_footer();?>