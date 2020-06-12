<?php 


/*
** Theme heart_groomsman_section shortcode
*/

function wedding_ceremony($one,$two){

$coder = shortcode_atts([
		'bg'			=> get_template_directory_uri().'/img/wedding-palace-bg.jpg',
		'card'			=> '',
		'title'			=> 'Wedding Ceremony',
		'time'			=> '',
		'date'			=> '',
		'place'			=> '',
		'add'			=> '',
		'descri'		=> '',
		],$one);
ob_start();
?>
<!-- The Heart Wedding Venue -->
	<section id="our-story" class="the-heart-paper-effect-bg">
		<div class="the-heart-wedding-venue-section" id="the-heart-wedding-venue" style="background-image: url(<?php echo wp_get_attachment_image_url($coder['bg']); ?>);">
			<div class="container">
				<div class="row">
					<?php $item = vc_param_group_parse_atts($coder['card']); ?>

				<?php if ($item ): ?>
					<?php foreach ($item  as $items ): ?>
					<div class="col-md-6 col-sm-12 col-xs-12">
						<div class="the-heart-wdding-venu-content">
							<h2><?php echo isset($items['title']) ? $items['title'] : null; ?></h2>

							<div class="the-heart-wedding-time-schedule clear-both">
								<div class="the-heart-wedding-venue">
									<div class="the-heart-wedding-time-chart clear-both">
										<div class="the-heart-spilt-container">
											<i class="fa fa-clock-o"></i>
											<p><?php echo isset($items['time']) ? $items['time'] : null; ?></p>
										</div> <!-- .the-heart-spilt-container END -->
										<div class="the-heart-spilt-container">
											<i class="fa fa-calendar-o"></i>
											<p><?php echo isset($items['date']) ? $items['date'] : null; ?></p>
										</div> <!-- .the-heart-spilt-container END -->
									</div> <!-- .the-heart-wedding-time-chart END -->

									<div class="the-heart-wedding-palace-address clear-both">
										<h4><?php echo isset($items['place']) ? $items['place'] : null; ?></h4>
										<h5><?php echo isset($items['add']) ? $items['add'] : null; ?></h5>
									</div>
								</div> <!-- .the-heart-wedding-venue END -->
							</div> <!-- .the-heart-wedding-time-schedule END -->

							<p><?php echo isset($items['descri']) ? $items['descri'] :null; ?></p>
						</div> <!-- .the-heart-wdding-venu-content END -->
					</div>
				<?php endforeach; endif; ?>
				</div>
			</div>
		</div> <!-- .the-heart-wedding-venue-section END -->
	</section>
	<!-- .the-heart-paper-effect-bg END -->
	

<?php
return ob_get_clean();
}

add_shortcode('wedding_ceremony','wedding_ceremony');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'Wedding Ceremony/Party',
 		'base'		=> 'wedding_ceremony',
 		'category' 	=>  'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'bg',
 					'type'			=> 'attach_image',
 					'heading'		=> 'background-image :',
 					'description'	=> 'background-image goes here'
 				],
 				[
 					'param_name'	=> 'card',
 					'type'			=> 'param_group',
 					'heading'		=> 'Party card',
 					'params'		=> array(
 						[
 							'param_name'	=> 'title',
 							'type'			=> 'textfield',
 							'heading'		=> 'Title',
 							'description'	=> 'title goes here'
 						],
 						[
 							'param_name'	=> 'time',
 							'type'			=> 'textfield',
 							'heading'		=> 'time',
 							'description'	=> 'time goes here'
 						],
 						[
 							'param_name'	=> 'date',
 							'type'			=> 'textfield',
 							'heading'		=> 'date',
 							'description'	=> 'date goes here'
 						],
 						[
 							'param_name'	=> 'place',
 							'type'			=> 'textfield',
 							'heading'		=> 'Name of the place',
 							'description'	=> 'Name of the place goes here'
 						],
 						[
 							'param_name'	=> 'add',
 							'type'			=> 'textfield',
 							'heading'		=> 'address',
 							'description'	=> 'address goes here'
 						],
 						[
 							'param_name'	=> 'descri',
 							'type'			=> 'textarea',
 							'heading'		=> 'description',
 							'description'	=> 'description goes here'
 						],
 						
 					)
 				]
 		)
 	]);
}









?>