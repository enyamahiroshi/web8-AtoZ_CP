<?php
/**
 * line-post.php
 */
$title = $post->post_title;
$href = get_permalink( $post->ID );
$pubdate = date( "Y.m.d",  strtotime($post->post_date) );

?>
<li><span><?php echo $pubdate; ?></span><a href="<?php echo $href; ?>"><?php echo $title; ?></a></li>