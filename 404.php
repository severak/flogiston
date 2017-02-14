<?php theme_include('header'); ?>

<div class="flogiston-article">

		<h1><?php echo flogiston_translate('not found'); ?></h1>
		<p><?php
			echo flogiston_translate('back home', array(
				'{' => '<a href="' . base_url() . '">',
				'}' => '</a>'
			));
		?></p>

</div>

<?php theme_include('footer'); ?>