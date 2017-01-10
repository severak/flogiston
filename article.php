<?php theme_include('header'); ?>

<article class="article">
	<h1>
		<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
	</h1>

	<?php echo article_markdown(); ?>
	
	
</article>

<?php theme_include('footer'); ?>