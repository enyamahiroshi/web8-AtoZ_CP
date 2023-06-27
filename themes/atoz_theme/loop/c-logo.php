<?php
/**
 * achievement.php 実績、企業ロゴ登録
 */

?>

<div class="c_logo_box">
<ul class="flex-center alc sp">

<?php
$group_set = SCF::get('logo_group', 2273 );
foreach ($group_set as $fields ) {
$imgurl = wp_get_attachment_image_src($fields['c_logo'] , 'c-logo');
?>
<li>
<img loading="lazy" src="<?php echo $imgurl[0]; ?>" width="<?php echo ($fields['logo_w']); ?>" height="auto" class="" alt="<?php echo ($fields['c_name']); ?>">
</li>
<?php } ?>

</ul>
</div>