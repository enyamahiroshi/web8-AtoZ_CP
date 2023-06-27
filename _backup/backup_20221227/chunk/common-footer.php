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