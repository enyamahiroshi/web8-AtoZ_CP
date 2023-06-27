<?php
/**
 * top-news-and-blog.php
 * NEWS & BLOG
 */
?>

<section id="news_and_blog">
	<div class="inner">

		<ul>

			<li>
				<h3>お知らせ</h3>
				<ul class="list">
<?php
$args = array(
			"post_type" => "post",
			"post_status" => "publish",
			"cat" => 1,
			"posts_per_page" => 10,
			"orderby" => "date"
		);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
while ( $the_query->have_posts() ) : $the_query->the_post();

	get_template_part( "loop/line", "post" );

endwhile;
endif;
?>
				</ul>
			</li>

			<!--<li>
				<h3>AtoZ Story</h3>
				<ul class="list">-->
<?php
/*
 https://www.atoz-school.com/story/からRSS取得

$counter = 1;
$source = "https://www.atoz-school.com/story/feed/";
$string = ltrim( file_get_contents($source) );
$xml = simplexml_load_string($string);
if( !empty($xml->channel->item) ):
	foreach( $xml->channel->item as $item ):
		$title = $item->title;
		$link = $item->link;

		//Title先頭３文字だけ抽出
		$num = mb_substr( $title, 0, 3 ); //「012」
		$title = trim( mb_substr( $title, 3, mb_strlen($title) ) );

		echo "<li><i>" .$num. "</i><a href=" .$link. " target='_blank'>" .$title. "</a></li>";

		$counter++;
		if( $counter > 5 ) break;

	endforeach;
endif;
?>
				</ul>-->
				*/?>
			</li>

		</ul>

	</div>
</section>