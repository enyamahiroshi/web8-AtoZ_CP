<?php
/**
 * block-recruit
 * 求人情報ブロック
 */

$title = $post->post_title;
$pubdate = date( "Y年n月j日",  strtotime($post->post_date) );
$cats = get_the_terms( $post->ID, "recruit_cat" );
$array = array();
foreach( (array)$cats as $cat ){
	$array[] = $cat->name;
}
$cats = $array;

$requirements 			= get_field( "応募資格", $post->ID );
$selection_method		= get_field( "選考方法", $post->ID );
$application_method		= get_field( "応募方法", $post->ID );
$application_deadline	= get_field( "応募締切", $post->ID );

$contract_period		= get_field( "契約期間", $post->ID );
$salary					= get_field( "給与", $post->ID );
$allowance				= get_field( "諸手当", $post->ID );
$payrise				= get_field( "昇給", $post->ID );
$bonus					= get_field( "賞与", $post->ID );
$paidleave 				= get_field( "有給休暇", $post->ID );
$holiday				= get_field( "休日休暇", $post->ID );
$welfare				= get_field( "福利厚生", $post->ID );
$location				= get_field( "勤務地", $post->ID );
$working_hours			= get_field( "勤務時間", $post->ID );


$keiyaku_keitai			= get_field( "契約形態", $post->ID );

$contract_type   = get_field( "契約形態", $post->ID );
$locations   = get_field( "勤務場所", $post->ID );
$duties   = get_field( "職務", $post->ID );
$qualification   = get_field( "資格", $post->ID );
$experience   = get_field( "経験", $post->ID );
$treatment   = get_field( "待遇", $post->ID );
$wage   = get_field( "賃金", $post->ID );
$working_day_hour   = get_field( "勤務日__時間", $post->ID );
$holidays   = get_field( "休日", $post->ID );
$vacation   = get_field( "休暇", $post->ID );
$adoption_flow   = get_field( "採用の流れ", $post->ID );

?>

<div class="recruit">
	<header>
		<h2><?php echo $title; ?></h2>
		<div class="meta">
			<span>職種：<?php echo implode( ",", $cats ); ?></span>
			<span>掲載日：<?php echo $pubdate; ?></span>
		</div>
	</header>

<?php if( $requirements || $selection_method || $application_method || $application_deadline ): ?>
	<table class="wp-block-table">
		<caption>募集要項</caption>
<?php if( $requirements ): ?>
		<tr>
			<th>応募資格</th>
			<td><?php echo $requirements; ?></td>
		</tr>
<?php endif; ?>
<?php if( $selection_method ): ?>
		<tr>
			<th>選考方法</th>
			<td><?php echo $selection_method; ?></td>
		</tr>
<?php endif; ?>
<?php if( $application_method ): ?>
		<tr>
			<th>応募方法</th>
			<td><?php echo $application_method; ?></td>
		</tr>
<?php endif; ?>
<?php if( $application_deadline ): ?>
		<tr>
			<th>応募締切</th>
			<td><?php echo $application_deadline; ?></td>
		</tr>
<?php endif; ?>
	</table>
<?php endif; ?>


	<table class="wp-block-table">
		<!-- caption>待遇・福利厚生</caption -->

<?php //新規追加 ?>

<?php if($contract_type): ?>
  <tr>
   <th>契約形態</th>
   <td><?php echo $contract_type; ?></td>
  </tr>
<?php endif; ?>
<?php if($locations): ?>
  <tr>
   <th>勤務地</th>
   <td><?php echo $locations; ?></td>
  </tr>
<?php endif; ?>
<?php if($duties): ?>
  <tr>
   <th>職務</th>
   <td><?php echo $duties; ?></td>
  </tr>
<?php endif; ?>
<?php if($qualification): ?>
  <tr>
   <th>資格</th>
   <td><?php echo $qualification; ?></td>
  </tr>
<?php endif; ?>
<?php if( $salary ): ?>
		<tr>
			<th>給与</th>
			<td><?php echo $salary; ?></td>
		</tr>
<?php endif; ?>
<?php if( $payrise ): ?>
		<tr>
			<th>昇給</th>
			<td><?php echo $payrise; ?></td>
		</tr>
<?php endif; ?>
<?php if($experience): ?>
  <tr>
   <th>経験</th>
   <td><?php echo $experience; ?></td>
  </tr>
<?php endif; ?>
<?php if($treatment): ?>
  <tr>
   <th>待遇</th>
   <td><?php echo $treatment; ?></td>
  </tr>
<?php endif; ?>
<?php if($wage): ?>
  <tr>
   <th>賃金</th>
   <td><?php echo $wage; ?></td>
  </tr>
<?php endif; ?>
<?php if($working_day_hour): ?>
  <tr>
   <th>勤務日 / 時間</th>
   <td><?php echo $working_day_hour; ?></td>
  </tr>
<?php endif; ?>
<?php if( $holiday ): ?>
		<tr>
			<th>休日休暇</th>
			<td><?php echo $holiday; ?></td>
		</tr>
<?php endif; ?>
<?php if( $paidleave ): ?>
		<tr>
			<th>有給休暇</th>
			<td><?php echo $paidleave; ?></td>
		</tr>
<?php endif; ?>
<?php if($holidays): ?>
  <tr>
   <th>休日</th>
   <td><?php echo $holidays; ?></td>
  </tr>
<?php endif; ?>
<?php if($vacation): ?>
  <tr>
   <th>休暇</th>
   <td><?php echo $vacation; ?></td>
  </tr>
<?php endif; ?>
<?php if($adoption_flow): ?>
  <tr>
   <th>採用の流れ</th>
   <td><?php echo $adoption_flow; ?></td>
  </tr>
<?php endif; ?>	

<!--2022-6-2移行-->
<?php if( $allowance ): ?>
		<tr>
			<th>諸手当</th>
			<td><?php echo $allowance; ?></td>
		</tr>
<?php endif; ?>
<?php if( $bonus ): ?>
		<tr>
			<th>賞与</th>
			<td><?php echo $bonus; ?></td>
		</tr>
<?php endif; ?>
<?php if( $welfare ): ?>
		<tr>
			<th>福利厚生</th>
			<td><?php echo $welfare; ?></td>
		</tr>
<?php endif; ?>
<?php if( $location ): ?>
		<tr>
			<th>勤務地</th>
			<td><?php echo $location; ?></td>
		</tr>
<?php endif; ?>
<?php if( $working_hours ): ?>
		<tr>
			<th>勤務時間</th>
			<td><?php echo $working_hours; ?></td>
		</tr>
<?php endif; ?>
</table>

</div>
