<?php
/**
 * archive.php
 */

get_header();
?>

<div class="inner">
	
	<div class="wrapper">
		<article>

			<ul class="cols col3 tab2 sp1">
<?php
	if (have_posts()) : while (have_posts()) : the_post();
		get_template_part( "loop/tile" );
	endwhile; endif;
?>
			</ul>
			
			<?php wp_pagenavi(); ?>

		</article>

		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>