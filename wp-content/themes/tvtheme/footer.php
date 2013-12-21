<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<div class="clear"></div>
    </div>
    
 
</div>
<div id="foot">
	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-3' ); ?>
	<?php endif; ?>
    <div class="rights">
    	جميع الحقوق محفوظة &copy; <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> <i class="icon-tv"></i><br />
        مواد البث المباشر المنشورة في الموقع لسنا مسئولين عن محتواها في معظم الاوقات
        نحاول جاهدين ان نقوم بمتابعة كافة الاحداث الرياضية <br />

        
    </div>
    <div class="clear"></div>
</div>
<?php if ( is_home() ) { ?>
<div id="mask"></div>
<?php } ?>
<?php wp_footer(); ?>
    <script type="text/javascript">
	$(window).load(function () {
		$('#mask').fadeOut('slow');
	});
	</script><!-- loading page  -->
</body>
</html>