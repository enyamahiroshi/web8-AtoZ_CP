<?php
/**
 * achievement.php 新着実績一覧
 */

?>

<ul class="clm3 flex-start tL">

<?php
    $custom_posts = get_posts(array(
        'post_type' => 'achievement',
        'posts_per_page' => 3,

    ));
global $post; if($custom_posts): ?>
<?php foreach($custom_posts as $post): setup_postdata($post); ?>

<li>
<figure class="img db"><a href="<?php the_permalink() ?>">

<?php
  if(has_post_thumbnail()):
    the_post_thumbnail();
  else:
?>
<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" />
<?php endif; ?>

</a></figure>

<div class="txt_box">
<div class="client"><?php if( get_field('c_logo')): ?><?php endif; ?>
<?php 
	$myfield = scf::get('c_logo'); 
	echo wp_get_attachment_image( $myfield, 'c-logo' ); 
?>
<h3 class="txt_cl01"><?php the_title(); ?> 様</h3></div>
<h4 class="fb txt18"><?php the_field('summary'); ?></h4>
<p class="detail txt14"><a href="<?php the_permalink() ?>" class="link_blue"> 詳しくはこちら</a></p>
</div>
<a href="<?php the_permalink() ?>" class="more"></a>
</li>

<?php endforeach; ?>
<?php endif; wp_reset_postdata(); ?>

</ul>