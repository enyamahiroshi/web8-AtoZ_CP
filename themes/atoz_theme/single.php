<?php
/**
 * single.php
 */

get_header();
?>

<div class="inner">
	
	<?php get_template_part( "chunk/post", "header" ); ?>

	<div class="wrapper">
		<article>
			<div class="storycontent">
<?php
	if (have_posts()) : while (have_posts()) : the_post();
		the_content();
	endwhile; endif;
?>
			</div>
		</article>

		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>