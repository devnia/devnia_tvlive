<?php
/**
 * The template for displaying Championship pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
<div id="contair">
	<section class="left-side">
		<div id="content" role="main">
<div class="grey-title-in"><i class="icon-edit-sign"></i> <?php the_terms( get_the_ID(), 'championship', '', ', ', '' ); ?>
<div class="img-sh-inner">
<?php 

//Get the correct taxonomy ID by slug
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
//Get Taxonomy Meta
$saved_data = get_tax_meta($term->term_id,'ba_image_field_id');
$metaboxtext = esc_attr( get_tax_meta($term->term_id,'ba_image_field_id', true ) );
 if (strlen($metaboxtext)>0){ 
echo '<img src="'.$saved_data['src'].'" />'; 
} else {
echo '<img src="'.get_stylesheet_directory_uri().'/images/dummy-2.png" alt="a">'; 
}
?>
</div>
</div> 
<div class="channel-div">       
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content-championship', get_post_format() ); ?>
           <?php endwhile; // end of the loop. ?>     
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
</div>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<div class="clear"></div>
</div>
<?php get_footer(); ?>