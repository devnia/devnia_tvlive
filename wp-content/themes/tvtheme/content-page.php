<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="grey-title-in">
    <div class="single-info">
   <i class="icon-calendar"></i>  <?php the_time('j F Y') ?> 
    </div>
    <i class="icon-edit-sign"></i> <?php the_title(); ?></div>
    
    <div class="news-box-single">

    	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <?php if ( has_post_thumbnail() ) { ?>
		<img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" class="pic-single" />
        <?php } ?>

    
    
    <div class="p">
   <?php the_content(); ?>
    </div>


    
    <div class="clear"></div>
    </div>
    <!-- news -->


	</article><!-- #post -->

