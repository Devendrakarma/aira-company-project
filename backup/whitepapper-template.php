<?php /* Template Name: Whitepapper Page Template */ ?>
<?php get_header();?>
<main class="mainContent">
	<section class="innerBanner innerBanner-sm position-relative">
		<div class="container">
			<div class="text-center">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb position-relative">
						<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Whitepaper</li>
					</ol>
				</nav>
				<h1 class="mb-0"> <?php echo get_the_content();?> </h1>
			</div>
		</div>
		<div class="searchWrapper position-absolute">
			<form>
				<div class="form-group position-relative mb-0">
					<input id="search" type="text" class="form-control" placeholder="Search" />
					<button class="btn btn-rounded d-flex align-items-center justify-content-center">
						<em class="icon icon-search"></em>
					</button>
				</div>
			</form>
		</div>
	</section>

	<section class="Blog py-80 pb-0">
		<div class="container">
			<div class="d-flex align-items-center justify-content-center mb-5">
				<button class="btn btn-filterBtn active btn-rounded me-2">
					All <em class="icon icon-close"></em>
				</button>
				<button class="btn btn-filterBtn btn-rounded me-2">
					AI In Action
				</button>
				<button class="btn btn-filterBtn btn-rounded me-2">
					Banking and Insurance
				</button>
				<button class="btn btn-filterBtn btn-rounded me-2">
					Education
				</button>
			</div>
			<?php 
				$args = array(
					'post_type' => 'whitepapper', // Replace with your post type (e.g., 'post', 'product', etc.)
					'posts_per_page' => 3, // -1 to get all posts
					'orderby' => 'ID',
					'order' => 'ASC',
					/*'tax_query' => array(
						array(
							'taxonomy' => 'category', // Replace with your custom taxonomy name
							'field'    => 'term_id', // Can be 'slug' or 'term_id'
							'terms'    => '1', // Replace with the actual term slug or ID
							
							//'include_children' => false,
						),
					),*/
				);

				$query = new WP_Query($args); 
				?>
                <div class="row allblogslists">
					<?php 
				
					if ($query->have_posts()) :
						while ($query->have_posts()) : $query->the_post(); ?>
						<div class="col-md-4 col-sm-6 col-6 mb-4">
							<a href="<?php echo get_the_permalink(get_the_ID());?>">
								<div class="blogBox">
									<div class="blogBox">
										<div class="blogBox_date">
											<?php echo get_the_date("F jS Y");?>
										</div>
										<img src="<?php the_field('front_image_section',get_the_ID());?>" alt="blog"
											class="img-fluid" />
										<p><?php the_field('sub_title_section',get_the_ID());?></p>
									</div>
								</div>
							</a>
						</div>
							<?php 
						endwhile;
							wp_reset_postdata();
						else :
							echo '<p>No posts found.</p>';
						endif;?>
                    
                </div>
                <button class="btn btn-light btn-rounded learnMoreBtn mx-auto" id="loadmore">
                    Load More
                </button>
			
		</div>
	</section>
</main>
<?php get_footer();?>