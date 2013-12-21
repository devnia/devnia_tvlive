jQuery(document).ready(function(){
	// ajax pagination
	jQuery('#menu-top a, .channel-div a, #channel-div a, #contair a, #hed h1 a').live('click', function(){ // if not using wp-page-numbers, change this to correct ID
		var link = jQuery(this).attr('href');
					// #main is the ID of the outer div wrapping your posts
		jQuery('#innre-paper').html('<div id="loading"></div>');
					// #entries is the ID of the inner div wrapping your posts
		jQuery('#innre-paper').load(link+' #contair')
	});
}); // end ready function
