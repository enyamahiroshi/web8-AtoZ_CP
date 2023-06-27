<?php
/**
 * common-contact.php
 * お問い合わせブロック
 */

if( !is_home() ):

$title = "ご相談、お問い合わせはこちらまで";
if( is_page(13) ):	//法人向け研修
	$title = "より詳しく知りたい方はこちらまで";
elseif( is_page(12) ):	//公教育支援（ALT）
	$title = "もっと詳しい診断をご希望の方はこちらまで";
endif;

?>

<section id="contact">
	<div class="inner">

		<h2><?php echo $title; ?></h2>

		<div>
			<ul class="cols col2 tab1 sp1">

				<li>
					<div>
						<h3>お電話でのお問い合わせ</h3>
						<div class="phone"><a href="tel:0263282366">0263-28-2366</a></div>
					</div>
				</li>

				<li>
					<div>
						<h3>メールでのお問い合わせ</h3>
						<a href="<?php echo home_url('/'); ?>contact" class="btn" title="お問い合わせはこちらから">お問い合わせ</a>
					</div>
				</li>

			</ul>
		</div>

	</div>
</section>

<?php endif; ?>
