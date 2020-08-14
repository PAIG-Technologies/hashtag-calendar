<!-- Footer -->
<div id="footer">
	<!-- Main -->
	<div class="footer-top py-8">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6">
					<?php if (has_custom_logo()) : ?>
					
						<?php the_custom_logo(); ?>

					<?php else: ?>
						<h3> <?php bloginfo('name'); ?></h3>

					<?php	endif; ?>

				</div>

				<div class="col-md-3 col-sm-6 ">
					<h4>Helpful Links</h4>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'footer_menu',
						'menu_class'   => 'footer-links'
					));
					?>
					<div class="clearfix"></div>
				</div>

				<div class="col-md-4 col-sm-12">
					<h4>Contact Us</h4>
					<div class="text-widget">
						<ul class="list-none address-block">
							<li>
								<a target="_blank" href="http://maps.google.com/?q=<?php echo wp_strip_all_tags(getCustomThemeValue("address", "100 Harris Street Pyrmont")); ?>">
									<i class="fa fa-globe"></i>
									<?php echo getCustomThemeValue("address", "100 Harris Street, Pyrmont"); ?>
								</a>
							</li>
							<li>
								<a href="tel:<?php echo str_replace(" ","",getCustomThemeValue("phone_number1", "1300007244")); ?>">
									<i class="fa fa-phone-square"></i>
									<?php echo getCustomThemeValue("phone_number1", "1300 00 PAIG"); ?>
								</a>
							</li>
							<li>
								<a href="mailto:<?php echo getCustomThemeValue("email_address", "admin@paigtechnologies.com.au"); ?>">
									<i class="fa fa-envelope-square"></i>
									<?php echo getCustomThemeValue("email_address", "admin@paigtechnologies.com.au"); ?>
								</a>
							</li>
						</ul>
					</div>

					<ul class="social-icons margin-top-20">

						<?php $socialItems = getPaigSocialMedia();
						foreach ($socialItems as $socialItem) :
							if (!empty(getCustomThemeValue($socialItem))) :
						?>
								<li>
									<a class="<?php echo $socialItem ?>" target="_blank" href="<?php echo getCustomThemeValue($socialItem) ?>">
										<i class="icon-<?php echo $socialItem ?>"></i>
									</a>
								</li>
						<?php endif;
						endforeach; ?>

					</ul>

				</div>

			</div>
		</div>
	</div>

	<div class="footer-bottom theme-bg">
		<div class="container">
			<!-- Copyright -->
			<div class="row">
				<div class="col-md-4 col-xs-12 cs-text-center md:text-left">
					<div class="cr1 mb-4 md:mb-0">Copyright © <a href="<?php echo getCustomThemeValue("copyright_url") ?>" target="#">
							<?php echo getCustomThemeValue("copyright_text", current_time('Y')." ".get_bloginfo("Name")); ?>
						</a>
                    </div>
				</div>
				<div class="col-md-4 col-xs-12 text-center">
					<div class="privacy-div">

                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'policy_menu',
                            'menu_class' => 'list-inline text-center',
                            'container' => 'ul',
                            'menu_id' => 'responsive',
                            'walker' => new Hashtag\Theme\WP_Bootstrap_Navwalker()
                        ));
                        ?>

					</div>
				</div>
				<div class="col-md-4 col-xs-12 cs-text-center md:text-right">
					<div class="powered-by">Powered By
						<a href="<?php echo getCustomThemeValue("poweredby_url","http://www.paigtechnologies.com.au/") ?>" target="#">
							<?php
							echo getCustomThemeValue("poweredby_text","PAIG Technologies");
							?>
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->
<?php wp_footer(); ?>

</body>

</html>