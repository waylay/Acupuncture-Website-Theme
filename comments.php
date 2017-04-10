<?php
/**
 * The template for displaying Comments.
 */

if ( post_password_required() )
	return;
?>


	<?php // You can start editing here -- including this comment! ?>
	<div class="clearfix"></div>
           <span class="separator"></span>
		   <div id="comments-section">
                <div id="comments">

	<?php if ( have_comments() && comments_open() ) : ?>

                <div class="heading-side-bar">
                <h2><?php comments_number(esc_html__('No Comment Yet', 'depilex'), esc_html__('1 Comment', 'depilex'), esc_html__('% Comments', 'depilex') );?></h2>
              </div>

				<div class="comments-list">
					<?php wp_list_comments( array( 'callback' => 'depilex_comment', 'style' => 'div' ) ); ?>
				</div><!-- .commentlist -->
				<div class="clearfix"></div>

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
				<span class="separator"></span>
				<div class="custom-pagination text-center">
					<ul class="pagenation-list">
							  <li><?php esc_url( previous_comments_link( '<i class="fa fa-angle-left"></i>' ) ) ?></li>
							  <li><?php esc_url( next_comments_link( '<i class="fa fa-angle-right"></i>', 0 ) ) ?></li>
							</ul>
				</div>
				<?php endif; ?>

				<?php
				/* If there are no comments and comments are closed, let's leave a note.
				 * But we only want the note on posts and pages that had comments in the first place.
				 */
				if ( ! comments_open() ) : ?>
					<h2><?php esc_html_e( 'Comments are closed' , 'depilex' ); ?></h2>
				<?php endif; ?>

	<?php endif; // have_comments() ?>
	<?php if ( comments_open() ) : ?>
		<div id="responding">
              <div class="heading-side-bar">
                <h2><?php esc_html_e( 'Leave A Comment' , 'depilex' ); ?></h2>
              </div>

			<?php comment_form(array(
			'title_reply_before' => '<p class="comment-notes"><small>',
			'title_reply_after' => '</small><span class="required">*</span></p>',
			)); ?>

		</div><!--#respond end-->
	<?php endif; ?>
	</div><!--#comments-section end-->
	</div><!--#comments end-->
