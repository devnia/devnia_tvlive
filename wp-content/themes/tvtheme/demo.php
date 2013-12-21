<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/docs/define-meta-boxes
 */

/********************* META BOX DEFINITIONS ***********************/

/**
 * Prefix of meta keys (optional)
 * Use underscore (_) at the beginning to make keys hidden
 * Alt.: You also can make prefix empty to disable it
 */
// Better has an underscore as last sign
$prefix = 'YOUR_PREFIX_';

global $meta_boxes;

$meta_boxes = array();


// 2nd meta box
$meta_boxes[] = array(
	'id'		=> 'additional',
	'title'		=> 'حالة القناة',
	'pages'		=> array( 'channels' ),

	'fields'	=> array(

		// RADIO BUTTONS
		array(
			'name'		=> 'ضع علامة حسب حالة القناة',
			'id'		=> "{$prefix}gender",
			'type'		=> 'radio',
			// Array of 'key' => 'value' pairs for radio options.
			// Note: the 'key' is stored in meta field, not the 'value'
			'options'	=> array(
				'icon-ok-sign live'			=> 'مذاع عليها حاليا حدث',
				'icon-minus-sign'			=> 'سيذاع قريبا عليها حدث ',
				'icon-remove-sign end'			=> 'لا يوجد عليها احداث مذاعة'
			),
			'std'		=> '',
			'desc'		=> ''
		),

	)
);


// 1st meta box
$meta_boxes[] = array(
	// Meta box id, UNIQUE per meta box
	'id' => 'recent',

	// Meta box title - Will appear at the drag and drop handle bar
	'title' => 'معلومات الحدث المذاع حاليا',

	// Post types, accept custom post types as well - DEFAULT is array('post'); (optional)
	'pages' => array( 'channels' ),

	// Where the meta box appear: normal (default), advanced, side; optional
	'context' => 'normal',

	// Order of meta box: high (default), low; optional
	'priority' => 'high',

	// List of meta fields
	'fields' => array(
		// TEXT
		array(
			// Field name - Will be used as label
			'name'		=> 'اسم الحدث',
			// Field ID, i.e. the meta key
			'id'		=> $prefix . 'name',
			// Field description (optional)
			'desc'		=> 'اكتب اسم المباراة',
			// CLONES: Add to make the field cloneable (i.e. have multiple value)
			'type'		=> 'text',
			// Default value (optional)
			'std'		=> ''
		),
		// DATE
		array(
			'name'		=> 'تاريخ الاذاعة',
			'id'		=> "{$prefix}dob",
			'type'		=> 'date',
			// Date format, default yy-mm-dd. Optional. See: http://goo.gl/po8vf
			'format'	=> 'd MM, yy'
		),

	)
);




/********************* META BOX REGISTERING ***********************/

/**
 * Register meta boxes
 *
 * @return void
 */
function YOUR_PREFIX_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( class_exists( 'RW_Meta_Box' ) )
	{
		foreach ( $meta_boxes as $meta_box )
		{
			new RW_Meta_Box( $meta_box );
		}
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'YOUR_PREFIX_register_meta_boxes' );