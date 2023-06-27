<?php
/*
Template Name: 法人向け研修 2022
*/

get_header('et');

?>


<?php if(is_page('achievement') ):  ?>

<section id="content">
	<div class="inner wide">
		<div class="storycontent2 pd0">

<?php
	if (have_posts()) : while (have_posts()) : the_post();
		the_content();
	endwhile; endif;

?>

<?php if(is_page('achievement') ):  ?>
<?php get_template_part( "loop/c" , "logo" );  ?>
<?php endif; ?>

		</div>
	</div>
</section>


<div id="tab_wrap" class="all_area">
<ul class="tab_area">
<li id="tab1" class="select"><span>語学研修</span></li>
<li id="tab2"><span>組織力強化</span></li>
</ul>

<section id="content">
	<div class="inner wide">
		<div class="storycontent2">

<!-- tab1  -->
<div class="content_area">

<h2 class="txt18 stit">「語学研修」を導入された企業様の事例をご紹介しています。</h2>

<ul id="case_list" class="clm2 justify w880">

<?php
    $custom_posts = get_posts(array(
        'post_type' => 'achievement',
        'posts_per_page' => -1,
        'tax_query' => array(
        array(
            'taxonomy' => 'achievement_cat',
            'field' => 'slug',
            'terms' => 'training'
            )
        )
    ));
global $post; if($custom_posts): ?>
<?php foreach($custom_posts as $post): setup_postdata($post);
?>

<li>
<figure class="img db"><span><?php
  if(has_post_thumbnail()):
    the_post_thumbnail();
  else:
?>
<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" />
<?php endif; ?></span></figure>

<div class="txt_box">
<p class="c_name fb"><?php if( get_field('c_logo')): ?><?php endif; ?>
<span class="db"><?php
	$myfield = scf::get('c_logo');
	echo wp_get_attachment_image( $myfield, 'c-logo' );
?>
</span><?php the_title(); ?></p>
<h3 class="lead tL fn"><?php
$lead = SCF::get('lead');
echo nl2br($lead);
?></h3>
<p class="btn_or"><a href="<?php the_permalink() ?>"><span>導入事例はこちら</span></a></p>

<a href="<?php the_permalink() ?>" class="more"></a>
</div>
</li>

<?php endforeach; ?>
<?php endif; wp_reset_postdata(); ?>

</ul>

</div><!-- //tab1 -->

<!-- tab2  -->
<div class="content_area">
<h2 class="txt18">「組織力強化」を導入された企業様の事例をご紹介しています。</h2>

<ul id="case_list" class="clm2 justify w880">

<?php
    $custom_posts = get_posts(array(
        'post_type' => 'achievement',
        'posts_per_page' => -1,
        'tax_query' => array(
        array(
            'taxonomy' => 'achievement_cat',
            'field' => 'slug',
            'terms' => 'enhance'
            )
        )
    ));
global $post; if($custom_posts): ?>
<?php foreach($custom_posts as $post): setup_postdata($post); ?>

<li>
<figure class="img db"><span><?php
  if(has_post_thumbnail()):
    the_post_thumbnail();
  else:
?>
<img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="" />
<?php endif; ?></span></figure>

<div class="txt_box">
<p class="c_name fb"><?php if( get_field('c_logo')): ?><?php endif; ?>
<span class="db"><?php
	$myfield = scf::get('c_logo');
	echo wp_get_attachment_image( $myfield, 'c-logo' );
?>
</span><?php the_title(); ?> 様</p>
<h3 class="lead tL fn"><?php
$lead = SCF::get('lead');
echo nl2br($lead);
?></h3>
<p class="btn_or"><a href="<?php the_permalink() ?>"><span>導入事例はこちら</span></a></p>

<a href="<?php the_permalink() ?>" class="more"></a>
</div>
</li>

<?php endforeach; ?>
<?php endif; wp_reset_postdata(); ?>

</ul>

</div>
<!-- //tab2 -->


</div>
</div>
</section>

</div>

<?php else: ?>
<section id="content">
	<div class="inner wide">
<?php
	if (have_posts()) : while (have_posts()) : the_post();
		the_content();
	endwhile; endif;

?>
	</div>
</section>

<?php endif; ?>


<?php if(is_page('achievement') || is_page( 'plan' ) ):  ?>

<script>
$(function() {
	$('ul.tab_area li').click(function() {
		var index = $('ul.tab_area li').index(this);
		$('.content_area').css('display','none');
		$('.content_area').eq(index).fadeIn();
		$('.tab_area li').removeClass('select');
		$(this).addClass('select')
	});
});

//ダイレクトリンク
$(function() {
        var hash = location.hash;
        hash = (hash.match(/^#tab\d+$/) || [])[0];
	if($(hash).length){
        var tabname = hash.slice(1);
	} else{
	var tabname = "tab1";}
        $('.content_area').css('display','none');
        $('.tab_area li').removeClass('select');
        var tabno = $('ul.tab_area li#' + tabname).index();
        $('.content_area').eq(tabno).fadeIn();
        $('ul.tab_area li').eq(tabno).addClass('select')
          });
</script>

<?php endif; ?>

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


<script>
(function($){
	$(".solution > div").each(function(){
		var href = $(this).find("a").attr("href");
		if(href){
			$(this).click(function(){
				window.location.href = href;
			});
		}
	});
})(jQuery);
</script>

<?php


get_footer(); ?>