<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class="right-side">
 

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif; ?>



    <div class="grey-title-in"><i class="icon-thumbs-up"></i>تابعنا</div>
    <div class="side-bars">
	<a class="social-link facebook-link" href="<?php echo get_option('facebook'); ?>">تابعنا علي فيس بوك<i class="icon-facebook"></i></a>
	<a class="social-link googleplus-link" href="<?php echo get_option('googleplus'); ?>">تابعنا في دوائر جوجل بلس<i class="icon-google-plus"></i></a>
	<a class="social-link twitter-link" href="<?php echo get_option('twitter'); ?>">غرد معنا علي تويتر<i class="icon-twitter"></i></a>
	<a class="social-link rss-link" href="<?php bloginfo('rss2_url'); ?>">تغذيات الموقع<i class="icon-rss"></i></a>
    </div>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
	<?php endif; ?>



 </div>   
    
		   

			