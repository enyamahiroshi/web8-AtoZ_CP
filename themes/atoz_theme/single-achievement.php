<?php
/**
 * single.php
 */

get_header('et');
?>

<section id="content">
	<div class="inner wide">
		<div class="storycontent2 pd0">

<div class="tit_box">
<figure class="img">
<span class="sp_only">
<?php the_post_thumbnail('c-image'); ?>
</span>
<span class="pc_only">
<?php if( get_field('main_img')): ?>
<?php
 $img = get_post_meta($post->ID, 'main_img', 'full');
?>
<img src="<?php echo wp_get_attachment_url($img) ?>" alt="<?php the_title(); ?>">
<?php else: ?>
<?php the_post_thumbnail('c-image'); ?>
<?php endif; ?>
</span>

</figure>
<div class="txt_box">
<p class="c_name fb"><?php if( get_field('c_logo')): ?>
<span class="db">

<?php
 $img = get_post_meta($post->ID, 'c_logo', 'thumbnail');
?>
<img src="<?php echo wp_get_attachment_url($img) ?>" alt="<?php the_title(); ?>" loading="eager">

</span>
<?php endif; ?>
<?php the_title(); ?> 様</p></div>
</div>

  <div class="w880">
<div class="article">
<h1 class="stit_blue txt20"><?php
$lead = SCF::get('lead');
echo nl2br($lead);
?></h1>

<?php if ( post_custom('detail1') ) : ?>
<div class="v_editor">
<h2 class="stit_maru txt20"><?php $stit01 = scf::get('stit01'); echo $stit01; ?></h2>

<div class="txt_box<?php if ( post_custom('detail1_img') ) : ?> justify<?php endif; ?>">
<div class="in_box">
<?php $detail1 = scf::get('detail1'); echo $detail1; ?>
</div>

<figure class="img">
<?php
	$myfield = scf::get('detail1_img');
	echo wp_get_attachment_image( $myfield, 'medium' );
?>
</figure>
</div>

</div>
<?php endif; ?>

<?php if ( post_custom('detail2') ) : ?>
<div class="v_editor">
<h2 class="stit_maru txt20"><?php $stit02 = scf::get('stit02'); echo $stit02; ?></h2>

<div class="txt_box<?php if ( post_custom('detail2_img') ) : ?> justify<?php endif; ?>">
<div class="in_box">
<?php $detail2 = scf::get('detail2'); echo $detail2; ?>
</div>

<?php if ( post_custom('detail2_img') ) : ?>
<figure class="img">
<?php
	$myfield = scf::get('detail2_img');
	echo wp_get_attachment_image( $myfield, 'medium' );
?>
</figure>
<?php endif; ?>
</div>

</div>
<?php endif; ?>


<?php if ( post_custom('detail3') ) : ?>
<div class="v_editor">
<h2 class="stit_maru txt20"><?php $stit03 = scf::get('stit03'); echo $stit03; ?></h2>

<div class="txt_box">
<?php
	$detail3 = scf::get('detail3');
	echo wp_get_attachment_image( $detail3, 'large' );
?>
</div>
</div>
<?php endif; ?>


<?php if ( post_custom('stitx') ) : ?>

<?php
$group_set = SCF::get('detail_more');
foreach ($group_set as $fields ) {
$imgurl = wp_get_attachment_image_src($fields['detailx_img'] , 'medium');
?>
<div class="v_editor">
<h2 class="stit_maru txt20"><?php echo ($fields['stitx']); ?></h2>

<div class="txt_box<?php if($fields['detailx_img']):?> justify<?php endif; ?>">
<div class="in_box">
<?php echo ($fields['detailx']); ?>
</div>

<?php if($fields['detailx_img']):?>
<figure class="img">
<img loading="lazy" src="<?php echo $imgurl[0]; ?>" class="" alt="">
</figure>
<?php endif; ?>
</div>

</div>
<?php } ?>

<?php endif; ?>

</div>

<p class="btn_gray btn_or tC"><a href="../"><span>一覧へ戻る</span></a></p>

<?php
$terms = get_the_terms($post->ID, 'achievement_cat');
$term_ID = [];

foreach ((array) $terms as $term):
    array_push($term_ID, $term->term_id); // タクソノミーのIDを格納
endforeach;

$args = [
    'post_type' => 'achievement', //カスタム投稿タイプ名
    'post__not_in' => [$post->ID], // 今読んでいる記事を除く
    'posts_per_page' => -1, // 表示させたい記事数
    //'orderby' => 'rand', // ランダムに表示、降順の場合は'desc'
    'tax_query' => [ // タクソノミーに関連付けられた投稿を表示
        [
            'taxonomy' => 'achievement_cat', // タクソノミー名
            'terms' => $term_ID, // タクソノミーターム
        ],
    ],
];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()): ?>

<div class="related_post">
<h2 class="stit_gray txt18">その他の導入事例</h2>


<ul class="clm1 tL">

<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<li class="justify alc sp">
<figure class="img"><span><?php
  if(has_post_thumbnail()):
    the_post_thumbnail();
  else:
?>
<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" /><?php endif; ?></span></figure>
<div class="txt_box flex-start">
<span class="logo"><?php
	$myfield = scf::get('c_logo');
	echo wp_get_attachment_image( $myfield, 'c-logo' );
?></span>
<div class="txt_box2">
<h3 class="txt_cl01"><?php the_title(); ?></h3>
<p class="detail txt14"><span class="link_blue"> 詳しくはこちら ≫</span></p>
</div>
</div>
<a href="<?php the_permalink() ?>" class="more"></a>
</li>


<?php endwhile; ?>

</ul>

<?php endif; ?>
<?php wp_reset_postdata(); ?>
</div>

</div>

		</div>
	</div>
</section>

<section id="dl_bnr" class="box1080">
<div class="dl_bnr justify">
<figure class="img"><img src="<?php echo get_template_directory_uri() ?>/images/et2022/img_dl.png" width="197" height="155" alt=""></figure>
<div class="txt_box">
<p class="fb txt20 mb20">AtoZの法人向け研修サービスに<br class="sp_only">関する<br class="pc_only">
詳しい資料を<br class="sp_only">ダウンロードいただけます。</p>
<p class="btn_or tC"><a href="<?php echo esc_html(home_url('/')); ?>download/"><span>資料ダウンロードはこちら</span></a></p>
</div>
</div>
</section>

<?php get_footer(); ?>