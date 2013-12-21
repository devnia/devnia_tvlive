<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<?php if(get_option('show_header')) { ?> 
    	<div class="red-title">يذاع حاليا</div>
        <div class="channel-div">
        	<?php
		  $args = array(
			'post_type' => array(
							'channels',
							
						),
			'order'    => 'DESC',
			'posts_per_page' => '4',
			'meta_query' => array(
							array(
								'key' => 'YOUR_PREFIX_gender',
								'value' => 'icon-ok-sign live'
							)
							)	
		);
		query_posts( $args ); ?>
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
				<div class="channel-box">
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
<?php endwhile; ?>
<?php endif; ?>
        <?php wp_reset_query(); ?>
            <div class="clear"></div>
        </div>
        
        <div class="grey-sptr"></div>
<?php } // end if ?>   
<?php if(get_option('show_content')) { ?>
        <div class="grey-title"><i class="icon-tv"></i>القنوات</div>
<div class="slider4">
<?php
		  $args = array(
			'post_type' => array(
							'channels',
							
						),
			'order'    => 'DESC',
			'posts_per_page' => '-1'	
		);
		query_posts( $args ); ?>
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

  <div class="slide">
  	<div class="chanel">
    	<?php $metaboxtext2 = esc_attr( get_post_meta( get_the_ID(), 'YOUR_PREFIX_gender', true ) ); ?>
    	<a href="<?php the_permalink() ?>"><h1><?php the_title(); ?>  <i class="<?php echo get_post_meta($post->ID, "YOUR_PREFIX_gender", true); ?>"></i></h1></a>
        <div class="nob">
            <?php if ('icon-minus-sign' == get_post_meta($post->ID, 'YOUR_PREFIX_gender', true)) { ?>
        	<p>يذاع قريبا مبارة : <?php echo get_post_meta($post->ID, "YOUR_PREFIX_name", true); ?> <br />
			<span><?php echo get_post_meta($post->ID, "YOUR_PREFIX_dob", true); ?><i class="icon-calendar" style="font-size:11px; float:none; margin:4px 5px;"></i></span>
			<span><?php the_terms( get_the_ID(), 'championship', '<i class="icon-trophy" style="font-size:11px; float:right; margin:4px 5px;"></i>', ', ', '' ); ?></span>
              </p>
            
            <i class="icon-eye-open"></i>
            
            <?php } elseif ('icon-ok-sign live' == get_post_meta($post->ID, 'YOUR_PREFIX_gender', true)) { ?>
            
        	<p>يذاع عليها مبارة : <?php echo get_post_meta($post->ID, "YOUR_PREFIX_name", true); ?> <br />  
			<span><?php echo get_post_meta($post->ID, "YOUR_PREFIX_dob", true); ?><i class="icon-calendar" style="font-size:11px; float:none; margin:4px 5px;"></i></span>
			<span><?php the_terms( get_the_ID(), 'championship', '<i class="icon-trophy" style="font-size:11px; float:right; margin:4px 5px;"></i>', ', ', '' ); ?></span>	

            </p>
            
            <i class="icon-eye-open"></i>
            
            <?php } else { ?>
            
            <p>لا توجد حداث مذاعة<br /> حاليا</p>
            
            <i class="icon-eye-close"></i>
            
            <?php } ?>
        
        </div>
        <div class="clear"></div>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>
        <?php wp_reset_query(); ?>
  </div>
<br />
        <div class="grey-sptr"></div>
        <div class="grey-title"><i class="icon-time"></i>قريبا علي <?php bloginfo('name'); ?></div>

<?php
$taxonomy = 'championship';
$tax_terms = get_terms($taxonomy, array('hide_empty' => false));
?>
<div class="channel-div soon">
<?php
foreach ($tax_terms as $tax_term) {
$saved_data = get_tax_meta($tax_term,'ba_image_field_id');
$metaboxtext = esc_attr( get_tax_meta($tax_term,'ba_image_field_id', true ) );
$metaboxtext2 = esc_attr( get_tax_meta($tax_term,'ba_radio_field_id', true ) );
 if (strlen($metaboxtext)>0){ 
echo '<div class="champion-box '. $metaboxtext2 .'"><a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>

<img src="'.$saved_data['src'].'">

</a><br /><h1>' . $tax_term->name.'</h1></div>';
} else {
echo '<div class="champion-box '. $metaboxtext2 .'"><a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>

<img src="'.get_stylesheet_directory_uri().'/images/dummy-2.png" alt="a">

</a><br /><h1>' . $tax_term->name.'</h1></div>';
}
}
?>
</div>


<br />
 <div class="grey-sptr"></div>
 <?php } ?>
 <?php if(get_option('show_footer')) { ?>

	<div class="grey-title"><i class="icon-trophy"></i>بطولات تذاع علي <?php bloginfo('name'); ?></div>
    
         
         <?php
$taxonomy = 'championship';
$tax_terms = get_terms($taxonomy, array('hide_empty' => false));
?>
<div class="channel-div now">
<?php
foreach ($tax_terms as $tax_term) {
$saved_data = get_tax_meta($tax_term,'ba_image_field_id');
$metaboxtext = esc_attr( get_tax_meta($tax_term,'ba_image_field_id', true ) );
$metaboxtext2 = esc_attr( get_tax_meta($tax_term,'ba_radio_field_id', true ) );
 if (strlen($metaboxtext)>0){ 
echo '<div class="champion-box '. $metaboxtext2 .'"><a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>

<img src="'.$saved_data['src'].'">

</a><br /><h1>' . $tax_term->name.'</h1></div>';
} else {
echo '<div class="champion-box '. $metaboxtext2 .'"><a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>

<img src="'.get_stylesheet_directory_uri().'/images/dummy-2.png" alt="a">

</a><br /><h1>' . $tax_term->name.'</h1></div>';
}
}
?>
</div>
         
         
 <div class="grey-sptr"></div>
 <?php } ?>
<div class="clear"></div>
<div id="contair">

	
    <div class="left-side">
    <div class="grey-title-in"><i class="icon-edit-sign"></i> أخبار من الموقع</div>
  		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>  
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
    <!-- news -->
<?php endwhile; ?>
<?php endif; ?>    
    </div>
    
    

    
<?php get_sidebar(); ?>
    
    
    <div class="clear"></div>

</div>
<div class="clear"></div>
<?php get_footer(); ?>