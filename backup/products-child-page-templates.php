<?php /* Template Name: Products Child Pages */ ?>
<?php get_header(); ?>
<main class="mainContent pppp">
	<section class="innerBanner d-flex align-items-center">
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">Home</a></li>
					<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/product/">Products</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php echo get_the_title(); ?></li>
				</ol>
			</nav>
			<div class="row align-items-center">
				<div class="col-sm-6 col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-4 order-sm-1 order-2 innerBanner_left">
					<h1><?php echo get_the_title(); ?></h1>
					<h2> <?php the_field('header_section_common_short_content'); ?></h2>
				</div>
				<div class="col-sm-6 col-12d-6 col-lg-6  col-xl-6 col-xxl-8 order-sm-2 order-1 innerBanner_right">
					<img class="img-fluid" src="<?php echo the_field('banner_right_section_image'); ?>"
						alt="ai-agents-banner" />
				</div>
			</div>
		</div>
	</section>

	<section class="workflowAutomation py-80">
		<div class="container">
			<h1 class="text-42 text-center font-bd mb-50"> <?php the_field('main_title_section'); ?></h1>
			<div class="row">
				<?php
				if (have_rows('below_banner_first_section')):
					while (have_rows('below_banner_first_section')):
						the_row(); ?>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="workflowAutomationBox commonBorder">
								<img src="<?php the_sub_field('below_banner_first_section_image_section') ?>"
									alt="Cognitive Capabilities" class="img-fluid" />
								<h2> <?php the_sub_field('below_banner_first_section_title_section') ?></h2>
								<p> <?php the_sub_field('below_banner_short_content_section') ?> </p>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="automatedWorkflow">
		<?php
		if (get_field('user_friendly_title_section')) {
			?>
			<div class="container glow">
				<h1 class="text-42 text-center font-bd mb-50"> <?php echo the_field('user_friendly_title_section'); ?></h1>
				<img src="<?php echo the_field('user_friendly_image_section'); ?>" alt="Automated Workkflow"
					class="img-fluid mx-auto d-block" />
			</div>
			<?php
		}
		?>
		<div class="automatedWorkflowList">
			<div class="container">
				<?php
				if (have_rows('left_and_right_section')):
					while (have_rows('left_and_right_section')):
						the_row(); ?>
						<?php $leftRightSec = get_sub_field('leftright_section');
						if ($leftRightSec[0] == 'Left') { ?>
							<div class="row align-items-center mb-84">
								<div class="col-md-6 col-sm-6 automatedWorkflowList_left">
									<h2 class="text-42 font-sm"> <?php echo get_sub_field('main_title_section'); ?> </h2>
									<p> <?php echo get_sub_field('short_content_section'); ?></p>
								</div>
								<div class="col-md-6 col-sm-6 automatedWorkflowList_right">
									<img src="<?php echo get_sub_field('image_section'); ?>" class="img-fluid"
										alt="Insights for Decisions" />
								</div>
							</div>
							<?php
						}
						if ($leftRightSec[0] == 'Right') { ?>
							<div class="row align-items-center mb-84">
								<div class="col-md-6 col-sm-6 automatedWorkflowList_right">
									<img src="<?php echo get_sub_field('image_section'); ?>" class="img-fluid"
										alt="Task Automation Boost " />
								</div>
								<div class="col-md-6 col-sm-6 automatedWorkflowList_left">
									<h2 class="text-42 font-sm"> <?php echo get_sub_field('main_title_section'); ?> </h2>
									<p> <?php echo get_sub_field('short_content_section'); ?></p>
								</div>
							</div>
							<?php
						}
						?>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</section>
	<?php
	$faqShow = get_field('show_faq_section');
	if (true === $faqShow) { ?>
		<section class="faq py-80">
			<div class="container">
				<h1 class="text-42 text-center font-bd mb-50"> <?php echo the_field('faq_main_title_section'); ?></h1>
				<div class="accordion accordion-flush" id="faqAccordion">
					<?php
					if (have_rows('faq_custom_fields')):
						$faqcount = 1;
						while (have_rows('faq_custom_fields')):
							the_row(); ?>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
										data-bs-target="#faq-<?php echo $faqcount; ?>" aria-expanded="false"
										aria-controls="faq-<?php echo $faqcount; ?>">
										<?php echo get_sub_field('faq_questions_section'); ?>
									</button>
								</h2>
								<div id="faq-<?php echo $faqcount; ?>" class="accordion-collapse collapse"
									data-bs-parent="#faqAccordion">
									<div class="accordion-body"> <?php echo get_sub_field('faq_answer_section'); ?> </div>
								</div>
							</div>
							<?php
							$faqcount++;
						endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<?php
	}

	if (true === get_field('show_data_connector_slider')) { ?>


		<!-- Highly Pre-Integrated Data Connectors  -->
		<section class="dataConnectors py-80">
			<div class="container z-1 glow">
				<h1 class="text-42 text-center font-bd mb-50">
					<?php the_field('data_connector_slider_main_title_section'); ?>
				</h1>
				<?php
				if (have_rows('data_connector_icons_slider_section')):
					$slidercounts = 1;
					$sliderClass = '';

					while (have_rows('data_connector_icons_slider_section')):
						the_row();
						if ($slidercounts == '1') {
							$sliderClass = "mb-4";
							$swapslider = "";
						} else {
							$sliderClass = " ";
							$swapslider = "2";
						} ?>
						<div class="dataConnectors_slider mb-4 <?php echo $sliderClass; ?>">
							<div class="swiper dataConnectorsSwiper<?php echo $swapslider; ?>">
								<div class="swiper-wrapper">
									<?php
									if (have_rows('data_connector_icon_slider_inner_section')):
										while (have_rows('data_connector_icon_slider_inner_section')):
											the_row();
											$sliderImg = get_sub_field('data_connector_slider_icon_image_section');
											$imgAlt = $sliderImg['title'];
											$imgUrl = $sliderImg['url']; ?>
											<div class="swiper-slide">
												<div class="dataConnectorsBox">
													<img src="<?php echo $imgUrl; ?>" class="img-fluid" alt="<?php echo $imgAlt; ?>" />
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
					<p> <?php echo get_field('data_connector_slider_below_text_section'); ?> </p>
					<a href=" <?php echo get_field('data_connector_slider_below_button_link_section'); ?>"
						class="btn btn-warning btn-rounded position-relative d-inline-flex">
						<?php echo get_field('data_connector_slider_below_button_section'); ?>
						<em class="icon-arrow-right"></em>
					</a>
				</div>
			</div>
		</section>
		<?php
	}
	?>
	<!--!! Highly Pre-Integrated Data Connectors  -->

</main>
<?php get_footer(); ?>