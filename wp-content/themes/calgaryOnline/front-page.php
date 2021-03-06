<?php get_header(); ?>

    <div id="slider">
    <ul class="bxslider">
    
    	   <?php $args = array(
    	   	    'posts_per_page' => 4,
    	   	    'orderby'  => 'date',
    	   	    'order' => 'DESC',
    	   	    'post_type' => 'post'
    	   );?>
           <?php $slider = new WP_Query($args); ?>
           <?php while($slider->have_posts() ): $slider->the_post(); ?>

              <li>
                  	<a href="<?php the_permalink(); ?>">
                  		<?php the_post_thumbnail('featured'); ?>
                  	</a>
              </li>

           <?php endwhile; wp_reset_postdata(); ?>
           
    </ul>
</div>

   <div class="what-to-visit">
      <?php dynamic_sidebar('front-page'); ?>
   </div>

   <div class="bottom-front-page">

	  <div class="about-us">
	<?php $aboutUs = new WP_Query('page_id=12'); ?>
	<?php while($aboutUs->have_posts() ): $aboutUs->the_post(); ?>
	
		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>

	<?php endwhile; wp_reset_postdata(); ?>
</div>

	<div class="blog-tips">
	<h2>Tips to travel to Toronto</h2>
	<?php $args = array(
		'cat' => 4,
		'posts_per_page' => 2,
		'order' => 'DESC',
		'orderby' => 'date'
	); ?>
	<?php $travelTips = new WP_Query($args); ?>
	<ul>
	<?php while($travelTips->have_posts()): $travelTips->the_post(); ?>
	<li>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('medium-blog'); ?>
		</a>

		<h3><?php the_title(); ?></h3>
		<?php the_excerpt();  ?>

		<a href="<?php the_permalink(); ?>" class="read-more">continue reading</a>

	</li>
	<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</div>

   </div>


<?php get_footer(); ?>