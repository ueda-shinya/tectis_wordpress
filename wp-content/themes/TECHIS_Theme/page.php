<?php get_header(); ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
		<!-- 記事ヘッダー -->
		<div class="page__header">
			<!-- 画像 -->
			<?php the_post_thumbnail('full'); ?>
			<!-- タイトル -->
			<div class="page__header__title">
				<?php the_title(); ?>
				<div class="page__header__border"></div>
			</div>
		</div>

		<!-- 本文 -->
		<article class="article">
			<?php the_content(); ?>
		</article>
	<?php
	endwhile;
endif;
?>

<?php get_footer(); ?>