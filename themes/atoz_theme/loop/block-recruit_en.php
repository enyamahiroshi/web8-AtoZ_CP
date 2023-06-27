<?php
/**
 * block-recruit_en
 * 求人情報ブロック（英語/ALTのみ）
 */

$title = $post->post_title;

$requirements 			= get_field( "応募資格", $post->ID );
$selection_method		= get_field( "選考方法", $post->ID );
$application_method		= get_field( "応募方法", $post->ID );
$application_deadline	= get_field( "応募締切", $post->ID );

$employment_type		= get_field( "契約形態", $post->ID );
$contract_period		= get_field( "契約期間", $post->ID );
$place_of_employment		= get_field( "勤務場所", $post->ID );
$working_days_Hours		= get_field( "勤務日__時間", $post->ID );
$duties		= get_field( "職務", $post->ID );
$salary					= get_field( "給与", $post->ID );
$requirement					= get_field( "資格", $post->ID );
$process					= get_field( "採用の流れ", $post->ID );
$contact					= get_field( "連絡先", $post->ID );
$allowance				= get_field( "諸手当", $post->ID );
$payrise				= get_field( "昇給", $post->ID );
$bonus					= get_field( "賞与", $post->ID );
$paidleave 				= get_field( "有給休暇", $post->ID );
$holiday				= get_field( "休日休暇", $post->ID );
$welfare				= get_field( "福利厚生", $post->ID );
$location				= get_field( "勤務地", $post->ID );
$working_hours			= get_field( "勤務時間", $post->ID );

?>

<div class="recruit_alt">

	<h3><?php echo $title; ?></h3>

	<table class="wp-block-table">
		<tr>
			<th>Position</th>
			<td><?php echo the_title(); ?></td>
		</tr>
<?php if( $employment_type ): ?>
		<tr>
			<th>Employment type</th>
			<td><?php echo $employment_type; ?></td>
		</tr>
<?php endif; ?>
<?php if( $contract_period ): ?>
		<tr>
			<th>Terms of employment</th>
			<td><?php echo $contract_period; ?></td>
		</tr>
<?php endif; ?>
<?php if( $place_of_employment ): ?>
		<tr>
			<th>Place of employment</th>
			<td><?php echo $place_of_employment; ?></td>
		</tr>
<?php endif; ?>
<?php if( $duties ): ?>
		<tr>
			<th>Duties</th>
			<td><?php echo $duties; ?></td>
		</tr>
<?php endif; ?>
<?php if( $working_days_Hours ): ?>
		<tr>
			<th>Working days/Hours</th>
			<td><?php echo $working_days_Hours; ?></td>
		</tr>
<?php endif; ?>
<?php if( $holiday ): ?>
		<tr>
			<th>Days off</th>
			<td><?php echo $holiday; ?></td>
		</tr>
<?php endif; ?>
<?php if( $paidleave ): ?>
		<tr>
			<th>Leave</th>
			<td><?php echo $paidleave; ?></td>
		</tr>
<?php endif; ?>
<?php if( $salary ): ?>
		<tr>
			<th>Remuneration</th>
			<td><?php echo $salary; ?></td>
		</tr>
<?php endif; ?>
<?php if( $payrise ): ?>
		<tr>
			<th>Raise / Bonus</th>
			<td><?php echo $payrise; ?></td>
		</tr>
<?php endif; ?>
<?php if( $requirement ): ?>
		<tr>
			<th>Requirement</th>
			<td><?php echo $requirement; ?></td>
		</tr>
<?php endif; ?>
<?php if( $process ): ?>
		<tr>
			<th>Process</th>
			<td><?php echo $process; ?></td>
		</tr>
<?php endif; ?>
<?php if( $contact ): ?>
		<tr>
			<th>Contact</th>
			<td><?php echo $contact; ?></td>
		</tr>
<?php endif; ?>

	</table>

</div>


