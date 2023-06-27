<?php
/**
 * top-heroimage.php
 */

if( is_front_page() ):
	//公教育支援（ALT）
	$page_alt = get_page_by_title("公教育支援（ALT）", OBJECT, 'page');
	$href_alt = get_permalink( $page_alt->ID );
	$thumb_alt = wp_get_attachment_image_src( get_post_thumbnail_id( $page_alt->ID ), 'heroimage' );
	$thumb_alt_url = $thumb_alt[0];

	//法人向け研修
	$page_business = get_page_by_title("法人向け研修", OBJECT, 'page');
	$href_business = get_permalink( $page_business->ID );
	$thumb_business = wp_get_attachment_image_src( get_post_thumbnail_id( $page_business->ID ), 'heroimage' );
	$thumb_business_url = $thumb_business[0];

	//グローバル人材紹介
	$page_global = get_page_by_title("グローバル人材紹介", OBJECT, 'page');
	$href_global = get_permalink( $page_global->ID );
	$thumb_global = wp_get_attachment_image_src( get_post_thumbnail_id( $page_global->ID ), 'heroimage' );
	$thumb_global_url = $thumb_global[0];

?>

<section id="heroimage">
	<div class="inner wide">

		<ul>

			<li class="pane0">
				<a href="<?php echo esc_url($href_alt); ?>" style="background-image:url(<?php echo esc_url($thumb_alt_url); ?>);">
					<div>
						<div>
							<h3>公教育支援（ALT）</h3>
							<span>より成果の出る英語教育にするために</span>
						</div>
					</div>
				</a>
			</li>

			<li class="pane1">
				<a href="<?php echo esc_url($href_business); ?>" style="background-image:url(<?php echo esc_url($thumb_business_url); ?>);">
					<div>
						<div>
							<h3>法人向け研修</h3>
							<span>世界で戦えるグローバル人材の育成</span>
						</div>
					</div>
				</a>
			</li>

			<li class="pane2">
				<a href="<?php echo esc_url($href_global); ?>" style="background-image:url(<?php echo esc_url($thumb_global_url); ?>);">
					<div>
						<div>
							<h3>グローバル人材紹介</h3>
							<span>バイリンガル人材の採用・定着支援</span>
						</div>
					</div>
				</a>
			</li>

		</ul>

		<a href="<?php echo esc_url(home_url()); ?>/aboutus/#iso21001" class="link-iso21001">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/images/ISObanner_red.png">
		</a>

	</div>
</section>

<?php endif; ?>