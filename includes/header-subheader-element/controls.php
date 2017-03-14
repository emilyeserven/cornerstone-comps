<?php

/**
 * Element Controls
 */

return array(

	'heading' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Heading', 'es-cornerstone-comps' ),
			'tooltip' => __( 'Tooltip to describe your controls.', 'es-cornerstone-comps' ),
		),
		'context' => 'content',
    'suggest' => __( 'Heading', 'es-cornerstone-comps' ),
	),

	'subheading' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Subheading', 'es-cornerstone-comps' ),
			'tooltip' => __( 'Tooltip to describe your controls.', 'es-cornerstone-comps' ),
		),
		'context' => 'content',
    'suggest' => __( 'Heading', 'es-cornerstone-comps' ),
	),

	'heading_separator' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Separator', 'es-cornerstone-comps' ),
			'tooltip' => __( 'Tooltip to describe your controls.', 'es-cornerstone-comps' ),
		),
		'context' => 'content',
    'suggest' => __( '--', 'es-cornerstone-comps' ),
	),

	'left_sep_spacer' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Left of Separator Spacer', 'es-cornerstone-comps' ),
			'tooltip' => __( 'Tooltip to describe your controls.', 'es-cornerstone-comps' ),
		),
    'suggest' => __( '10', 'es-cornerstone-comps' ),
	),

	'right_sep_spacer' => array(
		'type'    => 'number',
		'ui' => array(
			'title'   => __( 'Right of Separator Spacer', 'es-cornerstone-comps' ),
			'tooltip' => __( 'Tooltip to describe your controls.', 'es-cornerstone-comps' ),
		),
    'suggest' => __( '20', 'es-cornerstone-comps' ),
	),


);
