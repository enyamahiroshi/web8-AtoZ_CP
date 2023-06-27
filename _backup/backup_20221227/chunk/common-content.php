<?php
/**
 * common-content.php
 */
?>

<section id="content">
	<div class="inner wide">
		<div class="storycontent">

<?php
	if (have_posts()) : while (have_posts()) : the_post();
		the_content();
	endwhile; endif;


	if( is_page(51) ):
		get_template_part( "chunk/recruit" , "en" );
	endif;
?>

		</div>
	</div>
</section>