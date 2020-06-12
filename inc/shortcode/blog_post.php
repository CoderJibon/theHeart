<?php 


/*
** Theme home banner shortcode
*/

function blog_post($one,$two){

$coder = shortcode_atts([
		'title'	=> 'Wedding Journal',
		'pcount'	=> '6',
		],$one);
ob_start();
?>
<section class="the-heart-wedding-jurnal-section section-padding" id="the-heart-wedding-jurnal">
		<?php 
			$pcc = $coder['pcount'];
		$bb = new wp_query([
					'post_type'	=> 'post',
					'posts_per_page'=> isset($pcc) ? $pcc : null ,
		]); ?>
	
		<div class="container">
			<div class="the-heart-section-heading">
				<h2><?php echo $coder['title'];?></h2>
			</div> <!-- .the-heart-section-heading END -->
			<div class="row content-margin-top">
			<?php while ($bb->have_posts()):$bb->the_post(); ?>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="the-heart-single-journal">
						<figure>
							<?php the_post_thumbnail(); ?>

							<figcaption>
								<a href="<?php the_permalink(); ?>"><h4>Read more...</h4></a>
							</figcaption>
						</figure>
						<div class="the-heart-wedding-jurnal-footer">
							<h5><span><?php the_time('d'); ?></span> <?php the_time('M Y'); ?></h5>
							<h6><?php the_title(); ?></h6>
							<p>by: <?php the_author(); ?></p>
						</div> <!-- .the-heart-wedding-jurnal-footer END -->
					</div> 
					<!-- .the-heart-single-journal END -->
				</div>
				<br>
			<?php endwhile; ?>
			</div>
		</div>
	<div class="the-heart-btn-holder">
	<a href="<?php the_permalink(); ?>" class="the-heart-btn pink-btn">More Blog</a>
</div>

</section>

<?php
return ob_get_clean();
}

add_shortcode('blog_post','blog_post');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'Custom Blog post',
 		'base'		=> 'blog_post',
 		'category' 	=> 'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'title',
 					'type'			=> 'textfield',
 					'heading'		=> 'Title :',
 					'description'	=> 'title goes here'
 				],
 				[
 					'param_name'	=> 'pcount',
 					'type'			=> 'textfield',
 					'heading'		=> 'post count :',
 					'description'	=> 'per post show count'
 				]
 		)
 	]);
}


?>