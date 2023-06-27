<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="format-detection" content="telephone=no">

<title><?php echo get_bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php echo home_url('/'); ?>favicon.ico" />
<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/lib/reset-min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/lib/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/skeltone.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/module.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/chunk.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/script.js" type="text/javascript" async></script>

<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-92601487-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-92601487-3');
</script>


</head>

<body <?php body_class(); ?>>

<?php
//ヘッダ
get_template_part( "chunk/common", "header" );

//ナビゲーション
get_template_part( "chunk/common", "globalnavi" );

//メインビジュアル
get_template_part( "chunk/top", "heroimage" );

//タイトルオビ
get_template_part( "chunk/common", "titleobi" );

//パンくず
get_template_part( "chunk/common", "breadcrumb" );
?>

<main>
