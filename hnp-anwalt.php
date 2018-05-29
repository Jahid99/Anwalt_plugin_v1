<?php  
/*
*	Plugin Name: HNP-Anwalt
*	Plugin URI: http://www.anwalt.de
*	Description: Grabs ratings from www.anwalt.de .
*	Version: 1.0
*	Author: HNP-Anwalt
*	Author URI: http://www.anwalt.de
*	License: HNP-Anwalt
*
*/

$plugin_url = WP_PLUGIN_URL . '/hnp-anwalt';

$options = array();
	function hnp_anwalt_menu(){
		add_menu_page(
			'HNP-Anwalt Plugin',
			'HNP-Anwalt',
			'manage_options',
			'hnp_anwalt_options',
			'hnp_anwalt_display'
		);
	}
	add_action('admin_menu', 'hnp_anwalt_menu');

	function hnp_anwalt_display(){
		if (!current_user_can('manage_options' )){
			wp_die('You do not have enough permission to view this page');
		}

		global $plugin_url;
		global $options;

		if (isset($_POST['form_submit'])){
		// These files need to be included as dependencies when on the front end.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		echo '<br><br><h2 style="color:green">Updated Successfully</h2>';

		$name = esc_html($_POST['name'] );
		$phone = esc_html($_POST['phone'] );			
		$address = esc_html($_POST['address'] );			
		$country = esc_html($_POST['country'] );			
		$profile_link = esc_html($_POST['profile_link'] );
		$profile_link=rtrim($profile_link,"/ ");		
		$options['name'] = $name;
		$options['phone'] = $phone;
		$options['address'] = $address;
		$options['country'] = $country;
		$options['profile_link'] = $profile_link;
		$options['last_updated'] = time();
		update_option('hnp_anwalt', $options);
		}

	if (isset($_POST['form_submit2'])){
		// These files need to be included as dependencies when on the front end.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		echo '<br><br><h2 style="color:green">Updated Successfully</h2>';

		$name2 = esc_html($_POST['name2'] );
		$phone2 = esc_html($_POST['phone2'] );			
		$address2 = esc_html($_POST['address2'] );			
		$country2 = esc_html($_POST['country2'] );			
		$profile_link2 = esc_html($_POST['profile_link2'] );
		$profile_link2=rtrim($profile_link2,"/ ");			
		$options['name2'] = $name2;
		$options['phone2'] = $phone2;
		$options['address2'] = $address2;
		$options['country2'] = $country2;
		$options['profile_link2'] = $profile_link2;
		$options['last_updated'] = time();
		update_option('hnp_anwalt2', $options);
	}

	if (isset($_POST['form_submit3'])){
		// These files need to be included as dependencies when on the front end.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		echo '<br><br><h2 style="color:green">Updated Successfully</h2>';

		$name3 = esc_html($_POST['name3'] );
		$phone3 = esc_html($_POST['phone3'] );			
		$address3 = esc_html($_POST['address3'] );			
		$country3 = esc_html($_POST['country3'] );			
		$profile_link3 = esc_html($_POST['profile_link3'] );
		$profile_link3=rtrim($profile_link3,"/ ");				
		$options['name3'] = $name3;
		$options['phone3'] = $phone3;
		$options['address3'] = $address3;
		$options['country3'] = $country3;
		$options['profile_link3'] = $profile_link3;
		$options['last_updated'] = time();
		update_option('hnp_anwalt3', $options);
	}

	if (isset($_POST['form_submit4'])){
		// These files need to be included as dependencies when on the front end.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		echo '<br><br><h2 style="color:green">Updated Successfully</h2>';

		$name4 = esc_html($_POST['name4'] );
		$phone4 = esc_html($_POST['phone4'] );			
		$address4 = esc_html($_POST['address4'] );			
		$country4 = esc_html($_POST['country4'] );			
		$profile_link4 = esc_html($_POST['profile_link4'] );
		$profile_link4=rtrim($profile_link4,"/ ");			
		$options['name4'] = $name4;
		$options['phone4'] = $phone4;
		$options['address4'] = $address4;
		$options['country4'] = $country4;
		$options['profile_link4'] = $profile_link4;
		$options['last_updated'] = time();
		update_option('hnp_anwalt4', $options);
	}

	if (isset($_POST['form_submit5'])){
		// These files need to be included as dependencies when on the front end.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		echo '<br><br><h2 style="color:green">Updated Successfully</h2>';

		$name5 = esc_html($_POST['name5'] );
		$phone5 = esc_html($_POST['phone5'] );			
		$address5 = esc_html($_POST['address5'] );			
		$country5 = esc_html($_POST['country5'] );						
		$profile_link5 = esc_html($_POST['profile_link5'] );
		$profile_link5=rtrim($profile_link5,"/ ");						
		$options['name5'] = $name5;
		$options['phone5'] = $phone5;
		$options['address5'] = $address5;
		$options['country5'] = $country5;
		$options['profile_link5'] = $profile_link5;
		$options['last_updated'] = time();
		update_option('hnp_anwalt5', $options);
	}

	if (isset($_POST['form_submit_6'])){
		// These files need to be included as dependencies when on the front end.
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );

		echo '<br><br><h2 style="color:green">Updated Successfully</h2>';

		$css1 = $_POST['css1'] ;						
		$options['css1'] = $css1;
		update_option('css1_db', $options);
	}

	$options = get_option('hnp_anwalt');
		if ($options != ''){
			$name = $options['name'];
			$phone = $options['phone'];
			$address = $options['address'];
			$country = $options['country'];
			$profile_link = $options['profile_link'];
		}

	$options = get_option('hnp_anwalt2');
		if ($options != ''){
			$name2 = $options['name2'];
			$phone2 = $options['phone2'];
			$address2 = $options['address2'];
			$country2 = $options['country2'];
			$profile_link2 = $options['profile_link2'];
		}

	$options = get_option('hnp_anwalt3');
		if ($options != ''){
			$name3 = $options['name3'];
			$phone3 = $options['phone3'];
			$address3 = $options['address3'];
			$country3 = $options['country3'];
			$profile_link3 = $options['profile_link3'];
		}

	$options = get_option('hnp_anwalt4');
		if ($options != ''){
			$name4 = $options['name4'];
			$phone4 = $options['phone4'];
			$address4 = $options['address4'];
			$country4 = $options['country4'];
			$profile_link4 = $options['profile_link4'];
		}

	$options = get_option('hnp_anwalt5');
		if ($options != ''){
			$name5 = $options['name5'];
			$phone5 = $options['phone5'];
			$address5 = $options['address5'];
			$country5 = $options['country5'];
			$profile_link5 = $options['profile_link5'];
		}

	$options = get_option('css1_db');
		if ($options != ''){
			$css1 = $options['css1'];
		}

	require('inc/options-page-wrapper.php');
	}


	


?>
<?php

function header_script(){?> 

<style type="text/css">
<?php
$options = get_option('css1_db');
		if ($options != ''){
			$css1 = $options['css1'];
		}
		ob_start();
if($options != '') {



echo $css1;
 }else{ ?>
	.hnpsnippet1{ color:blue; } .hnpsnippet1>a{ color:blue; } .hnpsnippet2{ color:blue; }  
<?php	} 
		
?>
</style>
<?php }


add_action('wp_head','header_script');



ob_start();
	function hnp_anwalt_shortcode($atts, $content = null){
		global $post;
		$options = get_option('hnp_anwalt');
		if ($options != ''){
			$name = $options['name'];
			$phone = $options['phone'];
			$address = $options['address'];
			$country = $options['country'];
			$profile_link = $options['profile_link'];
		}
		ob_start();
		if($profile_link!=''){
			require ('inc/front-end.php');
		}
		$content = ob_get_clean();
		return $content;
	}
	add_shortcode('hnp-anwalt-1', 'hnp_anwalt_shortcode' );

	function hnp_anwalt_shortcode2($atts, $content = null){
		global $post;
		$options = get_option('hnp_anwalt2');
		if ($options != ''){
			$name2 = $options['name2'];
			$phone2 = $options['phone2'];
			$address2 = $options['address2'];
			$country2 = $options['country2'];
			$profile_link2 = $options['profile_link2'];
		}
		ob_start();
		if($profile_link2!=''){
			require ('inc/front-end2.php');
		}
		$content = ob_get_clean();
		return $content;
	}
	add_shortcode('hnp-anwalt-2', 'hnp_anwalt_shortcode2' );

	function hnp_anwalt_shortcode3($atts, $content = null){
		global $post;
		$options = get_option('hnp_anwalt3');
		if ($options != ''){
			$name3 = $options['name3'];
			$phone3 = $options['phone3'];
			$address3 = $options['address3'];
			$country3 = $options['country3'];
			$profile_link3 = $options['profile_link3'];
		}
		ob_start();
		if($profile_link3!=''){
			require ('inc/front-end3.php');
		}
		$content = ob_get_clean();
		return $content;
	}
	add_shortcode('hnp-anwalt-3', 'hnp_anwalt_shortcode3' );

	function hnp_anwalt_shortcode4($atts, $content = null){
		global $post;
		$options = get_option('hnp_anwalt4');
		if ($options != ''){
			$name4 = $options['name4'];
			$phone4 = $options['phone4'];
			$address4 = $options['address4'];
			$country4 = $options['country4'];
			$profile_link4 = $options['profile_link4'];
		}
		ob_start();
		if($profile_link4!=''){
			require ('inc/front-end4.php');
		}
		$content = ob_get_clean();
		return $content;
	}
	add_shortcode('hnp-anwalt-4', 'hnp_anwalt_shortcode4' );
	
	function hnp_anwalt_shortcode5($atts, $content = null){
		global $post;
		$options = get_option('hnp_anwalt5');
		if ($options != ''){
			$name5 = $options['name5'];
			$phone5 = $options['phone5'];
			$address5 = $options['address5'];
			$country5 = $options['country5'];
			$profile_link5 = $options['profile_link5'];
		}


		


		$options = get_option('hnp_anwalt');
		if ($options != ''){
			$profile_link = $options['profile_link'];
		}
		ob_start();

		$options = get_option('hnp_anwalt2');
		if ($options != ''){
			$profile_link2 = $options['profile_link2'];
		}
		ob_start();

		$options = get_option('hnp_anwalt3');
		if ($options != ''){
			$profile_link3 = $options['profile_link3'];
		}
		ob_start();

		$options = get_option('hnp_anwalt4');
		if ($options != ''){
			$profile_link4 = $options['profile_link4'];
		}
		ob_start();

		$options = get_option('hnp_anwalt5');
		if ($options != ''){
			$name5 = $options['name5'];
			$phone5 = $options['phone5'];
			$address5 = $options['address5'];
			$country5 = $options['country5'];
			$profile_link5 = $options['profile_link5'];
		}
		ob_start();

		require ('inc/front-end-all.php');

		$content = ob_get_clean();
		return $content;
	}
	add_shortcode('hnp-anwalt-alle', 'hnp_anwalt_shortcode5' );
	?>