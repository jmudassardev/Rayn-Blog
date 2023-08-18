<?php
/*
* Color Scheme Controls 
*/
new \Kirki\Field\Color(
	[
		'settings'    => 'global_colors_body_bg',
		'label'       => __( 'RaynPress Body BG', 'raynpress' ),
		'description' => esc_html__( 'This will Change the background color of whole website', 'raynpress' ),
		'section'     => 'raynpress_section_color_scheme_general',
		'default'     => '#ffffff',
        'output' => array(
            array(
                'element'  => 'body',
                'property' => 'background-color',
            ),
        ),
	]
);
 new \Kirki\Field\Color(
	[
		'settings'    => 'global_colors_category_name_bg',
		'label'       => __( 'RaynPress Category Name - BG', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
		'section'     => 'raynpress_section_color_scheme_general',
		'default'     => '#2e4c6e',
        'output' => array(
            array(
                'element'  => '.featured-image-section h6',
                'property' => 'background-color',
            ),
        ),
	]
); 
 new \Kirki\Field\Color(
	[
		'settings'    => 'global_colors_category_name_text',
		'label'       => __( 'Category Name - Text', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
		'section'     => 'raynpress_section_color_scheme_general',
		'default'     => '#ffffff',
        'output' => array(
            array(
                'element'  => '.featured-image-section h6 a',
                'property' => 'color',
            ),
        ),
	]
); 
/*
* Headings
*/
 new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_h1',
		'label'       => esc_html__( 'Heading 1 (h1)', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
		'section'     => 'raynpress_typography_headings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Poppins',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#333333',
			'font-size'       => '44px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
		'output'      => [
			[
				'element' => 'h1',
			],
		],
	]
);
new \Kirki\Field\Typography(
	[
		'settings'    => 'typography_setting_h2',
		'label'       => esc_html__( 'Heading 2 (h2)', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
		'section'     => 'raynpress_typography_headings',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Poppins',
			'variant'         => 'regular',
			'font-style'      => 'normal',
			'color'           => '#333333',
			'font-size'       => '34px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
			'text-decoration' => 'none',
			'text-align'      => 'left',
		],
		'output'      => [
			[
				'element' => 'h2',
			],
		],
	]
); 
/*
* Header
*/
new \Kirki\Field\URL(
	[
		'settings' => 'facebok_url',
		'label'    => esc_html__( 'Facebook', 'raynpress' ),
		'section'  => 'raynpress_header_social_icons',
		'default'  => 'https://facebook.com/',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'instagram_url',
		'label'    => esc_html__( 'Instagram', 'raynpress' ),
		'section'  => 'raynpress_header_social_icons',
		'default'  => 'https://instagram.com/',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'twitter_url',
		'label'    => esc_html__( 'Twitter', 'raynpress' ),
		'section'  => 'raynpress_header_social_icons',
		'default'  => 'https://twitter.com/',
		'priority' => 10,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'youtube_url',
		'label'    => esc_html__( 'YouTube', 'raynpress' ),
		'section'  => 'raynpress_header_social_icons',
		'default'  => 'https://youtube.com/',
		'priority' => 10,
	]
);
