<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="col-md-1-3">
	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class("card"); ?>>

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="background-image:url(<?php the_post_thumbnail_url(); ?>)" class="card-image"> 
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<a class="card-title" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		<!-- /post title -->
		<div><?php echo wp_trim_words(get_the_excerpt(),40); ?></div>
		<!-- post details -->
		<!--<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
		<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>-->
		<!-- /post details -->

		<?php edit_post_link(); ?>

	</article>
	<!-- /article -->
</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
