<?php
/**
 * top-reason.php
 * 選ばれる理由
 */
?>

<section id="reason">
	<h2>長野県でAtoZが一番に選ばれる理由</h2>
	<div class="inner">

		<ul class="cols col5 tab4 sp2">
			<li>
				<div>
					<h3>長野県内<br>ALT派遣実績</h3>
					<em class="count" data-num="30" data-start="1">1</em><i>年</i>
				</div>
			</li>
			<li>
				<div>
					<h3>ALT派遣人数</h3>
					<i>延べ</i><em class="count" data-num="800" data-start="600">600</em><i>人超</i>
				</div>
			</li>
			<li>
				<div>
					<h3>在籍<br>ネイティブスピーカー</h3>
					<em class="count" data-num="80" data-start="1">1</em><i>名</i>
				</div>
			</li>
			<li>
				<div>
					<h3>県内企業研修実績</h3>
					<i>延べ</i><em class="count" data-num="150" data-start="50">50</em><i>社</i>
				</div>
			</li>
			<li>
				<div>
					<h3>AtoZの英語の<br>授業を受けた人</h3>
					<i>1年間で</i><em class="count" data-num="25800" data-start="25500">25500</em><i>人</i>
				</div>
			</li>
		</ul>


	</div>
</section>

<script type="text/javascript" async>
var countElm = $('.count');
var countSpeed = 1;
var scrollAnimationElm = document.querySelectorAll('#reason');
var scrollAnimationFunc = function() {
	for(var i = 0; i < scrollAnimationElm.length; i++) {
		var triggerMargin = 300;
		if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {


			if( !countElm.hasClass("done") ){
				countElm.each(function(){
					var self = $(this),
					countMax = self.attr('data-num'),
					countMin = self.attr('data-start'),
					//thisCount = countMin,
					countTimer;
					function timer(){
						countTimer = setInterval(function(){
							var countNext = countMin++;
							self.text(countNext.toLocaleString());
							if(countNext == countMax){
								clearInterval(countTimer);
							}
						},countSpeed);
					}
					timer();
					self.addClass("done");
				});
			}

		}
	}
}
window.addEventListener('load', scrollAnimationFunc);
window.addEventListener('scroll', scrollAnimationFunc);
</script>