<?php
/**
 * recruit-en.php
 * 外国人向け求人情報ブロック
 */
$args = array(
			"post_type" => "recruit",
			"posts_per_page" => -1,
			"tax_query" 	=> array(
									array(
											"taxonomy" => "recruit_cat",
											"field" => "slug",
											"terms" => array( "alt" )
										)
								)
		);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
?>

			<div id="recruitinfo">
				<h2>Now hiring</h2>
<?php
while ( $the_query->have_posts() ) : $the_query->the_post();

	get_template_part( "loop/block", "recruit_en" );

endwhile;
?>
			</div>
<?php 
endif;
wp_reset_postdata();
?>