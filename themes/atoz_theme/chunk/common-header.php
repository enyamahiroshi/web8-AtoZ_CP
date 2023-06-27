<header id="siteheader">
	<div class="inner">

		<h1><a href="<?php echo home_url('/'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>

		<div>
			<a href="<?php echo home_url('/'); ?>recruitment/" class="contact">採用情報</a>
			<a href="<?php echo home_url('/'); ?>contact/" class="contact">お問い合わせ</a>
			<a href="<?php echo home_url('/'); ?>a-true-commitment-to-english-education/" class="teachinjapan roboto <?php if( is_page(51) ) echo 'on';?>">Teach in Japan</a>
		</div>

		<div id="spmenu"><i></i><span>MENU</span></div>

	</div>
</header>

<?php get_template_part( "chunk/common", "nav-global" ); ?>

<script type="text/javascript">
	$("#spmenu").click(function(){
		$(this).toggleClass("on");
		$("#globalnavi").toggleClass("on");
	});
</script>
