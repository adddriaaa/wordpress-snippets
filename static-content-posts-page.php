<?php
/**
 * Wordpress
 * ==================
 * Static content on Posts Page
 *
 * Add content from the CMS before or after the loop of posts.
 *
 */
?>

<?php
if ( 'page' == get_option('show_on_front') && get_option('page_for_posts') && is_home() ) : the_post();
	$page_for_posts_id = get_option('page_for_posts');
	setup_postdata(get_page($page_for_posts_id));
?>
	<header class="entry-header">
		<?php the_content(); ?>
	</header><!-- header.entry-header -->
<?php
	rewind_posts();
endif;
?>