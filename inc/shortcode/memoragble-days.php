<?php 

/*
** Theme memoragble-days shortcode
*/

function memoragble_days($one,$two){

$coder = shortcode_atts([
		'titleup'	=> 'Our',
		'titledown'	=> 'Memoragble days',

		'meetup'	=> '',

		'title'	=> '',
		'photo'	=> '',
		'date'	=> '',
		'des'	=> '',
		],$one);
ob_start();
?>
<!-- The Heart Memorable Days -->
	<section class="the-heart-memoragble-days-section section-padding" id="the-heart-memoragble-days">
		<div class="container">
			<div class="the-heart-section-heading">
				<h4><?php echo $coder['titleup']; ?></h4>
				<h2><?php echo $coder['titledown']; ?></h2>
			</div> <!-- .the-heart-section-heading END -->

			<div class="content-margin-top">
				<?php $item = vc_param_group_parse_atts($coder['meetup']); ?>

				<?php if ($item ): ?>
					<?php foreach ($item  as $items ): ?>
				<div class="the-heart-memoragble-days-wraper">
					<div class="the-heart-memorable-days-single clear-both">	
						<div class="the-heart-spilt-container">
							<div class="the-heart-memoragble-days-content">
								<div class="the-heart-memoragble-days-content-inner">
									<h2><?php echo isset($items['title']) ? $items['title'] : null; ?></h2>
									<h4><?php echo isset($items['date']) ? $items['date'] : null ; ?></h4>
									<p><?php echo isset($items['des']) ? $items['des'] : null; ?></p>
									
								</div> <!-- .the-heart-memoragble-days-content-inner END -->
							</div> <!-- .the-heart-memoragble-days-content END -->
						</div> <!-- .the-heart-spilt-container END -->
						<div class="the-heart-spilt-container">
							<figure class="the-heart-memoragble-days-img">
								<?php if (isset($items['photo'])): ?>
									<img src="<?php echo wp_get_attachment_image_url($items['photo'],'full'); ?>">
								<?php endif ?>
									
								
								
							</figure> <!-- .the-heart-memoragble-days-img END -->
						</div> <!-- .the-heart-spilt-container END -->
					</div> <!-- .the-heart-memorable-days-single END -->
				</div>
				<?php endforeach; endif; ?>
			</div> <!-- .content-margin-top END -->
		</div>
	</section>
	<!-- .the-heart-memoragble-days-section END -->

<?php
return ob_get_clean();
}

add_shortcode('memoragble_days','memoragble_days');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'Memoragble Days',
 		'base'		=> 'memoragble_days',
 		'category' 	=>  'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'titleup',
 					'type'			=> 'textfield',
 					'heading'		=> 'Title UP :',
 					'description'	=> 'Title UP goes here'
 				],
 				[
 					'param_name'	=> 'titledown',
 					'type'			=> 'textfield',
 					'heading'		=> 'Title down :',
 					'description'	=> 'Title down goes here'
 				],
 				[
 					'param_name'	=> 'meetup',
 					'type'			=> 'param_group',
 					'heading'		=> 'The day we Met :',
 					'description'	=> 'The day we Met Add more',
 					'params'		=> array(
 						[
 							'param_name'	=> 'title',
 							'type'			=> 'textfield',
 							'heading'		=> 'Title :',
 							'description'	=> 'Title goes here'
 						],
 						[
 							'param_name'	=> 'photo',
 							'type'			=> 'attach_image',
 							'heading'		=> 'Photo  :',
 							'description'	=> 'Photo add here'
 						],
 						[
 							'param_name'	=> 'date',
 							'type'			=> 'textfield',
 							'heading'		=> 'Date :',
 							'description'	=> 'Date goes here'
 						],
 						[
 							'param_name'	=> 'des',
 							'type'			=> 'textarea',
 							'heading'		=> 'description :',
 							'description'	=> 'description goes here'
 						],
 					)
 				],
 		)
 	]);
}









?>