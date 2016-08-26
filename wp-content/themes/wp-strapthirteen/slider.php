<?php
// My Custom Slider For WP Strap Code themes
?>

<!-- slideshow -->

    <div id="myCarousel" class="carousel <?php echo get_theme_mod( 'strapthirteen_slider_transition' ); ?>">
        <div class="carousel-inner">
        <?php $firstClass = 'active'; ?> 
        <?php if (have_posts()) : ?>
          
		<?php $strapthirteen_query = new WP_Query(array(
		'category_name'  => get_theme_mod( 'strapthirteen_slide_cat' ),
		'posts_per_page' => get_theme_mod( 'strapthirteen_slide_number' )
		)); ?>
	
    	<?php while ($strapthirteen_query->have_posts()) : $strapthirteen_query->the_post(); ?>
        
        <div class="item <?php echo $firstClass; ?>">
            <?php $firstClass = ""; ?>
			
            <?php the_post_thumbnail('strapthirteen-page-feature'); ?>
            <div class="carousel-caption">
                <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                <p class="lead"><?php the_excerpt(); ?></p>
            </div>
			
        </div>
			
      	<?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>       
        </div>    
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    
    </div><!-- #myCarousel -->