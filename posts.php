<?php theme_include('header'); ?>


<?php if(has_posts()): ?>
	<?php while(posts()): ?>
		<article xmlns="http://www.w3.org/1999/html">
	<div class="flogiston-article">

	<h1>
		<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
	</h1>

	<p><span class="flogiston-author"><?php echo article_author(); ?></span> <span class="flogiston-date"><?php echo date('j.n.Y H:i:s', article_time());?></span></p>

	<?php echo article_description(); ?>
	
	<p><a href="<?php echo article_url(); ?>">celý článek »</a></p>
	</div>
	<hr class="flogiston-article-separator">
	
	<?php endwhile;?>
	

<?php else: ?>
		<p>Looks like you have some writing to do!</p>
<?php endif; ?>

<?php theme_include('footer'); ?>