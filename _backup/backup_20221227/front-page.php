<?php
/**
 * front-page.php
 */

get_header();


//選ばれる理由
get_template_part( "chunk/top", "reason" );

//サービス
get_template_part( "chunk/top", "service" );

//バナー
get_template_part( "chunk/common", "banners" );

//ニュース＆BLOG
get_template_part( "chunk/top", "news-and-blog" );



get_footer();
?>