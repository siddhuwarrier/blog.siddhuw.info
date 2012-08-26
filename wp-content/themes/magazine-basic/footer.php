	</div>
    <?php
		$loc = pbt_theme_option('sidebar_location');
		if($loc==2 || $loc==4) {
			get_sidebar(); // calling the First Sidebar
		}
		if(pbt_theme_option('sidebar_width2')!=0 && $loc!=3) get_sidebar( "second" ); // calling the Second Sidebar
	?>
</div>
<!-- begin footer -->
<div id="footer">
    <?php printf(__("Copyright &copy; %d", 'magazine-basic'), date('Y')); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>. <?php _e("All Rights Reserved", 'magazine-basic'); ?>.<br />
    <span class="red"><?php echo THEME_NAME; ?></span> <?php _e("theme designed by", 'magazine-basic'); ?> <a href="http://themes.bavotasan.com"><span class="red">Themes by bavotasan.com</span></a>.<br />
    <?php _e("Powered by", 'magazine-basic'); ?> <a href="http://www.wordpress.org">WordPress</a>.
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
/* <![CDATA[ */
(function($) {
	$("object, embed, .format-video iframe").each(function() {
		var $origVideo = $(this),
			aspectRatio = $origVideo.attr("height") / $origVideo.attr("width"),
			wrapWidth = $origVideo.parents().find("p").width();
		if($origVideo.attr("width") > wrapWidth) {
			$origVideo
				.attr("width", wrapWidth)
				.attr("height", (wrapWidth * aspectRatio));
		}
	});
})(jQuery);
/* ]]> */
</script>
<!-- <?php echo THEME_NAME; ?> theme designed by Themes by bavotasan.com - http://themes.bavotasan.com -->
</body>
</html>