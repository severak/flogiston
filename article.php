<?php theme_include('header'); ?>

<article>
	<div class="flogiston-article">
	<h1>
		<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
	</h1>

	<p><span class="flogiston-author"><?php echo article_author(); ?></span> <span class="flogiston-date"><?php echo date('j.n.Y H:i:s', article_time());?></span></p>

	<?php echo article_markdown(); ?>
	</div>
	
</article>

<?php theme_include('footer'); ?>