<?php
/**
 * common-nav-global.php
 */
?>

<nav id="globalnavi" role="navigation">
	<div class="inner">
		<?php
			$nav_count = 6;
			wp_nav_menu(
				array(
					'menu'			=> 'globalnavi',
					'container'		=> false,
					'items_wrap'	=> '<ul class=\'cols\'>%3$s</ul>',
				)
			);

			wp_nav_menu(
				array(
					'menu'			=> 'sp_additional',
					'container'		=> false,
					'items_wrap'	=> '<ul class=\'sp_additional\'>%3$s</ul>',
				)
			);
		?>
	</div>
</nav>

<?php if( !wp_is_mobile() ): ?>
<script>
(function($) {
	
	var menucount = $("#globalnavi .cols > li").length;
	$("#globalnavi .cols").addClass( "col" + menucount );

	$(".menu-item-has-children").hover(function(){
		//$(this).find(".sub-menu").stop().slideToggle();
		$(this).toggleClass("open");
	});

/*
	initGlobalNavi();
	$(window).bind("resize",function(){
		initGlobalNavi();
	});
	
	function initGlobalNavi(){
		var windowWidth = $(window).width();
		if( windowWidth > 1000 ){
			if( !$("#globalnavi").hasClass("dropdown") ){
				$("#globalnavi").addClass("dropdown");
			}
		}else{
			if( $("#globalnavi").hasClass("dropdown") ){
				$("#globalnavi").removeClass("dropdown");
			}
		}
	}
*/
})(jQuery);
</script>
<?php endif; ?>