<?php 


/*
** Theme home banner shortcode
*/

function home_slider($one,$two){

$coder = shortcode_atts([
		'title'		=> 'Jack  &  Rose',
		'bg'		=> get_template_directory_uri().'/img/love-bg2.jpg',
		'married'	=> 'Getting Married ',
		'date'		=> '12 March 2018',
		],$one);
ob_start();
?>
<!-- The Heart Welcome Section -->
	<section id="home" class="the-heart-welcome-section jarallax black-overly" style="background-image: url(<?php echo wp_get_attachment_image_url($coder['bg'],'full'); ?>);">
		
		<div class="bubbles">
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
			<div class="bubble">
				<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
			</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  				<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
			<div class="bubble">
				<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
			</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  				<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
			<div class="bubble">
				<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
			</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
	  		<div class="bubble">
	  			<svg class="heart" viewBox="0 0 32 32">
					<path d="M23.6 2c-3.363 0-6.258 2.736-7.599 5.594-1.342-2.858-4.237-5.594-7.601-5.594-4.637 0-8.4 3.764-8.4 8.401 0 9.433 9.516 11.906 16.001 21.232 6.13-9.268 15.999-12.1 15.999-21.232 0-4.637-3.763-8.401-8.4-8.401z"></path>
				</svg>
	  		</div>
		</div>
		<div class="container">
			<div class="the-heart-welcome-tbl">
				<div class="the-heart-welcome-tbl-c">
					<div class="the-heart-welcome-content">
						<div class="wow fadeInUp" data-wow-duration="2s">
							<h1><?php echo $coder['title']; ?></h1>
							<h4><?php echo $coder['married']; ?></h4>
							<div class="the-heart-floral-txt">
								<h3><?php echo $coder['date']; ?></h3>
							</div> <!-- .the-heart-floral-txt END -->
						</div>
					</div> <!-- .the-heart-welcome-content END -->
				</div> <!-- .the-heart-welcome-tbl-c END -->
			</div> <!-- .the-heart-welcome-tbl END -->
		</div> <!-- .the-heart-welcome-tbl END -->
	</section> 
	<!-- .the-heart-welcome-floral-bg END -->
<?php
return ob_get_clean();
}

add_shortcode('home_slider','home_slider');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'Home Banner',
 		'base'		=> 'home_slider',
 		'category' 	=>  'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'title',
 					'type'			=> 'textfield',
 					'heading'		=> 'Couple :',
 					'description'	=> 'couple goes here'
 				],
 				[
 					'param_name'	=> 'bg',
 					'type'			=> 'attach_image',
 					'heading'		=> 'Couple background image :',
 					'description'	=> 'Couple background image add'
 				],
 				[
 					'param_name'	=> 'married',
 					'type'			=> 'textfield',
 					'heading'		=> 'Married states :',
 					'description'	=> 'Married states goes here'
 				],
 				[
 					'param_name'	=> 'date',
 					'type'			=> 'textfield',
 					'heading'		=> 'Married Date :',
 					'description'	=> 'Married Date goes here'
 				],
 		)
 	]);
}



?>