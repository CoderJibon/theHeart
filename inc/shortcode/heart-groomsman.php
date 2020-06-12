<?php 


/*
** Theme heart_groomsman shortcode
*/

function heart_groomsman($one,$two){

$coder = shortcode_atts([
		'titleup'	=> 'Our',
		'titledown'	=> 'Our bridesmaid',
		'parson'	=> '',
		'ph'		=> '',
		'name'		=> '',
		'you'		=> '',
		],$one);
ob_start();
?>
<section class="the-heart-groomsman-section the-heart-bridemaid section-padding" id="the-heart-bridemaid">
		<div class="container">
			<div class="the-heart-section-heading">
				<h4><?php echo $coder['titleup']; ?></h4>
				<h2><?php echo $coder['titledown']; ?></h2>
			</div>
			<div class="the-heart-all-groomsman clear-both">
				<div class="the-heart-groomsman-slider owl-carousel owl-theme">
					<?php $item = vc_param_group_parse_atts($coder['parson']); ?>
					<?php if ($item): ?>
						<?php foreach ($item as $itemes):?>
					<div class="the-heart-single-groomsman">
						<?php if (wp_get_attachment_image_url($itemes['ph'],'full')): ?>
						<a class="the-heart-popup" href="<?php echo wp_get_attachment_image_url($itemes['ph'],'full'); ?>">
							<figure>
								<img src="<?php echo wp_get_attachment_image_url($itemes['ph'],'full'); ?>" alt="The Heart Groomsman" title="The Heart Groomsman">
							</figure>
						</a>							
						<?php endif ?>
						<div class="the-heart-groomsman-bio">
							<h3><?php echo isset($itemes['name']) ? $itemes['name'] : null ; ?></h3>
							<h5><?php echo isset($itemes['you']) ? $itemes['you'] : null ; ?></h5>
						</div> <!-- .the-heart-groomsman-bio END -->
					</div> <!-- .the-heart-single-groomsman END -->
				<?php endforeach; endif; ?>

				</div>
			</div> <!-- .the-heart-all-groomsman END -->
		</div>
	</section>
<?php
return ob_get_clean();
}

add_shortcode('heart_groomsman','heart_groomsman');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'Our bridesmaid',
 		'base'		=> 'heart_groomsman',
 		'category' 	=>  'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'titleup',
 					'type'			=> 'textfield',
 					'heading'		=> 'Title Up :',
 					'description'	=> 'Title Up goes here'
 				],
 				[
 					'param_name'	=> 'titledown',
 					'type'			=> 'textfield',
 					'heading'		=> 'Title Down:',
 					'description'	=> 'Title Down goes here'
 				],
 				[
 					'param_name'	=> 'parson',
 					'type'			=> 'param_group',
 					'heading'		=> 'welcome parson',
 					'params'		=> array(
 						[
 							'param_name'	=> 'ph',
 							'type'			=> 'attach_image',
 							'heading'		=> 'photo',
 							'description'	=> 'photo add'
 						],
 						[
 							'param_name'	=> 'name',
 							'type'			=> 'textfield',
 							'heading'		=> 'name',
 							'description'	=> 'Parson name'
 						],
 						[
 							'param_name'	=> 'you',
 							'type'			=> 'textfield',
 							'heading'		=> 'What is he to you?',
 							'description'	=> 'What is he to you?'
 						],
 					)
 				]
 		)
 	]);
}









?>