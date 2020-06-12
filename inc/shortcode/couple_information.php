<?php 


/*
** Theme couple information shortcode
*/

function couple_information($one,$two){

$coder = shortcode_atts([
		'queen'		=> 'Rose Merry',
		'imgf'		=> get_template_directory_uri().'/img/queen-img.png',	
		'subtitle'	=> 'The Bride',
		'desf'		=> 'it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and ',
		'king'		=> 'William Jack',
		'imgk'		=> get_template_directory_uri().'/img/introduction-gentel-man-img.png',
		'subking'	=> 'The Bride',
		'desk'		=> 'it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and '
		],$one);
ob_start();
?>
<!-- The Heart Introduction -->
	<section class="the-heart-introduction-section section-padding" id="tthe-heart-intro">
		<div class="container">
			<div class="the-heart-introduction-wraper">
				<div class="the-heart-single-introduction clear-both">
					<div class="the-heart-spilt-container">
						<div class="the-heart-intruduction-content-txt">
							<h3><?php echo $coder['queen']; ?></h3>
							<h4><?php echo $coder['subtitle']; ?></h4>
							<p><?php echo $coder['desf']; ?></p>
						</div> <!-- .the-heart-intruduction-content-txt END -->
					</div> <!-- .the-heart-spilt-container END -->
					<div class="the-heart-spilt-container">
						<a class="the-heart-popup" href="<?php echo wp_get_attachment_image_url($coder['imgf'],'full') ; ?>">
							<figure class="the-heart-intruduction-content-img">
								<img src="<?php echo wp_get_attachment_image_url($coder['imgf'],'full'); ?>" alt="The Heart Introduction Image" title="The Heart Introduction Image">
							</figure> <!-- .the-heart-intruduction-content-img END -->
						</a>
					</div> <!-- .the-heart-spilt-container END -->
				</div> <!--  .the-heart-single-introduction END -->

				<div class="the-heart-single-introduction clear-both">
					<div class="the-heart-spilt-container">
						<div class="the-heart-intruduction-content-txt">
							<h3><?php echo $coder['king']; ?></h3>
							<h4><?php echo $coder['subking']; ?></h4>
							<p><?php echo $coder['desk']; ?></p>
						</div> <!-- .the-heart-intruduction-content-txt END -->
					</div> <!-- .the-heart-spilt-container END -->
					<div class="the-heart-spilt-container">
						<figure class="the-heart-intruduction-content-img">
							<img src="<?php echo wp_get_attachment_image_url($coder['imgk'],'full') ; ?>" alt="The Heart Introduction Image" title="The Heart Introduction Image">
						</figure> <!-- .the-heart-intruduction-content-img END -->
					</div> <!-- .the-heart-spilt-container END -->
				</div> <!--  .the-heart-single-introduction END -->
			</div> <!-- .the-heart-introduction-wraper END -->
		</div>
	</section>
	<!-- .the-heart-introduction-section END -->
<?php
return ob_get_clean();
}

add_shortcode('couple_information','couple_information');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'Couple Information',
 		'base'		=> 'couple_information',
 		'category' 	=>  'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'queen',
 					'type'			=> 'textfield',
 					'heading'		=> 'Queen name :',
 					'description'	=> 'Queen name here'
 				],
 				[
 					'param_name'	=> 'imgf',
 					'type'			=> 'attach_image',
 					'heading'		=> 'Queen Photo :',
 					'description'	=> 'Queen Photo add'
 				],
 				[
 					'param_name'	=> 'subtitle',
 					'type'			=> 'textfield',
 					'heading'		=> 'Queen sub title :',
 					'description'	=> 'Queen sub title here'
 				],
 				[
 					'param_name'	=> 'desf',
 					'type'			=> 'textarea',
 					'heading'		=> 'Queen description :',
 					'description'	=> 'Queen description goes here'
 				],

 				[
 					'param_name'	=> 'king',
 					'type'			=> 'textfield',
 					'heading'		=> 'king name :',
 					'description'	=> 'king name here'
 				],
 				[
 					'param_name'	=> 'imgk',
 					'type'			=> 'attach_image',
 					'heading'		=> 'king Photo :',
 					'description'	=> 'king Photo add'
 				],
 				[
 					'param_name'	=> 'subking',
 					'type'			=> 'textfield',
 					'heading'		=> 'king sub title :',
 					'description'	=> 'king sub title here'
 				],
 				[
 					'param_name'	=> 'desk',
 					'type'			=> 'textarea',
 					'heading'		=> 'king description :',
 					'description'	=> 'king description goes here'
 				],


 		)
 	]);
}









?>