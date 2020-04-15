<?php

return [
	[
		'type'     => 'color',
		'settings' => 'background-color',
		'label'    => __( 'Background Color', 'mai-customizer' ),
		'output'   => [
			[
				'element'  => 'body',
				'property' => 'background-color',
			],
		],
	],
	[
		'type'     => 'color',
		'settings' => 'text-color',
		'label'    => __( 'Text Color', 'mai-customizer' ),
		'output'   => [
			[
				'element'  => 'body',
				'property' => 'color',
			],
		],
	],
	[
		'type' => 'divider',
	],
	[
		'type'     => 'typography',
		'settings' => 'typography',
		'label'    => __( 'Typography', 'mai-customizer' ),
		'default'  => [
			'font-family'    => '',
			'variant'        => '',
			'font-size'      => '',
			'line-height'    => '',
			'letter-spacing' => '',
			'text-transform' => '',
		],
		'output'   => [
			[
				'element' => 'body',
			],
			[
				'element' => [
					'body .editor-styles-wrapper',
					'body .editor-styles-wrapper .editor-post-title__input',
				],
				'context' => [ 'editor' ],
			],
		],
	],
	[
		'type' => 'divider',
	],
];
