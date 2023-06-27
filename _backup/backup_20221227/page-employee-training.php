<?php
/**
 * page-employee-training.php
 */

get_header();

get_template_part( "chunk/common", "content" );
?>

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

<?php get_footer(); ?>