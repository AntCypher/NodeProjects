Wordpress Basic Function

<?php echo wp_get_post_parent_id(get_the_ID()); ?> // ChildPage to Find ParentPage ID.

<?php echo get_theme_file_uri('/images/ocean.jpg') ?> // Find and print to theme url.

<?php if(has_excerpt()){
	echo get_the_excerpt();	
} else {
	echo wp_trim_words(get_the_content(), 12, '');
} ?>