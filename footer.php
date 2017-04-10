<!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <!--About-->
          <div class="col-md-3 about">
            <h4><?php if(depilex_get_option('depilex_fabout_title') != '') { ?><?php echo esc_html( depilex_get_option('depilex_fabout_title') ); ?><?php } else { ?><?php esc_html_e('About', 'depilex'); ?><?php } ?></h4>
            <p><?php echo depilex_get_option('depilex_about_info'); ?></p>
          </div>

		  <?php if(depilex_get_option('depilex_footer_flickr') == '0') { ?>
          <!--Latest Post-->
          <div class="col-md-3 post">
            <h4><?php if(depilex_get_option('depilex_fblog_title') != '') { ?><?php echo esc_html( depilex_get_option('depilex_fblog_title') ); ?><?php } else { ?><?php esc_html_e('Latest Posts', 'depilex'); ?><?php } ?></h4>
            <ul class="list-inline ab">
			<?php
										$args = array(
										'posts_per_page'   => 3,
										'orderby'          => 'post_date',
										'order'            => 'DESC',
										'post_type'        => 'post',
										'post_status'      => 'publish',
										);

										$footer_latestpost = new WP_Query( $args );
										if ($footer_latestpost->have_posts()) :
										while($footer_latestpost->have_posts()) : $footer_latestpost->the_post() ;
										?>

				<li> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><?php echo get_the_time('j M, Y'); ?>  | <?php esc_html_e('By', 'depilex'); ?> <?php the_author(); ?></span> </li>

          <?php endwhile; ?>
		  <?php endif; ?>
			</ul>

          </div>
		  <?php } elseif(depilex_get_option('depilex_footer_flickr') == '1') { ?>
		  <div class="col-md-3">
			  <h4><?php if(depilex_get_option('depilex_fblog_title') != '') { ?><?php echo esc_html( depilex_get_option('depilex_fblog_title') ); ?><?php } else { ?><?php esc_html_e('Flickr Photos', 'depilex'); ?><?php } ?></h4>
			  <div class="flickr-widget" id="flickr"></div>
		  </div>
		<?php } ?>

          <!--Contact-->
          <div class="col-md-3 contact">
            <h4><?php if(depilex_get_option('depilex_fcontact_title') != '') { ?><?php echo esc_html( depilex_get_option('depilex_fcontact_title') ); ?><?php } else { ?><?php esc_html_e('Contact', 'depilex'); ?><?php } ?></h4>
            <ul class="list-inline">
				<?php if(depilex_get_option('depilex_address_info') != '') { ?><li><span><i class="fa fa-map-marker"></i></span> <?php echo  depilex_get_option('depilex_address_info'); ?></li><?php } ?>
				<?php if(depilex_get_option('depilex_phn_number') != '') { ?><li><span><i class="fa fa-phone"></i></span> <?php echo esc_html( depilex_get_option('depilex_phn_number') ); ?></li><?php } ?>
				<?php if(depilex_get_option('depilex_email_id') != '') { ?><li><span><i class="fa fa-envelope"></i></span> <?php echo esc_html( depilex_get_option('depilex_email_id') ); ?></li><?php } ?>
            </ul>
          </div>

          <!--Newsletter-->
          <div class="col-md-3 newsletter">
            <h4><?php if(depilex_get_option('depilex_cnletter_title') != '') { ?><?php echo esc_html( depilex_get_option('depilex_cnletter_title') ); ?><?php } else { ?><?php esc_html_e('Newsletter', 'depilex'); ?><?php } ?></h4>
            <p><?php if(depilex_get_option('depilex_cnletter_text') != '') { ?><?php echo esc_html( depilex_get_option('depilex_cnletter_text') ); ?><?php } else { ?><?php esc_html_e('Sign up to our weekly newsletter list', 'depilex'); ?><?php } ?></p>


			<?php if(depilex_get_option('ft_aweber_listid') != '') { ?>
		  <form method="post" action="https://www.aweber.com/scripts/addlead.pl">
			<div class="input-group">
                <input type="hidden" name="redirect" value="<?php esc_url( depilex_get_option('aweber_redirectpage') ) ?>" />
				<input type="hidden" name="meta_redirect_onlist" value="<?php esc_url( depilex_get_option('aweber_redirectpage_old') ) ?>" />
				<input type="hidden" name="meta_message" value="1" />
				<input type="hidden" name="meta_required" value="email" />
				<input class="form-control" name="email" id="samplees" placeholder="<?php esc_html_e('Email Address', 'depilex');?>" type="text"/>
                <span class="input-group-btn">
                <button type="submit" class="btn btn-primary btn-sm"><?php esc_html_e('GO!', 'depilex');?></button>
                </span>
			  </div>
          </form>
		  <?php } elseif (depilex_get_option('mailchimp_apikey') != ''){ ?>
		  <form id="footer_signup" action="<?php echo get_template_directory_uri();?>/subscribe/subscribe.php" method="post">
              <div class="input-group">
                <input class="form-control" name="email" id="email" placeholder="<?php esc_html_e('Email Address', 'depilex');?>" type="email"/>
                <span class="input-group-btn">
                <button type="submit" class="btn btn-primary btn-sm"><?php esc_html_e('GO!', 'depilex');?></button>
                </span>
			  </div>
              <!-- /input-group -->
			  <div id="footer_response" class="result"></div>
            </form>

		  <?php } else { ?>
		 <form method="post" action="#">
			<div class="input-group">
                <input type="hidden" name="redirect" value="<?php esc_url( depilex_get_option('aweber_redirectpage') ) ?>" />
				<input type="hidden" name="meta_redirect_onlist" value="<?php esc_url( depilex_get_option('aweber_redirectpage_old') ) ?>" />
				<input type="hidden" name="meta_message" value="1" />
				<input type="hidden" name="meta_required" value="email" />
				<input class="form-control" name="email" id="samplees" placeholder="<?php esc_html_e('Email Address', 'depilex');?>" type="email"/>
                <span class="input-group-btn">
                <button type="submit" class="btn btn-primary btn-sm"><?php esc_html_e('GO!', 'depilex');?></button>
                </span>
			  </div>
          </form>
		  <?php } ?>

            <!--Footer Social Icon-->
            <div class="footer-social">
              <ul>
                <?php if(depilex_get_option('social_facebook') != '') { ?>
			  <li><a href="<?php echo esc_url( depilex_get_option('social_facebook') ); ?>"><i class="fa fa-facebook"></i></a></li>
			  <?php } if(depilex_get_option('social_twitter') != '') { ?>
			  <li><a href="<?php echo esc_url( depilex_get_option('social_twitter') ); ?>"><i class="fa fa-twitter"></i></a></li>
			  <?php } if(depilex_get_option('social_googleplus') != '') { ?>
			  <li><a href="<?php echo esc_url( depilex_get_option('social_googleplus') ); ?>"><i class="fa fa-google-plus"></i></a></li>
			  <?php } if(depilex_get_option('social_linkedin') != '') { ?>
			  <li><a href="<?php echo esc_url( depilex_get_option('social_linkedin') ); ?>"><i class="fa fa-linkedin"></i></a></li>
			  <?php } if(depilex_get_option('social_flickr') != '') { ?>
			  <li><a href="<?php echo esc_url( depilex_get_option('social_flickr') ); ?>"><i class="fa fa-flickr"></i></a></li>
			  <?php } if(depilex_get_option('social_utube') != '') { ?>
			  <li><a href="<?php echo esc_url( depilex_get_option('social_utube') ); ?>"><i class="fa fa-youtube"></i></a></li>
			  <?php } ?>
              </ul>
            </div>
          </div>
        </div>
        <!--/.row-->
      </div>
      <!--/.container-->
    </div>
    <!--/.inner-footer-->

    <!-- Start Sub-footer-->
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 copyright">
            <p><?php if(depilex_get_option('copy_text') != '') { ?><?php echo esc_textarea( depilex_get_option('copy_text') ); ?><?php } else { ?><?php esc_html_e('Copyright &copy; 2016 yourdomian. All rights reserved.', 'depilex'); ?><?php } ?></p>
          </div>

          <!-- Footer Menu-->
          <div class="col-md-6 col-sm-6 footer-menu">
            <ul>
              <?php
					if (has_nav_menu('depilex_menu_footer')) {
					wp_nav_menu(array(
					'theme_location' 	=>'depilex_menu_footer', 'container' => false, 'items_wrap' => '%3$s'
					));
					}
			  ?>
            </ul>
          </div>
          <!-- End Footer Menu-->
        </div>
        <!--/.row-->
      </div>
      <!--/.container-->
    </div>
    <!-- End Sub-footer-->
  </footer>

  <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
</div>
<!-- =-=-=-=-=-=-= PAGE SECTION END =-=-=-=-=-=-= -->

<a href="#" class="scrollup"></a>
<!-- end scroll to top of the page-->
<!--Flicker-->
<?php if(depilex_get_option('depilex_footer_flickr') == '1') { ?>
<?php if(depilex_get_option('depilex_flickr_id') != '') { ?>
<?php get_template_part( 'subscribe/flickr' ); ?>
<?php } } ?>
<!--Flicker End-->
<?php $subscribefile = get_template_directory_uri().'/subscribe/subscribe.php'; ?>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			// jQuery Validation
			$("#footer_signup").validate({
				// if valid, post data via AJAX
				submitHandler: function() {
					var subscribefile="<?php echo esc_url( $subscribefile ); ?>";
					$.post(subscribefile, { email: $("#email").val() }, function(data) {
						$('#footer_response').html(data);
					});
				},
				// all fields are required
				rules: {
					email: {
						required: false,
						email: false
					}
				}
			});
		});
</script>
	<?php
		/* Always have wp_footer() just before the closing </body>
		* tag of your theme, or you will break many plugins, which
		* generally use this hook to reference JavaScript files.
		*/

		wp_footer();
	?>
</body>
</html>
