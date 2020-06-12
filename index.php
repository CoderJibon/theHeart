<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coderjibon
 */
get_header();
?>
<br/>
<br/>
<section class="the-heart-wedding-jurnal-section section-padding" id="the-heart-wedding-jurnal">
		<?php 
			
		$bb = new wp_query([
					'post_type'	=> 'post',
					'posts_per_page'=> -1,
		]); ?>
	
		<div class="container">
			<div class="the-heart-section-heading">
			</div> <!-- .the-heart-section-heading END -->
			<div class="row content-margin-top">
			<?php while ($bb->have_posts()):$bb->the_post(); ?>
				<div class="col_lg_12 col-md-12 col-sm-12 col-xs-12">
					<div class="the-heart-single-journal">
						<figure>
							<?php the_post_thumbnail(); ?>							
						</figure>

						<div class="the-heart-wedding-jurnal-footer">
							<h5><span><?php the_time('d'); ?></span> <?php the_time('M Y'); ?></h5>
							<h6><?php the_title(); ?></h6>
							<p>by: <?php the_author(); ?></p>
						</div> <!-- .the-heart-wedding-jurnal-footer END -->
						<div>
							<?php the_content(); ?>
						</div>
					</div> 
					<!-- .the-heart-single-journal END -->
				</div>
				
			<?php endwhile; ?>
			</div>
		</div>
</section>
<?php get_footer(); ?>