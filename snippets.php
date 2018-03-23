

// Execute code based on post ID
<?php global $post; 

   if( $post->ID == 346) { ?>

      <!-- do your stuff here -->

   <?php } ?>

// Echo the featured image URL
<?php echo get_the_post_thumbnail_url() ?>

// Advanced custom fields remove p tags from being inserted
<?php
$variable 			= get_field('variable', false, false);
?>