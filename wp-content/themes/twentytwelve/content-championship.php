<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

			<div class="channel-box-inner">
            <a href="<?php the_permalink() ?>">
            	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                <?php if ( has_post_thumbnail() ) { ?>
            	<img src="<?php echo $url; ?>" title="<?php echo get_post_meta($post->ID, "YOUR_PREFIX_name", true); ?>" />
                <?php } else { ?>
                <img src="<?php bloginfo('template_url'); ?>/images/dummy.png" title="<?php echo get_post_meta($post->ID, "YOUR_PREFIX_name", true); ?>" />
                <?php } ?>
                    <!-- description div -->  
                    <div class="description">  
                        <!-- description content -->  
                        <div class="description_content">
                        <i class="icon-play-circle"></i>
                        <p><?php echo get_post_meta($post->ID, "YOUR_PREFIX_name", true); ?></p>
                        </div>  
                        <!-- end description content -->  
                    </div>  
                    <!-- end description div -->  
                <h1><?php the_title(); ?></h1>  
            </a>
            </div>
            <!-- end box div -->
