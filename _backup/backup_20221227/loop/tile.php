<?php
/**
 * tile.php
 */
$href = get_permalink( $post->ID );
$pubdate = $post->post_date;
$pubdate = date( "Y.n.j", strtotime($pubdate) );

$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'post-thumb' );
$thumb_url = $thumb ? $thumb['0'] : get_bloginfo("template_directory") . "/images/noimage.png";
$excerpt = $post->post_excerpt ? strip_tags($post->post_excerpt) : mb_substr(strip_tags($post->post_content), 0, 35) . "...";
?>

<li class="tile post">
	<a href="<?php echo esc_url($href); ?>">
		<?php if($thumb_url): ?>
		<div class="pic">
			<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>">
			<div class="date"><?php echo $pubdate; ?></div>
		</div>
		<?php endif; ?>
		<div class="desc">
			<h3><?php the_title(); ?></h3>
			<?php if( $excerpt ): ?>
			<p class="excerpt">
				<?php echo $excerpt; ?>
			</p>
			<?php endif; ?>
		</div>
	</a>
</li>