<?php 


/*
** Theme you_are_attending shortcode
*/

function you_are_attending($one,$two){

$coder = shortcode_atts([
		'title'				=> 'Jack  &  Rose',
		'Ceremony'			=> 'Getting Married',
		'date'				=> '12 March 2018',
		'attendingtitle'	=> 'Are You Attending?',
		'sub'				=> 'To Ensure your attendence please fill the RSVP',
		'tex'				=> 'Reservation Here',
		],$one);
ob_start();
?>
<!-- The Heart You Are Attending -->
	<section class="the-heart-you-are-attending-section section-padding" id="the-heart-attending">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="the-heart-attending-content">
						<div class="the-heart-attending-content-inner">
							<div class="the-heart-attending-content-inner-top">
								<h2><?php echo $coder['title']; ?></h2>
								<h3><?php echo $coder['Ceremony']; ?></h3>
								<div class="the-heart-floral-txt">
									<h3><?php echo $coder['date']; ?></h3>
								</div> <!-- .the-heart-floral-txt END -->
							</div>
							<div class="the-heart-attending-content-inner-bottom">
								<h2><?php echo $coder['attendingtitle']; ?></h2>
								<p><?php echo $coder['sub']; ?></p>
								<a class="the-heart-btn simple-btn"><?php echo $coder['tex']; ?></a>
							</div>
						</div> <!-- .the-heart-attending-content-inner END -->
					</div> <!-- .the-heart-attending-content END -->
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="the-heart-attending-form">

						<form action="" method="post">
							<label for="name">Name</label>
							<input type="text" name="name" >

							<label for="email">Email</label>
							<input type="text" name="email">

							<label for="guets">guest</label>
							<select name="guest">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<label for="attending">Attending Event</label>
							<select name="attending_event">
								<option value="Wedding Day">Wedding Day</option>
								<option value="Wedding Day">Wedding Day</option>
								<option value="The party">The party</option>
							</select>
							<input type="submit" value="I’m Attending">
						</form>

<?php 

if( isset( $_POST['rsvp_submit'] ) ){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $guest = $_POST['guest'];
    $attending_event = $_POST['attending_event'];
    $authormail = get_bloginfo('admin_email');
    $tt = get_bloginfo('title');
    $body = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Document</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            </head>
            <body >
                <div class="mt-5"></div>
                <div style="" class="card w-50 text-center m-auto">
                    <h1>Hi there !</h1>
                    <h3>Attending Event Mail From : <span>'.$tt;

    $body .= '</span></h3>
    				<hr />
                    <h2 class="text-success"><span style="font-size: 20px; text-transform: uppercase;">Attending Name : </span><span>'.$name.'</span></h2>
                    <h2 class="text-success"><span style="font-size: 20px; text-transform: uppercase;">Attending Email Address : </span><span>'.$email.'</span></h2>
                    <h2 class="text-success"><span style="font-size: 20px; text-transform: uppercase;">guest Count : </span><span>'.$guest.'</span></h2>
                    <h2 class="text-success"><span style="font-size: 20px; text-transform: uppercase;">Attending Event : </span><span>'.$attending_event.'</span></h2>';
    
    $body .= ' <hr />
                </div>
            </body>
            </html>';
     $header = "Content-Type:text/html\r\n";
    

    $smail = wp_mail($authormail, "NEW SUBSCRIBER ADDED YOUR SITE",$body,$header);

    if( $smail )
    {
        echo '<div class="contact-alert-message">
                            <div class="success"><i class="fa fa-check-circle"></i> Your message has been sent successfully.</div>
                        </div>';
    }else{
        echo '<div class="contact-alert-message">
                            <div class="error"><i class="fa fa-exclamation-circle"></i> Sorry, error occured found, try again.</div>
                        </div>';
    }

}
    
  
?> 


					</div> <!-- .the-heart-attending-form END -->
				</div>
			</div>
		</div>
	</section>
	<!-- .the-heart-you-are-attending-section END -->
<?php
return ob_get_clean();
}

add_shortcode('you_are_attending','you_are_attending');

if (function_exists('vc_map')) {
 	vc_map([
 		'name'		=> 'you are attending',
 		'base'		=> 'you_are_attending',
 		'category' 	=>  'The heart',
 		'icon'		=> get_template_directory_uri().'/img/love.png',
 		'params'	=> array(
 				[
 					'param_name'	=> 'title',
 					'type'			=> 'textfield',
 					'heading'		=> 'couple name :',
 					'description'	=> 'couple name goes here'
 				],
 				[
 					'param_name'	=> 'Ceremony',
 					'type'			=> 'textfield',
 					'heading'		=> 'Ceremony :',
 					'description'	=> 'Ceremony goes here'
 				],
 				[
 					'param_name'	=> 'date',
 					'type'			=> 'textfield',
 					'heading'		=> 'date :',
 					'description'	=> 'date goes here'
 				],
 				[
 					'param_name'	=> 'attendingtitle',
 					'type'			=> 'textfield',
 					'heading'		=> 'attending title :',
 					'description'	=> 'attending title goes here'
 				],
 				[
 					'param_name'	=> 'sub',
 					'type'			=> 'textfield',
 					'heading'		=> 'attending sub title :',
 					'description'	=> 'attending sub title goes here'
 				],
 				[
 					'param_name'	=> 'tex',
 					'type'			=> 'textfield',
 					'heading'		=> 'From taxt :',
 					'description'	=> 'From taxt goes here'
 				],
 		)
 	]);
}









?>