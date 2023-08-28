<?php
new \Kirki\Panel(
	'switch_setting',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Dark Mode Settings', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
	]
);

new \Kirki\Panel(
	'raynpress_header',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Header', 'raynpress' ),
		'description' => esc_html__( '', 'raynpress' ),
	]
);
new \Kirki\Panel(
	'raynpress_color_scheme',
	[
		'priority'    => 20,
		'title'       => esc_html__( 'Color Scheme', 'raynpress' ),
		'description' => esc_html__( 'Control global colors', 'raynpress' ),
	]
);
new \Kirki\Panel(
	'raynpress_typography',
	[
		'priority'    => 30,
		'title'       => esc_html__( 'Typography', 'raynpress' ),
		'description' => esc_html__( 'Change Font Style', 'raynpress' ),
	]
);
new \Kirki\Panel(
	'raynpress_layouts',
	[
		'priority'    => 40,
		'title'       => esc_html__( 'Layouts', 'raynpress' ),
		'description' => esc_html__( 'Change Layouty Settings', 'raynpress' ),
	]
);
