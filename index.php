<?php get_header(); ?>

	<main role="main" class="frow content-start justify-between">
		<!-- section -->
		<section class="col-md-1-3">
			<div class="frow m-20 direction-column column-start">
			<h1 style="margin: 1em"> Últimos Posts</h1>

			<?php
			$args = array( 'category'=>1, 'numberposts' => 8, 'order'=> 'DSC', 'orderby' => 'post_date' );
			$postslist = get_posts( $args );
			foreach ($postslist as $post) :  setup_postdata($post); ?> 
			    <a class="card " href="<?php the_permalink(); ?>">
			        <b class="card-title"><?php the_title(); ?>   </b>
			        <div><?php echo wp_trim_words(get_the_excerpt(),30); ?></div>
			        <div class="card-footer"><?php the_date(); ?></div>
			    </a>
			<?php endforeach; ?>

		</section>
		<!-- /section -->
		<section class="col-md-2-3 frow direction-column">
			<div>
				<div class="m-20 frow row-start">
				<?php
				$cat = get_category_by_slug("imagenes");
				$args = array('category'=>$cat->cat_ID, 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'post_date' );
				$postslist = get_posts( $args );
				foreach ($postslist as $post) :  setup_postdata($post); ?> 
					<div class="col-md-1-3">
				    <a class="card" href="<?php the_permalink(); ?>">
				    	<div style="background-image:url(<?php the_post_thumbnail_url(); ?>)" class="card-image"></div>
				        <b class="card-title"><?php the_title(); ?>   </b>
				    </a>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
			<div>
				<div class="m-20 frow row-start">
				<?php
				$cat = get_category_by_slug("videos");
				$args = array('category'=>$cat->cat_ID, 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'post_date' );
				$postslist = get_posts( $args );
				$n = 0;
				foreach ($postslist as $post) :  setup_postdata($post); 
					if($n==0 || $n==3) echo "<div class='col-md-2-3 col-xs-1-1'>";
					else if($n>3) echo "<div class='col-md-1-2'>";
					else echo "<div class='col-md-1-3 col-xs-1-1'>";
					?> 
				    <a class="card" href="<?php the_permalink(); ?>">
				    	<div style="background-image:url(<?php the_post_thumbnail_url(); ?>)" class="card-image"></div>
				    </a>
					</div>
				<?php $n++;endforeach; ?>
				</div>
			</div>
		</section>
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
