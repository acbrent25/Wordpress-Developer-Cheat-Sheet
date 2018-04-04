

// Execute code based on post ID
<?php  if (is_single('17')) { ?>

   <!-- do your stuff here -->

<?php } ?>

// Echo the featured image URL
<?php echo get_the_post_thumbnail_url() ?>

// Advanced custom fields remove p tags from being inserted
<?php
$variable 			= get_field('variable', false, false);
?>

// Echo the current year only
<?php echo date('Y'); ?>

// Hide editor on specific pages.

add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
	  // Get the Post ID.
	  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	  
	  if( !isset( $post_id ) ) return;
	  

	  $pgname = get_the_title($post_id);
	  
	  if($pgname == 'Home' || 'Strategic Support' || 'Customer Service' ){ 
	    remove_post_type_support('page', 'editor');
  	  }
  
}

// Change Title on Post Types
function wpb_change_title_text( $title ){
     $screen = get_current_screen();
  
     if  ( 'testimonial' == $screen->post_type ) {
          $title = 'Customer Name';
     }  elseif ( 'team_member' == $screen->post_type ) {
          $title = 'Team Member Name';
     } 	  elseif ( 'support_features' == $screen->post_type ) {
          $title = 'Support Feature Title';
     }     
     return $title;           
}
  
add_filter( 'enter_title_here', 'wpb_change_title_text' );

// Woocommerce: Exclude states etc. from shipping

// Do not ship to Porto Rico (PR) Woo 2.1+ and other places
 
function only_ship_to_conus( $rates, $package ) {
global $woocommerce;
$excluded_states = array( 'PR','AK','HI','AA','AE','AP','AS','GU','MP','UM','VI' );
if( in_array( WC()->customer->shipping_state, $excluded_states ) ) {
    $rates = array();
}
return $rates;
}
 
add_filter( 'woocommerce_package_rates', 'only_ship_to_conus', 10, 2 );

// Verticle Align Logo row with Bootstrap 4
<div class="section" id="logo-row">
	<div class="container">
		<div class="row">
			<div class="col-md-2 offset-md-1 h-100 my-auto text-center">
				<img src="<?php echo get_template_directory_uri() ?>/img/logo-henkel.jpg" alt="henkel logo" width="140" height="96">
			</div>
			<div class="col-md-2 h-100 my-auto text-center">
				<img src="<?php echo get_template_directory_uri() ?>/img/logo-huhtamaki.jpg" alt="huhtamaki logo" width="252" height="96">
			</div>
			<div class="col-md-2 h-100 my-auto text-center">
				<img src="<?php echo get_template_directory_uri() ?>/img/logo-oracle.jpg" alt="oracle logo" width="220" height="96">
			</div>
			<div class="col-md-2 h-100 my-auto text-center">
				<img src="<?php echo get_template_directory_uri() ?>/img/logo-amazon.jpg" alt="amazon logo" width="168" height="96">
			</div>
			<div class="col-md-2 h-100 my-auto text-center">
				<img src="<?php echo get_template_directory_uri() ?>/img/logo-international-paper.jpg" alt="international paper logo" width="379" height="96">
			</div>
		</div>
	</div>
</div>


