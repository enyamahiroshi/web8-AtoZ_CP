<?php
/**
 * page-recruitment.php
 * 求人情報ページ
 */

get_header();
?>

<section id="content">
	<div class="inner wide">
		<div class="storycontent">

<?php
	if (have_posts()) : while (have_posts()) : the_post();
		the_content();
	endwhile; endif;
?>

			<div id="recruitinfo">
<?php
$args = array(
			"post_type" => "recruit",
			"posts_per_page" => -1
		);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();

	get_template_part( "loop/block", "recruit" );

endwhile;
endif;
wp_reset_postdata();
?>

			</div>

		</div>

	</div>
</section>




<?php get_footer(); ?>