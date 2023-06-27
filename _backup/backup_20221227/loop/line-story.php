<?php
/**
 * line-story.php
 */
$index = get_query_var( "num" );
$title = $post->post_title;
$href = get_permalink( $post->ID );

?>
<li><i><?php echo sprintf('%03d', $index); ?></i><a href="<?php echo $href; ?>"><?php echo $title; ?></a></li>