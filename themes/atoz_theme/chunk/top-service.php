<?php
/**
 * top-service.php
 * わたしたちのサービス
 */

//公教育支援（ALT）
$page_alt = get_page_by_title("公教育支援（ALT）", OBJECT, 'page');
$href_alt = get_permalink( $page_alt->ID );

//法人向け研修
$page_business = get_page_by_title("法人向け研修", OBJECT, 'page');
$href_business = get_permalink( $page_business->ID );

//グローバル人材紹介
$page_global = get_page_by_title("グローバル人材紹介", OBJECT, 'page');
$href_global = get_permalink( $page_global->ID );

//通訳翻訳
$page_trans = get_page_by_title("通訳 / 翻訳", OBJECT, 'page');
$href_trans = get_permalink( $page_trans->ID );
?>

<section id="ourservice">
	<h2>SERVICE</h2>
	<div class="inner">

		<ul>

			<li class="item1">
				<a href="<?php echo esc_url( $href_alt ); ?>">
					<h3>公教育支援（ALT）</h3>
					<p>より成果の出る英語教育にするために</p>
				</a>
			</li>

			<li class="item2">
				<a href="<?php echo esc_url( $href_business ); ?>">
					<h3>法人向け研修</h3>
					<p>世界で戦えるグローバル人の育成</p>
				</a>
			</li>

			<li class="item3">
				<a href="<?php echo esc_url( $href_global ); ?>">
					<h3>グローバル人材紹介</h3>
					<p>外国人・バイリンガル人材の採用・定着支援</p>
				</a>
			</li>

			<li class="item4">
				<a href="<?php echo esc_url(home_url()); ?>/about/">
					<h3>派遣事業</h3>
					<p>英語教育に特化した人材派遣</p>
				</a>
			</li>

		</ul>

	</div>
</section>