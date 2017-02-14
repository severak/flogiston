<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo page_title(flogiston_translate('not found')); ?> - <?php echo site_name(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo theme_url('/css/flogiston.min.css'); ?>">
	<meta property="og:title" content="<?php echo page_title(flogiston_translate('not found')); ?> - <?php echo site_name(); ?>" />
	<meta property="og:image" content="<?php echo flogiston_server_uri() . theme_url('/css/background02.jpg'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php echo e(article_description() ? article_description() : site_description()); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
</head>
<body class="flogiston-background">
<div class="flogiston-page">
	<?php if(has_menu_items()): ?>
	<nav>
		<div class="flogiston-nav flogiston-padding">
		<?php while(menu_items()): ?>
		<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>" <?php echo (menu_active() ? 'class="active"' : ''); ?>><?php echo menu_name(); ?></a>
		<?php endwhile; ?>
		</div>
	</nav>
	<?php endif; ?>
	<header>
		<div class="flogiston-header flogiston-inverted flogiston-padding">
		<h1><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
		<em><?php echo site_description(); ?></em>
		</div>
	</header>
	<div class="flogiston-content">