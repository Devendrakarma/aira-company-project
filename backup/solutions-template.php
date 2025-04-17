<?php /* Template Name: Solutions Page Template */ ?>
<?php get_header();?>
<main class="mainContent">
        <section class="innerBanner innerBanner-sm">
            <div class="container">
                <div class="text-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb position-relative">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title();?></li>
                        </ol>
                    </nav>
                    <h1><?php echo get_the_title();?></h1>
                    <p class="text-24"><?php echo get_the_content();?></p>
                </div>
            </div>
        </section>

        <section class="solutions py-80">
            <div class="container">
                <div class="py-80 pt-0">
                    <div class="commonHead">
                        <h2 class="commonHead_title">By Industry</h2>
                    </div>

                    <div class="row g-md-4 g-3">
						<?php 
						$industryChildIds = get_field('select_child_pages_of_solutions');
						if(!empty($industryChildIds)){
							foreach($industryChildIds as $childValues){ ?>
								<div class="col-xl-3 col-md-4 col-sm-6 h-100">
									<a href="<?php echo get_the_permalink($childValues);?>"
										class="solutions_card commonBorder h-100">
										<div>
											<img src="<?php echo get_field('icon_section',$childValues);?>" class="img-fluid" width="47" alt="tool" />
											<h3> <?php echo get_the_title($childValues);?> </h3>
											<p> <?php echo get_field('short_content_section',$childValues);?></p>
										</div>
									</a>
								</div>
								<?php 
							}
						}
						else 
						{
							echo 'No child posts found.';
						} ?>
                        
                    </div>
                </div>
                <div>
                    <div class="commonHead">
                        <h2 class="commonHead_title">By Department</h2>
                    </div>

                    <div class="row g-md-4 g-3">
						<?php 
						$departmentChildIds = get_field('select_child_pages_by_department');
						if(!empty($departmentChildIds)){
							foreach($departmentChildIds as $departmentchildValues){ ?>
								<div class="col-xl-3 col-md-4 col-sm-6 h-100">
									<a href="<?php echo get_the_permalink($departmentchildValues);?>" class="solutions_card commonBorder h-100">
										<div>
											<img src="<?php echo get_field('icon_section',$departmentchildValues);?>" class="img-fluid" width="47" alt="database" />
											<h3> <?php echo get_the_title($departmentchildValues);?> </h3>
											<p> <?php echo get_field('short_content_section',$departmentchildValues);?> </p>
										</div>
									</a>
								</div>
								<?php 
							}
						}
						else 
						{
							echo 'No Department posts found.';
						} ?>
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