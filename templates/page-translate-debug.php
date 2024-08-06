<?php
/*
Template Name: Translation debug
*/
?>
<?php get_header(); ?>

<?php  
	
	function printr($data) {
	   echo "<pre>";
	      print_r($data);
	   echo "</pre>";
	}
	

	$strings = getStrings(); 
	printr($strings);

		
	$api_url = "https://api.weglot.com/translate?api_key=wg_f2cdc0358b540411bdb6a61f51fb88cf7";

	$response = wp_remote_post(
		esc_url_raw( $api_url ),
		array(
			'headers' => array(
				'Content-Type' => 'application/json'
			),
			'body' => array(
				'l_from' => 'en',
				'l_to'=> 'fr',
				'request_url'=> home_url(),
				'bot'=> 0,
				'words' => $strings,
			),
		)
	);

	if( is_wp_error( $response ) ) {
		echo "error";
	    return false;
	}

	printr($response);

?>

<?php get_footer(); ?>