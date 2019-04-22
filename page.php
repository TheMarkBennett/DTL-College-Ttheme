<?php
/**
 * Template Name: Basic
 * Template Post Type: degree
 */
?>
<?php get_header(); the_post(); ?>

<div class="container mb-5 mt-3 mt-lg-5">
	<div class="<?php echo $post->post_status; ?> post-<?php echo $post->ID; ?> ">
		<?php the_content(); ?>
	</div>
</div>

<?php get_footer(); ?>
