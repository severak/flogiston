<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo theme_url('/css/flogiston.css'); ?>">
	<meta property="og:title" content="<?php echo site_name(); ?>" />
	<meta property="og:image" content="<?php echo theme_url('/css/rozvedcik.jpg'); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="<?php echo site_description(); ?>" />
	<!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php if(has_menu_items()): ?>
	<nav class="nav paperlike">
		<?php while(menu_items()): ?>
		<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>" <?php echo (menu_active() ? 'class="active"' : ''); ?>><?php echo menu_name(); ?></a>
		<?php endwhile; ?>
	</nav>
	<?php endif; ?>
	<header class="header paperlike">
	<h1><a href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a></h1>
	<em><?php echo site_description(); ?></em>
	</header>
	<div class="paper">