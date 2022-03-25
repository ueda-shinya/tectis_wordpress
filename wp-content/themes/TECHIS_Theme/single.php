<?php get_header(); ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>
		<!-- タイトル -->
		<div class="post__title">
		<?php the_title(); ?>
		</div>
		<!-- アイキャッチ画像 -->
		<?php the_post_thumbnail('full'); ?>
		<div class="post">
			<div class="post__body">
				<!-- 本文 -->
				<?php the_content(); ?>
				<!-- カテゴリ -->
				<div class="cat-data__list">
				<?php if (has_category()) : ?>
					<span class="cat-data">
						<?php echo get_the_category_list(' '); ?>
					</span>
				<?php endif; ?>
				</div>
			</div>
			<div class="post__sidebar">
				<?php get_sidebar(); ?>
			</div>
		</div>
<?php
	endwhile;
endif;
?>
	<?php get_footer(); ?>
