<?php if (site_meta('flogiston_footer', '')!='') { ?>
<div class="flogiston-footer flogiston-inverted flogiston-padding">
<?php echo html_entity_decode(site_meta('flogiston_footer', '')); ?>
</div>
<?php } ?>

</div>
</div>

<!--[if !IE]>-->
<script src="<?php echo theme_url('/js/medium-zoom.min.js'); ?>"></script>
<script>mediumZoom('.flogiston-article > img, .flogiston-article p > img, .flogiston-article .figure > img');</script>
<!--<![endif]-->
<style>
.flogiston-background { background: url(<?php echo flogiston_background(); ?>) no-repeat fixed center/cover; }
</style>
</body>
</html>