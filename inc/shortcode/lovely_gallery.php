<?php 


/*
** Theme home banner shortcode
*/

function lovely_gallery($one,$two){

$coder = shortcode_atts([
		'title'		=> 'Lovely Gallery',
		'bg'		=> get_template_directory_uri().'/img/gallery-bg.jpg',
		'subtitle'	=> 'Our',
		'gall'		=> ''
		],$one);
ob_start();
?>
<section class="the-heart-paper-effect-bg" id="the-heart-gallery">
		<div class="the-heart-lovely-gallery-section" style="background-image: url(<?php echo wp_get_attachment_image_url($coder['bg'],'full'); ?>);">
			<div class="container">
				<div class="the-heart-section-heading">
					<h4><?php echo $coder['subtitle'];  ?></h4>
					<h2><?php echo $coder['title'];  ?></h2>
				</div> <!-- .the-heart-section-heading END -->
				<div class="content-margin-top">
					<div id="the-heart-gallery-grid" class="the-heart-gallery-grid">
						<?php $gall = explode(',',$coder['gall']);
						?>
					<?php if ($gall): ?>
					<?php foreach ($gall as $values): ?>
						<div class="the-heart-gallery-item">
							<a class="the-heart-popup" href="<?php echo wp_get_attachment_image_url($values,'full'); ?>">
								<figure class="the-heart-single-gallery">
									<img src="<?php echo wp_get_attachment_image_url($values,'full'); ?>" alt="The Heart Gallery Image" title="The Heart Gallery Image">
								</figure> <!-- .the-heart-single-gallery END -->
							</a>
						</div> <!-- .the-heart-gallery-item END -->
					<?php endforeach; endif ?>
					</div>


				</div>
			</div>
		</div> <!-- .the-heart-lovely-gallery-section END -->
	</section>
<?php
return ob_get_clean();
}

add_shortcode('lovely_gallery','lovely_gallery');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'Lovely Gallery',
 		'base'		=> 'lovely_gallery',
 		'category' 	=>  'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'bg',
 					'type'			=> 'attach_image',
 					'heading'		=> 'background image :',
 					'description'	=> 'background image goes here'
 				],
 				[
 					'param_name'	=> 'title',
 					'type'			=> 'textfield',
 					'heading'		=> 'Title :',
 					'description'	=> 'title goes here'
 				],
 				[
 					'param_name'	=> 'subtitle',
 					'type'			=> 'textfield',
 					'heading'		=> 'Sub Title :',
 					'description'	=> 'Sub Title goes here'
 				],
 				[
 					'param_name'	=> 'gall',
 					'type'			=> 'attach_images',
 					'heading'		=> 'Gallery :',
 					'description'	=> 'Gallery goes here'
 				],
 		)
 	]);
}



?>