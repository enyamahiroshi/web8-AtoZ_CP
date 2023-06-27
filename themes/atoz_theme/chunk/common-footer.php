<?php
/**
 * common-footer.php
 */
?>
<footer>
	<div class="inner">

		<?php wp_nav_menu( array( 'menu' => 'footer_menu' ) ); ?>

		<div class="contact">
			<a href="tel:0263282366" class="phone">0263-28-2366</a>
			<a href="<?php echo home_url('/'); ?>contact" class="btn" title="お問い合わせはこちらから">お問い合わせ</a>
			<aside class="sns-links">
				<h3 class="sns-links__title">SNS公式アカウント</h3>
				<div class="sns-links__block">
					<div class="sns-links__block__item">
						<a href="https://www.facebook.com/GoGlobalWithAtoZ2022" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-facebook.png" alt="Facebook">
							Facebook
						</a>
					</div>
					<div class="sns-links__block__item">
						<a href="https://note.com/atoz_official" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-note.png" alt="note">
							note
						</a>
					</div>
				</div>
				<h4 class="sns-links__title">英会話学校エー・トゥー・ゼット</h4>
				<div class="sns-links__block">
					<div class="sns-links__block__item">
						<a href="https://www.facebook.com/AtoZ.LanguageSchool" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-facebook.png" alt="Facebook">
							Facebook
						</a>
					</div>
					<div class="sns-links__block__item">
						<a href="https://www.instagram.com/atoz_language_school" target="_blank" rel="noopener noreferrer">
							<img src="<?php echo get_template_directory_uri(); ?>/images/icon/icon-instagram.png" alt="Instagram">
							Instagram
						</a>
					</div>
				</div>
			</aside>
		</div>

	</div>

	<div class="copyright">&copy;<?php echo date('Y'); ?> AtoZ Corporation</div>

</footer>

<div id="gotop"></div>

<script type="text/javascript">
	$( "#gotop" ).click(function(){
		$('body,html').animate({ scrollTop: 0 }, 500, 'swing' );
	});
	window.onscroll = function() {
	    var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

	    if( scrollTop > 76 ) {
	    	$("body").addClass("fixed");
	    }else{
	    	$("body").removeClass("fixed");
	    }

	    if( scrollTop > 600 ) {
	    	$("#gotop").addClass("on");
	    }else{
	    	$("#gotop").removeClass("on");
	    }
	}
</script>