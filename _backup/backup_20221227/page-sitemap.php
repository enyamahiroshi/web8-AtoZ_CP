<?php
/**
 * page-sitemap.php
 */

get_header();
?>

<section id="content">
	<div class="inner wide">
		<div class="storycontent">

<?php wp_nav_menu( array( 'menu' => 'サイトマップ' ) ); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>