<?php theme_include('header'); ?>

<article>
	<div class="flogiston-article">
	<h1>
		<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
	</h1>

	<?php echo article_markdown(); ?>
	</div>
	
</article>

<?php theme_include('footer'); ?>