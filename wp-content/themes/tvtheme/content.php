<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<?php if ( is_single() ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="grey-title-in">

    <i class="icon-edit-sign"></i> <?php the_title(); ?>
        <div class="single-info">
   <i class="icon-calendar"></i>  <?php the_time('j F Y') ?> <i class="icon-folder-open"></i>  <?php the_category(', ') ?>
    </div>
    </div>
    
    <div class="news-box-single">

    	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <?php if ( has_post_thumbnail() ) { ?>
		<img src="<?php echo $url; ?>" alt="<?php the_title(); ?>" class="pic-single" />
        <?php } else { ?>
		<img src="<?php bloginfo('template_url'); ?>/images/dummy.png" alt="<?php the_title(); ?>" class="pic-single" />
        <?php } ?>

    
    
    <div class="p">
   <?php the_content(); ?>
    </div>


    
    <div class="clear"></div>
    </div>
    <!-- news -->


	</article><!-- #post -->

<?php else : ?>


<div class="news-box">
    
    		<!-- Image Caption 6 -->
		<a href="<?php the_permalink() ?>"><div id="box-6" class="box">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
        <?php if ( has_post_thumbnail() ) { ?>
		<img id="image-6" src="<?php echo $url; ?>" alt="<?php the_title(); ?>" class="pic-topic" />
        <?php } else { ?>
		<img id="image-6" src="<?php bloginfo('template_url'); ?>/images/dummy.png" alt="<?php the_title(); ?>" class="pic-topic" />
        <?php } ?>
		<span class="caption scale-caption">
			<h3 class="more-inp"><i class="icon-search"></i></h3>

		</span>
		</div>
    	</a>
    <div class="topic">
    
    <a class="title" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    
    <div class="p">
    <?php the_content_rss('', TRUE, '', 50); ?>
    </div>
    <a href="<?php the_permalink() ?>" title="" class="more"> <i class="icon-plus-sign"></i>  المزيد</a>
    <div class="info">
    <a href="<?php the_permalink() ?>"><i class="icon-calendar"></i>  <?php the_time('j F Y') ?>  </a><i class="icon-folder-open"></i>  <?php the_category(', ') ?>  
    </div>
        <div class="clear"></div>
    </div>
    
    <div class="clear"></div>
    </div>

<?php endif; // is_single() ?>
