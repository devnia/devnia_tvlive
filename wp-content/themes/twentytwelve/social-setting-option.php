<?php  
  
/* ------------------------------------------------------------------------ * 
 * Setting Registration 
 * ------------------------------------------------------------------------ */   
  
/** 
 * Initializes the theme options page by registering the Sections, 
 * Fields, and Settings. 
 * 
 * This function is registered with the 'admin_init' hook. 
 */   
add_action('admin_init', 'sandbox2_initialize_theme_options');  
function sandbox2_initialize_theme_options() {  
  
    // First, we register a section. This is necessary since all future options must belong to one.   
    add_settings_section(  
        'social_settings_section',         // ID used to identify this section and with which to register options  
        'إعدادات ظهور رئيسية الموقع',                  // Title to be displayed on the administration page  
        'sandbox2_general_options_callback', // Callback used to render the description of the section  
        'general'                           // Page on which to add this section of options  
    );  
      
    // Next, we will introduce the fields for toggling the visibility of content elements.  
    add_settings_field(   
        'facebook',                      // ID used to identify the field throughout the theme  
        'رابط فيس بوك',                           // The label to the left of the option interface element  
        'sandbox2_toggle_facebook_callback',   // The name of the function responsible for rendering the option interface  
        'general',                          // The page on which this option will be displayed  
        'social_settings_section',         // The name of the section to which this field belongs  
        array(                              // The array of arguments to pass to the callback. In this case, just a description.  
            ''  
        )  
    );  
      
    add_settings_field(   
        'twittwr',                       
        'رابط تويتر',                
        'sandbox2_toggle_twitter_callback',    
        'general',                            
        'social_settings_section',           
        array(                                
            ''  
        )  
    );  
      
    add_settings_field(   
        'googleplus',                        
        'رابط جوجل بلس',                 
        'sandbox2_toggle_googleplus_callback',     
        'general',                            
        'social_settings_section',           
        array(                                
            ''  
        )  
    );  
      
    // Finally, we register the fields with WordPress  
    register_setting(  
        'general',  
        'facebook'  
    );  
      
    register_setting(  
        'general',  
        'twitter'  
    );  
      
    register_setting(  
        'general',  
        'googleplus'  
    );  
      
} // end sandbox2_initialize_theme_options  
  
/* ------------------------------------------------------------------------ * 
 * Section Callbacks 
 * ------------------------------------------------------------------------ */   
  
/** 
 * This function provides a simple description for the General Options page.  
 * 
 * It is called from the 'sandbox2_initialize_theme_options' function by being passed as a parameter 
 * in the add_settings_section function. 
 */  
function sandbox2_general_options_callback() {  
    echo '<p>اختر ما تريد اظهارة واخفاءه</p>';  
} // end sandbox2_general_options_callback  
  
/* ------------------------------------------------------------------------ * 
 * Field Callbacks 
 * ------------------------------------------------------------------------ */   
  
/** 
 * This function renders the interface elements for toggling the visibility of the header element. 
 *  
 * It accepts an array of arguments and expects the first element in the array to be the description 
 * to be displayed next to the checkbox. 
 */  
function sandbox2_toggle_facebook_callback($args) {  
      
    // Note the ID and the name attribute of the element match that of the ID in the call to add_settings_field  
    $html = '<input type="text" id="facebook" name="facebook" value="' . get_option('facebook') . '"  />';   
      
    // Here, we will take the first argument of the array and add it to a label next to the checkbox  
    $html .= '<label for="facebook"> '  . $args[0] . '</label>';   
      
    echo $html;  
      
} // end sandbox2_toggle_header_callback  
  
function sandbox2_toggle_twitter_callback($args) {  
  
    $html = '<input type="text" id="twitter" name="twitter" value="' . get_option('twitter') . '" />';   
    $html .= '<label for="twitter"> '  . $args[0] . '</label>';   
      
    echo $html;  
      
} // end sandbox2_toggle_content_callback  
  
function sandbox2_toggle_googleplus_callback($args) {  
      
    $html = '<input type="text" id="googleplus" name="googleplus" value="' . get_option('googleplus') . '" />';   
    $html .= '<label for="googleplus"> '  . $args[0] . '</label>';   
      
    echo $html;  
      
} // end sandbox2_toggle_footer_callback  
  
?> 