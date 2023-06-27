<?php
/**
 * footer.php
 */


if( is_page( array(51) ) ):
	get_template_part( "chunk/common", "contact-en" );
elseif( !is_page( array(52) ) ):
	get_template_part( "chunk/common", "contact" );
endif;

if( !is_home() ):
	get_template_part( "chunk/common", "banners" );
endif;
?>

</main>

<?php get_template_part( "chunk/common", "footer" ); ?>


<?php wp_footer(); ?>
</body>
</html>