<?php
new \Kirki\Section(
	'raynpress_section_color_scheme_general',
	[
		'title'       => esc_html__( 'Global Colors', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
		'panel'       => 'raynpress_color_scheme',
		'priority'    => 160,
	]
);
new \Kirki\Section(
	'raynpress_typography_headings',
	[
		'title'       => esc_html__( 'Headings', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
		'panel'       => 'raynpress_typography',
		'priority'    => 160,
	]
);
new \Kirki\Section(
	'raynpress_header_social_icons',
	[
		'title'       => esc_html__( 'Social Icons', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
		'panel'       => 'raynpress_header',
		'priority'    => 160,
	]
);
new \Kirki\Section(
	'raynpress_home_layout',
	[
		'title'       => esc_html__( 'Homepage', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
		'panel'       => 'raynpress_layouts',
		'priority'    => 160,
	]
);