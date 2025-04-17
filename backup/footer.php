<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aira
 */

?>
<footer class="footer">
    <div class="getUpdatesWrapper">
        <div class="getUpdates">
            <h1><?php the_field('footer_latest_updates','option');?></h1>
            <p><?php the_field('latest_update_form_label','option');?></p>
            <div class="subscribForm position-relative">
                <?php echo do_shortcode('[contact-form-7 id="8c8aa31" title="Newsletter"]');?>
            </div>
        </div>
    </div>
    <div class="footerLinks">
        <div class="container container-lg">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo the_field('footer_logo_section','option');?>" class="img-fluid mb-4" alt="logo" />
                </div>
                <div class="col-md-9">
                    <div class="row">
						<?php 
						function wp_get_menu_array($current_menu) { 
							$array_menu = wp_get_nav_menu_items($current_menu);
							$menu = array();
							foreach ($array_menu as $m) {
								if (empty($m->menu_item_parent)) {
									$menu[$m->ID] = array();
									$menu[$m->ID]['ID'] 		= 	$m->ID;
									$menu[$m->ID]['title'] 		= 	$m->title;
									$menu[$m->ID]['url'] 		= 	$m->url;
									$menu[$m->ID]['description'] 		= 	$m->description;
									$menu[$m->ID]['children']	= 	array();
								}
							}
							$submenu = array();
							foreach ($array_menu as $m) {
								if ($m->menu_item_parent) {
									$submenu[$m->ID] = array();
									$submenu[$m->ID]['ID'] 		= 	$m->ID;
									$submenu[$m->ID]['title']	= 	$m->title;
									$submenu[$m->ID]['url'] 	= 	$m->url;
									$menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
								}
							}
							return $menu;
							
						}
					$companyMenu = wp_get_menu_array('product-menu');
					
					if(!empty($companyMenu))
					{
						
					?>
                        <div class="col-md-3 col-6">
                            <h2>Product</h2>
                            <ul class="list-unstyled">
								<?php 
								foreach($companyMenu as $companyVal)
								{ ?>
									<li><a href="<?php echo $companyVal['url'];?>"><?php echo $companyVal['title'];?></a></li>
								<?php } ?>
                                
                            </ul>
                        </div>
					<?php 
					}
					?>
                        <div class="col-md-3 col-6">
                            <h2>Resources</h2>
                            <ul class="list-unstyled">
							<?php 
								$resourceMenu = wp_get_menu_array('resources-menu');
								
								foreach($resourceMenu as $resourceVal)
								{ 
									if($resourceVal['title'] == 'Documentation'){
										$target = "_blank";
									}
									else{
										$target = "";
									}
									?>
									<li><a href="<?php echo $resourceVal['url'];?>" target="<?php echo $target;?>"><?php echo $resourceVal['title'];?></a></li>
								<?php } ?>
                            </ul>
                        </div>
                        <div class="col-md-3 col-6">
                            <h2>Company</h2>
                            <ul class="list-unstyled">
								<?php 
								$companyMenu = wp_get_menu_array('company-menu');
								foreach($companyMenu as $companyVal)
								{ ?>
									<li><a href="<?php echo $companyVal['url'];?>"><?php echo $companyVal['title'];?></a></li>
									<?php 
								} ?>
                            </ul>
                        </div>
                        <div class="col-md-3 col-6">
                            <h2>Legal</h2>
                            <ul class="list-unstyled">
								<?php 
								$legalMenu = wp_get_menu_array('legal-menu');
								foreach($legalMenu as $legalVal)
								{ ?>
									<li><a href="<?php echo $legalVal['url'];?>"><?php echo $legalVal['title'];?></a></li>
									<?php 
								} ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyrightWrapper">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p><?php echo get_field('footer_copyright_section','option');?></p>
                    </div>
                    <div class="col-md-6">
						<?php 
						if( have_rows('footer_social_media_links_and_labels', 'option') ): ?>
							<ul class="list-inline socialLink">
								<?php 
								while( have_rows('footer_social_media_links_and_labels', 'option') ) : the_row(); ?>
								<li class="list-inline-item">
									<a href="<?php the_sub_field('social_link')?>" target="_blank"><em class="<?php the_sub_field('social_icon');?>"></em></a>
								</li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	<button id="scrollBtn" onclick="scrollToTop()"><em class="icon icon-down"></em></button>

    <div class="fixedMenu">
        <div class="fixedMenu_ul list-unstyled p-0 mb-0">
            <li>
                <div class="btn-group dropstart">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <em class="icon-support"></em>
                    </button>
                    <div class="dropdown-menu">
                        <p>Technical Support</p>
                        <div class="cnt d-flex align-items-end justify-content-between">
                            <a href="#">
                                <em class="icon-arrow-circle"></em>
                            </a>
                            <img src="<?php echo IMAGES_URL ?>/common/technical-supprt.png" width="112" height="112"
                                alt="technical-supprt" />
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="btn-group dropstart">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <em class="icon-chat-setting"></em>
                    </button>
                    <div class="dropdown-menu">
                        <p>Technical Support</p>
                        <div class="cnt d-flex align-items-end justify-content-between">
                            <a href="#">
                                <em class="icon-arrow-circle"></em>
                            </a>
                            <img src="<?php echo IMAGES_URL ?>/common/community.png" width="114" height="114"
                                alt="community" />
                        </div>
                    </div>
                </div>
            </li>
            </ul>
        </div>
<?php wp_footer(); ?>

</body>
</html>
