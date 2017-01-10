<?php theme_include('header'); ?>


<?php if(has_posts()): ?>
	<?php while(posts()): ?>
	<article class="article">
	<h1>
		<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
	</h1>

	<?php echo article_description(); ?>
	
	<p><a href="<?php echo article_url(); ?>">celý článek »</a></p>
	
	<hr>
	
	<?php endwhile;?>
	

<?php else: ?>
		<p>Looks like you have some writing to do!</p>
<?php endif; ?>

<?php theme_include('footer'); ?>