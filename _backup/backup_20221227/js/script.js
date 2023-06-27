(function($) {

	$(window).bind("load",function(){

		$(".matrix").wrap("<div class='matrixwrapper'><div></div></div>");
		$(".matrix").find("td").wrapInner("<div>");
		
		var boxheight = 0;
		var counter = 1;
		$(".matrix div").each(function(){
			boxheight = Math.max( boxheight, $(this).height() );
			$(this).addClass("quad"+counter);
			counter++;
		});
		$(".matrix div").height( boxheight );

		$(".checklist li").click(function(){
			$(this).toggleClass("on");
		});

		$(".external a").attr("target","_blank");

		$(".clickablebox > div").each(function(){
			var href = $(this).find("a").attr("href");
			if(href){
				$(this).click(function(){
					window.location.href = href;
				});
			}
		});

	});


})(jQuery);