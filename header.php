<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Favicon -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
    <link rel="shortcut icon" href="<?php echo esc_url( depilex_get_option('depilex_favicon') ); ?>">
	<?php } ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(depilex_get_option('depilex_preloader') == '1') { ?>
<div class="preloader">
  <div class="preloader_status"></div>
</div>
<?php } ?>
<!-- end page loader -->

<?php
global $wp_query;
$postid = $wp_query->post->ID;
$header_styles = get_post_meta($postid, 'header_key', true);
if(!$header_styles) {$header_styles = 'style_three'; }
?>

<!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
<?php if(depilex_get_option('header_top_bar') == '1') { ?>
<?php if( $header_styles != 'style_four' ) { ?>
<section class="top-bar">
  <div class="container">
    <div class="left-text pull-left">
      <p><span><?php if(depilex_get_option('depilex_opening_hours') != '') { ?><?php echo esc_html( depilex_get_option('depilex_opening_hours') ); ?><?php } else { ?><?php esc_html_e('Opening Hours : Monday to Saturday - 8am to 5pm', 'depilex'); ?><?php } ?></span></p>
    </div>
    <!-- /.left-text -->

    <div class="social-icons pull-right">
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
    <!-- /.social-icons -->
  </div>
</section>
<?php } ?>
<?php } ?>
<header class="header-area <?php if( $header_styles == 'style_four' ) { ?>transparent<?php } ?>">

  <!-- Logo Bar -->
  <?php if( ( $header_styles != 'style_four' ) && ( $header_styles != 'style_three' ) ){ ?>
  <div class="logo-bar">
    <div class="container clearfix">
      <!-- Logo -->
      <div class="logo">
		<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
				<?php depilex_the_custom_logo(); ?>
			  <?php else: ?>
			  <?php if(depilex_get_option('logo_url') != '') { ?>
			  <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" src="<?php echo esc_url( depilex_get_option('logo_url') ); ?>"></a>
			  <?php } else { ?>
			  <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" src="<?php if( ( $header_styles == 'style_two' ) || ( $header_styles == 'style_three' ) ){ ?><?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>logo.png<?php } else { ?><?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>logo-1.png<?php } ?>"></a>
			  <?php } ?>
			  <?php endif; ?>
	  </div>

      <!--Info Outer-->
      <div class="information-content">
        <!--Info Box-->
		<?php if(depilex_get_option('depilex_email_id') != '') { ?>
        <div class="info-box  hidden-sm">
          <div class="icon"><span class="icon-envelope"></span></div>
          <div><?php if(depilex_get_option('depilex_email_title') != '') { ?><?php echo esc_html( depilex_get_option('depilex_email_title') ); ?><?php } else { ?><?php esc_html_e('Email', 'depilex'); ?><?php } ?></div>
          <a href="mailto:<?php echo esc_html( depilex_get_option('depilex_email_id') ); ?>"><?php echo esc_html( depilex_get_option('depilex_email_id') ); ?></a> </div>
		  <?php } ?>
        <!--Info Box-->
		<?php if(depilex_get_option('depilex_phn_number') != '') { ?>
        <div class="info-box">
          <div class="icon"><span class="icon-phone"></span></div>
          <div><?php if(depilex_get_option('depilex_phn_title') != '') { ?><?php echo esc_html( depilex_get_option('depilex_phn_title') ); ?><?php } else { ?><?php esc_html_e('Call Now', 'depilex'); ?><?php } ?></div>
          <a class="location" href="tel:<?php echo esc_html( depilex_get_option('depilex_phn_number') ); ?>"><?php echo esc_html( depilex_get_option('depilex_phn_number') ); ?></a> </div>
        <?php } if(depilex_get_option('depilex_header_address_info') != '') { ?>
		<div class="info-box">
          <div class="icon"><span class="icon-map"></span></div>
          <div><?php if(depilex_get_option('depilex_header_address_title') != '') { ?><?php echo esc_html( depilex_get_option('depilex_header_address_title') ); ?><?php } else { ?><?php esc_html_e('Find Us', 'depilex'); ?><?php } ?></div>
          <a class="location" href="<?php echo esc_url( depilex_get_option('depilex_header_address_url') ); ?>"><?php echo esc_html( depilex_get_option('depilex_header_address_info') ); ?></a> </div>
		  <?php } ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <!-- Header Top End -->

  <!-- Menu Section -->
  <div class="<?php if( ( $header_styles == 'style_four' ) || ( $header_styles == 'style_three' ) ){ ?>navigation<?php } else { ?>navigation-2<?php } ?>">
    <!-- navigation-start -->
    <nav class="navbar navbar-default <?php if( $header_styles == 'style_four' ) { ?>transparent<?php } ?>">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
           <span class="sr-only"><?php esc_html_e('Toggle navigation', 'depilex'); ?></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
          </button>
		  <?php if( $header_styles == 'style_three' ) { ?>
		  <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
				<?php depilex_the_custom_logo(); ?>
			  <?php else: ?>
			  <?php if(depilex_get_option('logo_url') != '') { ?>
			  <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" src="<?php echo esc_url( depilex_get_option('logo_url') ); ?>"></a>
			  <?php } else { ?>
			  <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>logo.png"></a>
			  <?php } ?>
			  <?php endif; ?>
		  <?php } ?>
		  <?php if( $header_styles == 'style_four' ) { ?>
			  <?php if(depilex_get_option('logo_url') != '') { ?>
			  <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" src="<?php echo esc_url( depilex_get_option('logo_url') ); ?>"></a>
			  <?php } else { ?>
			  <a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="logo" src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>logo-1.png"></a>
			  <?php } ?>
		  <?php } ?>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-navigation">
          <?php
				if (has_nav_menu('depilex_primary_menu')) {
				if( ( $header_styles == 'style_four' ) || ( $header_styles == 'style_three' ) ){
                wp_nav_menu( array(
					'theme_location'    => 'depilex_primary_menu',
					'container'     => false,
					'container_id'      => '',
					'conatiner_class'   => '',
					'menu_class'        => 'nav navbar-nav navbar-right custom-nav',
					'echo'          => true,
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'         => 10,
					'walker'        => new depilex_walker_nav_menu
				) );
				} else {
				wp_nav_menu( array(
					'theme_location'    => 'depilex_primary_menu',
					'container'     => false,
					'container_id'      => '',
					'conatiner_class'   => '',
					'menu_class'        => 'nav navbar-nav',
					'echo'          => true,
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'         => 10,
					'walker'        => new depilex_walker_nav_menu
				) );
				}
				}
				?>
        </div>
        <!-- /.navbar-collapse -->
		<?php if( ( $header_styles != 'style_four' ) && ( $header_styles != 'style_three' ) ){ ?>
		<?php if(depilex_get_option('depilex_appointment_url') != '') { ?>
			  <div class="appoinment-button"><a class="appoinment-button" href="<?php echo esc_url( depilex_get_option('depilex_appointment_url') ); ?>"><?php if(depilex_get_option('depilex_appointment_label') != '') { ?><?php echo esc_attr( depilex_get_option('depilex_appointment_label') ); ?><?php } else { ?><?php esc_html_e('Appointment', 'depilex'); ?><?php } ?></a></div>
		<?php } } ?>
      </div>
      <!-- /.container-end -->
    </nav>
  </div>
  <!-- /.navigation-end -->
  <!-- Menu  End -->
</header>
<!-- =-=-=-=-=-=-= HEADER END =-=-=-=-=-=-= -->
<!-- =-=-=-=-=-=-= PAGE SECTION =-=-=-=-=-=-= -->
<div id="page-section">
