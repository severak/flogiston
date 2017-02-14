<?php theme_include('header'); ?>


<?php if(has_posts()): ?>
	<?php
	if (has_pagination() && posts_next()) {
		echo '<div class="flogiston-padding">▲ ' . posts_next(flogiston_translate('newer posts'))  .' ▲</div>';
	}

	while(posts()): ?>
	<div class="flogiston-article">

	<h1>
		<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
	</h1>

	<p><span class="flogiston-author"><?php echo article_author(); ?></span> <span class="flogiston-date"><?php echo date(flogiston_translate('date format'), article_time());?></span></p>

	<?php echo article_description(); ?>
	
	<p><a href="<?php echo article_url(); ?>"><?php echo flogiston_translate('read more'); ?></a></p>
	</div>
	<hr class="flogiston-article-separator">
	
	<?php
	endwhile;

	if (has_pagination() && posts_prev()) {
		echo '<div class="flogiston-padding">▼ ' . posts_prev(flogiston_translate('older posts'))  .' ▼</div>';
	}

	?>
	

<?php else: ?>
		<p class="flogiston-padding"><?php echo flogiston_translate('blog empty'); ?></p>
<?php endif; ?>

<?php theme_include('footer'); ?>