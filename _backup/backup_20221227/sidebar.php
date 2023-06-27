<?php
/**
 * sidebar.php
 */
?>
<aside>

<?php
if ( is_active_sidebar( 'sidebar' ) ) :
	dynamic_sidebar( 'sidebar' );
endif;
?>

</aside>