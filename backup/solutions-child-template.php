<?php /* Template Name: Solutions Child Tempalte */ ?>
<?php get_header();?>
<main class="mainContent">
        <section class="innerBanner d-flex align-items-center">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <?php 
                        $child_id = get_the_ID(); // Replace with your child post ID
                        $parent_id = wp_get_post_parent_id($child_id);
                        ?>
                        <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>/solutions">solutions</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo get_site_url();?>"><?php echo get_the_title($parent_id);?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title();?></li>
                    </ol>
                </nav>
                <div class="row align-items-center">
                <div class="col-sm-6 col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4 order-sm-1 order-2 innerBanner_left">
                        <h1><?php echo get_the_title();?></h1>
                        <h2> <?php the_field('by_industry_banner_short_content_section'); ?> </h2>
                    </div>
                    <div class="col-sm-6 col-12d-6 col-lg-6  col-xl-6 col-xxl-8 order-sm-2 order-1 innerBanner_right">
                        <img class="img-fluid" src="<?php the_field('by_industry_banner_right_section_image'); ?> " alt="bfsi" />
                    </div>
                </div>
            </div>
        </section>

        <section class="workflowSection py-80">
            <div class="container">
                <h1 class="text-42 text-center font-bd mb-50"> <?php the_field('by_industry_below_banner_first_main_title_section'); ?></h1>
                <div class="row">
					<?php 
						if( have_rows('by_industry_work_flow_inner_section') ): 
							while( have_rows('by_industry_work_flow_inner_section') ) : the_row();?>
								<div class="col col-lg-4 col-md-4 col-sm-6">
									<div class="workflowBox">
										<h2> <?php the_sub_field('work_flow_inner_section_main_title')?></h2>
										<div class="workflowBox_inner">
											<?php the_sub_field('by_industry_work_flow_content_section')?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
                </div>
            </div>
        </section>

        <section class="tranformingManufacture">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12 col-lg-6 tranformingManufacture_left">
                        <h1 class="text-42 font-bd"> <?php the_field('intelligent_solutions_left_section_main_title'); ?> </h1>
                        <p>
                       <?php the_field('intelligent_solutions_left_section_short_content_title'); ?>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 tranformingManufacture_right">
                        <h2> <?php the_field('by_industry_typical_section_main_title'); ?> </h2>
                        <div class="row">
							<?php 
							if( have_rows('typical_section_repeater_section') ): 
								while( have_rows('typical_section_repeater_section') ) : the_row();?>
									 <div class="col-md-6 col-sm-6 col-6">
										<div class="percentBox">
											<div class="percentBox_head">
												<img src="<?php the_sub_field('by_industry_typical_section_image_section')?>" alt="icon" class="img-fluid" />
												<span class="percentBox_text"> <?php the_sub_field('by_industry_typical_section_percentage_section')?> </span>
											</div>
											<div class="percentBox_body"> <?php the_sub_field('by_industry_typical_section_title')?> </div>
										</div>
									</div>
								<?php endwhile; ?>
						<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featuredAi py-80">
            <div class="container">
                 <h1 class="text-42 text-center font-bd mb-50"><?php the_field('by_industry_featured_section_main_title');?></h1>
                <div class="row">
					<?php 
						if( have_rows('featured_ai_content_section') ): 
							while( have_rows('featured_ai_content_section') ) : the_row();?>
								<div class="col-md-4 col-sm-6 col-lg-4 col-xxl-3">
									<div class="featuredBox">
										<div class="featuredBox_inner">
										<h2> <?php the_sub_field('featured_ai_main_title_section')?> </h2>
										<p> <?php the_sub_field('featured_ai_short_content_section')?> </p>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
                </div>
            </div>
        </section>

        <section class="solutionApproach py-80">
            <div class="container">
                <h1 class="text-42 text-center font-bd mb-50"> <?php the_field('solutions_approach_main_title_section');?> </h1>
                <img src="<?php the_field('solutions_approach_image_section');?>" class="w-100" alt="bfsi-approach"/>
            </div>
        </section>

        <section class="whyChoose py-80 pb-0">
            <div class="container">
                <div class="whyChoose_inner">
                    <h1 class="text-42 font-bd"> <?php the_field('why_choose_us_section_main_title');?> </h1>
                    <?php the_field('why_choose_us_content_section');?> 
                    <p> <?php the_field('why_choose_us_bottom_section_with_links');?> </p>
                </div>
            </div>
        </section>

        <section class="Blog py-80">
            <div class="container">
                <h1 class="text-42 text-center font-bd"> <?php the_field('blog_section_main_title');?> </h1>
                <div class="row">
					<?php 
						$blogIdArr = get_field('blog_section');
						if(!empty($blogIdArr)){
							foreach($blogIdArr as $blogIdArrVals){ ?>
								<div class="col-md-4 col-sm-6 col-6">
									<div class="blogBox">
										<div class="blogBox">
											<div class="blogBox_date">
												<?php echo get_the_date("F jS Y");?>
											</div>
											<img src="<?php the_field('front_image_section',$blogIdArrVals);?>" alt="blog" class="img-fluid"/>
											<p> <?php the_field('sub_title_section',$blogIdArrVals);?> </p> 
										</div>
									</div>
								</div>
								<?php
							}
						}
						?>
                    
                    
                </div>
            </div>
        </section>

    </main>
<?php get_footer();?>