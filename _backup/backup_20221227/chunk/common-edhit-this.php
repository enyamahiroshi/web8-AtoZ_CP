<?php
if( is_singular() || is_page() ):
	edit_post_link( 'このページを編集', '<div id="edit_this">', '</div>' );
endif;
?>