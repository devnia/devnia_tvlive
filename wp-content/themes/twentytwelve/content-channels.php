<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>


<?php if ('icon-minus-sign' == get_post_meta($post->ID, 'YOUR_PREFIX_gender', true)) { ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
        <div class="grey-title-in">

    <i class="icon-facetime-video"></i> <?php the_title(); ?>
        <div class="single-info">
    <i class="icon-time"></i>  <?php echo get_post_meta($post->ID, "YOUR_PREFIX_dob", true); ?>
    <i class="icon-trophy"></i> <?php the_terms(get_the_ID(), 'championship', '', ', ', '' ); ?>
    
    </div>
     </div>
		</header><!-- .entry-header -->

<div class="news-box-single">

    
    <div class="p">
<div class="title"><i class="icon-flag-alt"></i> يذاع عليها قريبا <?php echo get_post_meta($post->ID, "YOUR_PREFIX_name", true); ?> </div> 
<div class="grey-sptr"></div>   
<?php the_content(); ?>
    </div>


    
    <div class="clear"></div>
    </div>


	</article><!-- #post -->



<?php } elseif ('icon-ok-sign live' == get_post_meta($post->ID, 'YOUR_PREFIX_gender', true)) { ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
        <div class="grey-title-in">

    <i class="icon-facetime-video"></i> <?php the_title(); ?>
        <div class="single-info">
    <i class="icon-time"></i>  <?php echo get_post_meta($post->ID, "YOUR_PREFIX_dob", true); ?>
    <i class="icon-trophy"></i> <?php the_terms(get_the_ID(), 'championship', '', ', ', '' ); ?>
    
    </div>
     </div>
		</header><!-- .entry-header -->

<div class="news-box-single">

    
    <div class="p">
<div class="title live"><i class="icon-flag"></i> يذاع عليها حاليا <?php echo get_post_meta($post->ID, "YOUR_PREFIX_name", true); ?></div> 
<div class="grey-sptr"></div>   
<?php the_content(); ?>
    </div>


    
    <div class="clear"></div>
    </div>


	</article><!-- #post -->


<?php } else { ?>
	
<div class="news-box-single">

    
    <div class="p">
<div class="title"><i class="icon-flag-checkered"></i>  لا توجد حداث مذاعة  
            <p><br /> حاليا</p>
          </div>
          </div>
          </div>  
            
            
<?php } ?>