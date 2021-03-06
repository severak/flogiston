<?php theme_include('header'); ?>

<article>
	<div class="flogiston-article">
	<h1>
		<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
	</h1>

	<p><span class="flogiston-author"><?php echo article_author(); ?></span> <span class="flogiston-date"><?php echo date(flogiston_translate('date format'), article_time());?></span></p>

	<?php echo article_markdown(); ?>

	<?php
	if (article_category_id()!=1) {
		$categoryLink = '<a href="' . article_category_url() . '">' . article_category() . '</a>';
		echo '<p>'.flogiston_translate('article category', array('{category}'=>$categoryLink)).'</p>';
	}
	?>
	</div>
	
</article>

<?php theme_include('footer'); ?>