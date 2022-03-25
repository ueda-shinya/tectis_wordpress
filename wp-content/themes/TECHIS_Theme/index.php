<?php get_header(); ?>
<!-- 記事ループ -->
<?php if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>
		<!-- 記事のリンク -->
		<a href="<?php the_permalink(); ?>">
			<div class="index__item">
				<!-- アイキャッチ画像 -->
				<div class="index__image">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<!-- タイトル -->
				<dev class="index__body">
					<dev class="index__title">
						<p>
							<?php the_title(); ?>
						</p>
					</dev>
					<!-- 投稿日 -->
					<div class="index__date">
						<time datetime="<?php echo get_the_date('Y-m-d'); ?>">
							<?php echo get_the_date(); ?>
						</time>
					</div>
					<!-- 抜粋 -->
					<div class="index__extract">
						<p>
							<?php the_excerpt(); ?>
						</p>
					</div>
				</dev>
			</div>
		</a>
<?php endwhile;
endif; ?>


<?php
	$args = array(
    'mid_size' => 1,
    'prev_text' => '&lt;&lt;前へ',
    'next_text' => '次へ&gt;&gt;',
    'screen_reader_text' => ' ',
	);
	the_posts_pagination($args);
?>

<?php get_footer(); ?>