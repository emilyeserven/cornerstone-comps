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
    'image' => array(
		'type' => 'image',
		'ui'   => array(
			'title'   => __( 'Image', 'es-cornerstone-comps' ),
			'tooltip' => __( 'Specify the icon you would like to use as the bullet for your Icon List Item.', 'es-cornerstone-comps' ),
		)
	),
    'icon_size' => array(
        'type' => 'number',
        'ui'   => array(
            'title'     => __( 'Icon Size in px', 'es-cornerstone-comps' ),
            'tooltip'   => __( 'Description'),
        ),
	'suggest' => __('50', 'es-cornerstone-comps'),
    ),
    'icon_width' => array(
        'type' => 'number',
        'ui'   => array(
            'title'     => __( 'Icon Width in %', 'es-cornerstone-comps' ),
            'tooltip'   => __( 'Description'),
        ),
	'suggest' => __('20', 'es-cornerstone-comps'),
    ),
    'icon_margin_comp' => array(
        'type' => 'number',
        'ui'   => array(
            'title'     => __( 'Icon Margin Compensation in px', 'es-cornerstone-comps' ),
            'tooltip'   => __( 'Description'),
        ),
	'suggest' => __('-15', 'es-cornerstone-comps'),
    ),
    'icon_bg' => array(
        'type'  => 'color',
        'ui'    => array(
            'title'     => __( 'Icon Background Color', 'es-cornerstone-comps' ),
            'tooltip'   => __( 'Description'),
        ),
        'suggest' => __('#D50032', 'es-cornerstone-comps'),
    ),
    'content_bg' => array(
        'type'  => 'color',
        'ui'    => array(
            'title'     => __( 'Content Background Color', 'es-cornerstone-comps' ),
            'tooltip'   => __( 'Description'),
        ),
        'suggest' => __('#FFF', 'es-cornerstone-comps'),
    ),
);
