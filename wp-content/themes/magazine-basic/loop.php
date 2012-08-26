<?php 
if ( is_home() ) { 
    
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	if ( 'on' == pbt_theme_option( 'latest_story' ) && 2 > $paged ) 
		echo '<h5 class="latest">' . __( 'Latest Story', 'magazine-basic' ) . '</h5>';

}

if ( ! have_posts() && ! is_search() ) : ?>

	<div id="post-0" class="post error404 not-found">

		<h1><?php _e( 'Not Found', 'magazine-basic' ); ?></h1>

		<div class="entry-content">

			<p><?php _e( 'No results were found for your request.', 'magazine-basic' ); ?></p>

		</div><!-- .entry-content -->

	</div><!-- #post-0 -->

	<?php 
endif;

if ( is_search() ) {

    $mySearch =& new WP_Query( "s=$s & showposts=-1" );
    $num = $mySearch->post_count;
    echo '<h1 class="catheader">' . $num . __( ' search results for', 'magazine-basic') . ' "' .  get_search_query() . '"</h1>';

}

$x = 1;

while ( have_posts() ) : the_post();

	$optionlayout = pbt_theme_option( 'post_layout' );
	$wordlimit = pbt_theme_option( 'excerpt_one' );
	$classes = '';
	
	if ( is_home() && 2 > $paged  ) {
	
		$firstdiv = ( 4 == $optionlayout ) ? '<div id="threecol"><div id="threecol2">' : '<div id="twocol">';
		$firstdiv = ( 1 == $optionlayout ) ? '' : $firstdiv;

		if ( 2 == $x ) { 
			
			echo $firstdiv; 
			$i = 1; 
			
		}

		if ( 2 == $optionlayout ) {
			
			if( 1 != $x ) {
			
				$classes = 'twopost twopost'; 
			
				if ( 5 == $i )
					$i = 3; 
			
				$classes .= $i; 
				$i++;
				$wordlimit = pbt_theme_option( 'excerpt_two' );
	
			}
	
		}
		
		if ( 3 == $optionlayout ) {
			
			if ( 1 < $x && 4 > $x ) {
	
				$classes = 'twopost twopost'; 
	
				if ( 5 == $i ) 
					$i = 3;
					
				$classes .= $i; 
				$i++;
				$wordlimit = pbt_theme_option( 'excerpt_two' );	
	
			}
	
			if ( 4 == $x) { 
			
				echo '</div><div class="mainhr"></div><div id="threecol"><div id="threecol2">'; 
				$i = 1;
			
			}
	
			if ( 3 < $x ) {
			
				$classes = 'threepost threepost'; 
				if ( 7 == $i )
					$i = 4;
					
				$classes .= $i; 
				$i++;
				$wordlimit = pbt_theme_option( 'excerpt_three' );
				
			}
			
		}	
	
		if ( 4 == $optionlayout ) {
	
			if ( 1 < $x ) {
	
				$classes = 'threepost threepost'; 
				if ( 7 == $i ) 
					$i = 4;
					
				$classes .= $i; 
				$i++;
				$wordlimit = pbt_theme_option( 'excerpt_three' );
				
			}
			
		}
	
	}
	?>
	
	<div id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
	
		<?php 
		if(is_singular()) {
			if(function_exists('has_post_format') && has_post_format('aside')) { // new aside post format
				echo '<div class="entry">';
					the_content();
				echo '</div>';
			} else {
        		?>
                <h1><?php the_title(); ?></h1>
                <?php
                if(is_single()) {
	                echo '<div class="meta">';
	                    if(pbt_theme_option('dates_posts')=='on') { echo '<div class="date">'; the_time(get_option('date_format')); echo '</div>'; }
	                    if(pbt_theme_option('authors_posts')=='on') { _e("By", 'magazine-basic'); echo ' '; the_author_posts_link(); }
	                echo '</div>';
                }
                echo '<div class="entry">';
                    $subtitle = get_post_meta($post->ID, 'subtitle', true);
                    if($subtitle) echo '<p class="sub">'.$subtitle.'</p>';
                    the_content(__('Read more &raquo;', 'magazine-basic'));
                    wp_link_pages(array('before' => '<p><strong>'.__('Pages', 'magazine-basic').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
                    the_tags(__('<p class="tags"><small><strong>Tags:</strong> ', 'magazine-basic'), ', ', '</small></p>'); 
                echo '</div>';
			}
		} else { 
        	if(function_exists('has_post_format') && has_post_format('aside')) { // new aside post format
				echo '<div class="entry">';
					pbt_theme_excerpt($wordlimit);
				echo '</div>';
			} elseif(function_exists('has_post_format') && has_post_format('link')) { // new link post format
				echo '<div class="entry">';
					the_content(__('Read more &raquo;', 'magazine-basic'));
				echo '</div>';
			} else {
				?>
				<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'magazine-basic' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<?php
				echo '<div class="meta">';
				if(is_home()) {
					if(pbt_theme_option('dates_index') == 'on') { echo '<div class="date">'; the_time(get_option('date_format')); echo '</div>'; }
					if(pbt_theme_option('authors_index') == 'on') { _e("By", 'magazine-basic'); echo ' '; the_author_posts_link(); }
				} else {
					if(pbt_theme_option('dates_cats') == 'on') { echo '<div class="date">'; the_time(get_option('date_format')); echo '</div>'; }
					if(pbt_theme_option('authors_cats') == 'on') { _e("By", 'magazine-basic'); echo ' '; the_author_posts_link(); }
				}
				echo '</div>';
				echo '<div class="entry">';
				if(function_exists('has_post_format') && has_post_format('gallery')) { // new gallery post format
					$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
					if ( $images ) :
						$total_images = count( $images );
						$image = array_shift( $images );
						$image_img_tag = wp_get_attachment_image( $image->ID, 'full' );
					?>
					<a class="gallery-thumb" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
					<p><em><?php printf( _n( 'This gallery contains <a %1$s>%2$s photo</a>.', 'This gallery contains <a %1$s>%2$s photos</a>.', $total_images, 'magazine-basic' ),
							'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'magazine-basic' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
							number_format_i18n( $total_images )
						); ?></em>
					</p>
					<?php endif; ?>
					<?php 
				} else {
					if(function_exists('has_post_format') && (has_post_format('video') || has_post_format('image') || has_post_format('audio'))) { // new video || image || audio post format
                    	echo '<div class="pformat">';
						the_content(__('Read more &raquo;', 'magazine-basic'));
						echo '</div>';
					} else {
						if(pbt_theme_option('excerpt_content')!=2) {
							if(function_exists('has_post_thumbnail') && has_post_thumbnail()) { 
								echo '<a href="'.get_permalink().'">';
								the_post_thumbnail('thumbnail', array('class' => 'alignleft'));
								echo '</a>';
							} else { 
								echo pbt_resize(get_option('thumbnail_size_w'),get_option('thumbnail_size_h')); 
							}
							/*if(function_exists('has_post_thumbnail') && has_post_thumbnail()) { 
								echo '<a href="'.get_permalink().'">';
								if($x==1) {
								  the_post_thumbnail(array(150,150), array('class' => 'alignleft'));
								} elseif($x>1 && $x<4) {
								  the_post_thumbnail(array(100,100), array('class' => 'alignleft'));
								} else {
								  the_post_thumbnail(array(80,80), array('class' => 'alignleft'));
								}		
								echo '</a>';
							} else { 
								if($x==1) {
									echo pbt_resize(150,150); 
								} elseif($x>1 && $x<4) {
									echo pbt_resize(100,100); 
								} else {
									echo pbt_resize(80,80); 
								}								
							}*/
							pbt_theme_excerpt( $wordlimit );
						} else {
							the_content( __( 'Read more &raquo;', 'magazine-basic' ) );
						}
					}
				}
				echo '</div>';
			} 
		} 
		?>
	
	</div><!-- #post-## -->
   	
   	<?php 
   	if ( is_single() ) 
   		comments_template(); 
    
	$x++; // counter 
	   
endwhile; 

if ( is_home() && 2 > $paged ) {
	
	if ( 1 != $optionlayout && 4 != $x )
		echo '</div>';

	if ( ( 2 == $optionlayout || 4 == $optionlayout ) && 4 == $x )
		echo '</div>';
	
	if ( ( 3 == $optionlayout && 3 < $x ) || ( 4 == $optionlayout && 1 < $x ) )
		echo '</div>';

}
	
if ( ! is_single() ) 
	pbt_pagination();