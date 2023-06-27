<?php
/**
 * common-breadcrumb.php
 * パンくず　YoastSEOプラグインにより生成
 */
?>

<?php if ( function_exists('yoast_breadcrumb') && !is_home() ): ?>
<div id="breadcrumbs">
	<div class="inner">
		<?php yoast_breadcrumb( '','' ); ?>
	</div>
</div>
<?php endif; ?>