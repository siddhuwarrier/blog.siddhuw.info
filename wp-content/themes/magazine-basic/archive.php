<?php get_header(); ?>
	<?php if(have_posts()) the_post(); ?>
   		<h1 class="catheader">
    <?php 
	if (is_category()) :
		single_cat_title();
	elseif( is_tag() ) :
		printf(__("Posts Tagged &#8216; %s &#8217;", 'magazine-basic'), single_tag_title('',false));	
	elseif ( is_day() ) : 
        printf( __( 'Daily Archives: <span>%s</span>', 'magazine-basic' ), get_the_date() );
    elseif ( is_month() ) :
		printf( __( 'Monthly Archives: <span>%s</span>', 'magazine-basic' ), get_the_date( 'F Y' ) );
	elseif ( is_year() ) :
        printf( __( 'Yearly Archives: <span>%s</span>', 'magazine-basic' ), get_the_date( 'Y' ) );
    elseif(is_archive()) :
        _e( 'Blog Archives', 'magazine-basic' );
    endif; 
    ?>
    	</h1>
    <?php if (is_category()) : $catdesc = category_description(); if(stristr($catdesc,'<p>')) { echo '<div class="catdesc">'.$catdesc.'</div>'; } endif; ?>
	<?php rewind_posts(); ?>

	<?php get_template_part( 'loop', 'archive' ); ?>
<?php get_footer(); ?>