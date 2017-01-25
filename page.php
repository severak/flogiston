<?php theme_include('header'); ?>
<article>
<div class="flogiston-article">

<h1>
<a href="<?php echo page_url(); ?>" title="<?php echo page_title(); ?>">
<?php echo page_title(); ?>
</a>
</h1>

<?php echo page_content(); ?>
</div>
</article>
<?php theme_include('footer'); ?>