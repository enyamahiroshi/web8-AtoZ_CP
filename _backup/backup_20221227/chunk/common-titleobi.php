<?php
/**
 * common-titleobi.php
 * 下層ページタイトルオビ
 */

if( !is_home() ):

	//個別記事
	if( is_singular("post") ):
		$cats = get_the_category();
		$cat = $cats[0];
		while( $cat->parent !== 0 ){
			$cat = get_term_by( "term_id", $cat->parent, "category" );
		}
		$title = $cat->name;

	//カテゴリー
	elseif( is_category() ):
		$catid = get_query_var('cat');
		$cat = get_term_by( "id", $catid, "category" );
		$array = array();
		$array[] = $cat->name;
		while( $cat->parent !== 0 ){
			$cat = get_term_by( "term_id", $cat->parent, "category" );
			$array[] = $cat->name;
		}
		$array = array_reverse($array);
		foreach( $array as $a ){
			if ($a === reset($array)) {
				$title .= "<span>" . $a . "</span>";
			}else{
				$title .= "<i>" . $a . "</i>";
			}
		}

	//月アーカイブ
	elseif( is_month() ):
		$title = get_query_var('year').'年'.get_query_var('monthnum').'月 の記事';

	//アーカイブ
	elseif( is_archive() ):
		$title = post_type_archive_title( '', false );

	//通常はタイトルを表示
	else:
		$title = $post->post_title;
	endif;

	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'heroimage' );


	// 固定ページ＆アイキャッチ画像が設定されている場合は画像付きのタイトルオビを表示する
	if( is_page() && !empty($thumb) ):
		$thumb_url = $thumb['0'];
		$excerpt = $post->post_excerpt;
?>

<section id="titleobi">
	<div class="inner wide" style="background-image: url(<?php echo esc_url($thumb_url);?>);">
		<div>
			<h1><?php echo $title; ?></h1>
			<div class="leadtxt">
				<?php echo nl2br($excerpt); ?>
			</div>
		</div>
	<?php get_template_part( "chunk/common", "edhit-this" ); ?>
	<?php if(is_page('alt-dispatch')): ?>
		<a href="<?php echo esc_url(home_url()); ?>/aboutus/#iso21001" class="link-iso21001-2">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/images/ISObanner_red.png">
		</a>
	<?php endif; ?>
	</div>
</section>

	<?php else: ?>

<section id="titleobi_simple">
	<div class="inner">
		<div>
			<h1><?php echo $title; ?></h1>
		</div>
	<?php get_template_part( "chunk/common", "edhit-this" ); ?>
	</div>
</section>

	<?php endif; ?>
<?php endif; ?>