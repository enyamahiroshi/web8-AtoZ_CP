<?php
/**
 * post-header.php
 */
$date = date( "Y.n.j D.", strtotime($post->post_date) );
$cats = get_the_category();
?>
<header id="postheader">

	<div class="date"><?php echo $date; ?></div>

	<h1><?php echo $post->post_title; ?></h1>

	<?php if( $cats ): ?>
	<div class="cat">
		カテゴリー：
		<?php
		foreach ( (array)$cats as $cat ):
			echo "<span>" . $cat->name . "</span>";
		endforeach;
		?>
	</div>
	<?php endif; ?>

</header>