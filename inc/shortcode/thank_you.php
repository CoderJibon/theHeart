<?php 


/*
** Theme home banner shortcode
*/

function thank_you($one,$two){

$coder = shortcode_atts([
		'bg'		=> ' ',
		'title'		=> 'Thank You',
		'subtitle'	=> 'For Being With Us',
		],$one);
ob_start();
?>

<!-- The Heart Footer Section -->
	<footer class="the-heart-footer-section jarallax" id="the-heart-footer" style="background-image: url(<?php echo wp_get_attachment_image_url($coder['bg']); ; ?>);">
		<div class="container">
			<div class="the-heart-tbl">
				<div class="the-heart-tbl-c">
					<div class="the-heart-footer-content">
						<div class="wow fadeInUp" data-wow-duration="2s">
							<h2><?php echo $coder['title']; ?></h2>
							<h5><?php echo $coder['subtitle']; ?></h5>
						</div>
					</div> <!-- .the-heart-footer-content END -->
				</div> <!-- .the-heart-tbl-c END -->
			</div> <!-- .the-heart-tbl END -->
		</div>
	</footer> 
	<!-- .the-heart-footer-section END -->
<?php
return ob_get_clean();
}

add_shortcode('thank_you','thank_you');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'Thank you',
 		'base'		=> 'thank_you',
 		'category' 	=>  'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'bg',
 					'type'			=> 'attach_image',
 					'heading'		=> 'background image',
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
 		)
 	]);
}


?>