<!-- begin second sidebar -->
    <div id="secondsidebar">
		<?php
		if ( !dynamic_sidebar("Sidebar Two") ) : ?>
            <div class="side-widget">
                   <?php _e('<h2>Archives</h2>', 'magazine-basic'); ?>
                    <ul>
                        <?php wp_get_archives('type=monthly'); ?>
                    </ul>
            </div>
            <div class="side-widget">
                   <?php _e('<h2>Tags</h2>', 'magazine-basic'); ?>
                   <?php wp_tag_cloud(); ?>
            </div>
        <?php endif; ?>
    </div>
<!-- end second sidebar -->