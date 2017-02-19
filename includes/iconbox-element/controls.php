<?php

/**
 * Element Controls
 */

return array(

	'heading' => array(
		'type'    => 'text',
		'ui' => array(
			'title'   => __( 'Heading &amp; Content', 'es-cornerstone-comps' ),
			'tooltip' => __( 'Tooltip to describe your controls.', 'es-cornerstone-comps' ),
		),
		'context' => 'content',
    'suggest' => __( 'Heading', 'es-cornerstone-comps' ),
	),

	'content' => array(
		'type'    => 'textarea',
		'context' => 'content',
		'suggest' => __( 'Click to inspect, then edit as needed.', 'es-cornerstone-comps' ),
	),
    'icon' => array(
		'type' => 'icon-choose',
		'ui'   => array(
			'title'   => __( 'Icon', 'es-cornerstone-comps' ),
			'tooltip' => __( 'Specify the icon you would like to use as the bullet for your Icon List Item.', 'es-cornerstone-comps' ),
		)
	),

);
