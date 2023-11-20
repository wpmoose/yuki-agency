<?php
/**
 * Theme bootstrap
 *
 * @package Yuki Agency
 */

// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'YUKI_AGENCY_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'YUKI_AGENCY_VERSION', '1.0.2' );
}

if ( ! defined( 'YUKI_AGENCY_PATH' ) ) {
	define( 'YUKI_AGENCY_PATH', trailingslashit( get_stylesheet_directory() ) );
}

if ( ! defined( 'YUKI_AGENCY_URL' ) ) {
	define( 'YUKI_AGENCY_URL', trailingslashit( get_stylesheet_directory_uri() ) );
}

if ( ! defined( 'YUKI_AGENCY_ASSETS_URL' ) ) {
	define( 'YUKI_AGENCY_ASSETS_URL', YUKI_AGENCY_URL . 'assets/' );
}

if ( ! function_exists( 'yuki_agency_image_url' ) ) {
	/**
	 * Get image url
	 *
	 * @param $image
	 *
	 * @return string
	 */
	function yuki_agency_image_url( $image ) {
		return YUKI_AGENCY_ASSETS_URL . 'images/' . $image;
	}
}

if ( ! function_exists( 'yuki_agency_homepage_builder_id' ) ) {
	/**
	 * Change default homepage builder id
	 *
	 * @return string
	 */
	function yuki_agency_homepage_builder_id() {
		return 'yuki_agency_homepage_builder';
	}
}
add_filter( 'yuki_homepage_builder_id', 'yuki_agency_homepage_builder_id' );

if ( ! function_exists( 'yuki_agency_light_color_scheme' ) ) {
	/**
	 * Add light theme color scheme
	 *
	 * @param $palettes
	 *
	 * @return mixed
	 */
	function yuki_agency_light_color_scheme( $palettes ) {
		array_unshift( $palettes, [
			'yuki-light-primary-color'  => '#c41006',
			'yuki-light-primary-active' => '#E03C33',
			'yuki-light-accent-color'   => '#3f3f46',
			'yuki-light-accent-active'  => '#2A283E',
			'yuki-light-base-300'       => '#c5c6c5',
			'yuki-light-base-200'       => '#e0e2e0',
			'yuki-light-base-100'       => '#f8f9f8',
			'yuki-light-base-color'     => '#ffffff',
		] );

		return $palettes;
	}
}
add_filter( 'yuki_light_color_palettes', 'yuki_agency_light_color_scheme' );

if ( ! function_exists( 'yuki_agency_dark_color_scheme' ) ) {
	/**
	 * Add dark theme color scheme
	 *
	 * @param $palettes
	 *
	 * @return mixed
	 */
	function yuki_agency_dark_color_scheme( $palettes ) {
		array_unshift( $palettes, [
			'yuki-dark-primary-color'  => '#c41006',
			'yuki-dark-primary-active' => '#E03C33',
			'yuki-dark-accent-color'   => '#a3a9a3',
			'yuki-dark-accent-active'  => '#f3f4f6',
			'yuki-dark-base-300'       => '#3f463f',
			'yuki-dark-base-200'       => '#2f2f2f',
			'yuki-dark-base-100'       => '#212a33',
			'yuki-dark-base-color'     => '#17212a',
		] );

		return $palettes;
	}
}
add_filter( 'yuki_dark_color_palettes', 'yuki_agency_dark_color_scheme' );

if ( ! function_exists( 'yuki_agency_header_top_row_height' ) ) {
	/**
	 * Header top row height
	 *
	 * @return mixed
	 */
	function yuki_agency_header_top_row_height() {
		return '46px';
	}
}
add_filter( 'yuki_header_top_bar_row_min_height_default_value', 'yuki_agency_header_top_row_height' );

if ( ! function_exists( 'yuki_agency_header_top_row_structure' ) ) {
	/**
	 * Update header top row structure
	 *
	 * @return array
	 */
	function yuki_agency_header_top_row_structure() {
		return [
			'desktop' => [
				[
					'elements' => [ 'menu-1' ],
					'settings' => [ 'width' => '70%' ]
				],
				[
					'elements' => [ 'button-1' ],
					'settings' => [ 'width' => '30%', 'justify-content' => 'flex-end' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'socials' ],
					'settings' => [ 'width' => '100%', 'justify-content' => 'center' ]
				],
			],
		];
	}
}
add_filter( 'yuki_header_top_row_default_value', 'yuki_agency_header_top_row_structure' );

if ( ! function_exists( 'yuki_agency_primary_navbar_row_height' ) ) {
	/**
	 * Header primary navbar row height
	 *
	 * @return string
	 */
	function yuki_agency_primary_navbar_row_height() {
		return '80px';
	}
}
add_filter( 'yuki_header_primary_navbar_row_min_height_default_value', 'yuki_agency_primary_navbar_row_height' );

if ( ! function_exists( 'yuki_agency_header_primary_row_structure' ) ) {
	function yuki_agency_header_primary_row_structure() {
		return [
			'desktop' => [
				[
					'elements' => [ 'logo', 'menu-2' ],
					'settings' => [ 'width' => '70%' ]
				],
				[
					'elements' => [ 'socials', 'theme-switch', 'search', 'trigger' ],
					'settings' => [ 'width' => '30%', 'justify-content' => 'flex-end' ]
				],
			],
			'mobile'  => [
				[
					'elements' => [ 'search' ],
					'settings' => [ 'width' => '30%', ]
				],
				[
					'elements' => [ 'logo' ],
					'settings' => [ 'width' => '40%', 'justify-content' => 'center' ]
				],
				[
					'elements' => [ 'theme-switch', 'trigger' ],
					'settings' => [ 'width' => '30%', 'justify-content' => 'flex-end' ]
				],
			],
		];
	}
}
add_filter( 'yuki_header_primary_row_default_value', 'yuki_agency_header_primary_row_structure' );

if ( ! function_exists( 'yuki_agency_socials_icons_color_type' ) ) {
	/**
	 * Change default socials icons color type
	 *
	 * @return string
	 */
	function yuki_agency_socials_icons_color_type() {
		return 'custom';
	}
}
add_filter( 'yuki_header_el_socials_icons_color_type_default_value', 'yuki_agency_socials_icons_color_type' );

if ( ! function_exists( 'yuki_agency_homepage_design' ) ) {
	/**
	 * Default homepage design
	 *
	 * @return array
	 */
	function yuki_agency_homepage_design() {
		$card_style = array(
			'card-border' => array(
				'style' => 'none',
				'width' => 1,
				'color' => 'var(--yuki-base-200)',
				'hover' => 'var(--yuki-base-200)',
			),
			'card-shadow' => array(
				'enable'     => 'yes',
				'horizontal' => '0px',
				'vertical'   => '10px',
				'blur'       => '30px',
				'spread'     => '-15px',
				'color'      => 'rgba(122, 121, 128, 0.4)',
			),
		);

		return [
			// Hero element
			[
				'settings' => [ 'stretch' => 'yes', 'columns-gap' => '0px' ],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'hero',
								'settings' => [
									'title'               => __( 'Made for the Modern Business', 'yuki-agency' ),
									'shape_divider'       => 'none',
									'overlay'             => 'yes',
									'overlay_background'  => array(
										'type'     => 'gradient',
										'gradient' => 'linear-gradient(to top, rgb(218, 212, 236) 0%, rgb(218, 212, 236) 1%, rgb(243, 231, 233) 100%)'
									),
									'overlay_opacity'     => 0.5,
									'background'          => array(
										'type'  => 'image',
										'image' => array(
											'repeat' => 'no-repeat',
											'size'   => 'cover',
											'source' => array(
												'url' => yuki_agency_image_url( 'hero-background.png' ),
												'x'   => 0.5,
												'y'   => 0.5,
											)
										)
									),
									'media'               => array(
										'url' => yuki_agency_image_url( 'hero-media.png' )
									),
									'media_height'        => array(
										'desktop' => '680px',
										'tablet'  => '480px',
										'mobile'  => '380px',
									),
									'title_color'         => array(
										'initial' => '#2A283E',
									),
									'description_color'   => array(
										'initial' => '#3f3f46',
									),
									'title_typography'    => array(
										'family'     => 'inherit',
										'fontSize'   => array(
											'desktop' => '3.75rem',
											'tablet'  => '2.75rem',
											'mobile'  => '2.75rem',
										),
										'variant'    => '700',
										'lineHeight' => '1.25em'
									),
									'button_button_color' => array(
										'initial' => 'var(--yuki-primary-color)',
										'hover'   => 'var(--yuki-primary-active)',
									),
									'button_border'       => array(
										'style' => 'solid',
										'width' => '1px',
										'color' => 'var(--yuki-primary-color)',
										'hover' => 'var(--yuki-primary-active)',
									),
									'button_min_height'   => '45px',
									'button_padding'      => array(
										'top'    => '0.15em',
										'right'  => '2.75em',
										'bottom' => '0.15em',
										'left'   => '2.75em',
									)
								]
							],
						],
						'settings' => [],
					],
				],
			],
			// Features element
			[
				'settings' => [],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'heading',
								'settings' => [
									'title' => __( 'What Makes Us Sparkle', 'yuki-agency' )
								],
							],
							[
								'id'       => 'features',
								'settings' => array_merge(
									$card_style,
									[
										'media-size'    => '64px',
										'media-spacing' => '24px',
										'features'      => [
											[
												'visible'  => true,
												'settings' => [
													'title'       => __( 'Lightning Fast', 'yuki-agency' ),
													'description' => 'Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna.',
													'media-type'  => 'image',
													'image'       => [ 'url' => yuki_agency_image_url( 'feature-01.png' ) ],
												]
											],
											[
												'visible'  => true,
												'settings' => [
													'title'       => __( 'SEO Optimize', 'yuki-agency' ),
													'description' => 'Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna.',
													'media-type'  => 'image',
													'image'       => [ 'url' => yuki_agency_image_url( 'feature-02.png' ) ],
												]
											],
											[
												'visible'  => true,
												'settings' => [
													'title'       => __( 'Fully Customize', 'yuki-agency' ),
													'description' => 'Lorem ipsum dolor sit amet consectetur elit sed do eiusmod tempor incididunt labore dolore magna.',
													'media-type'  => 'image',
													'image'       => [ 'url' => yuki_agency_image_url( 'feature-03.png' ) ],
												]
											],
										],
									]
								)
							],
						],
						'settings' => [
							//
						],
					],
				],
			],
			//Portfolios
			[
				'settings' => [ 'stretch' => 'yes', 'columns-gap' => '0px' ],
				'columns'  => [
					[
						'settings' => [
							'elements-gap' => '0px'
						],
						'elements' => [
							[
								'id'       => 'hero',
								'settings' => [
									'title'               => 'Proin sed libero enim sed faucibus',
									'description'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In aliquam sem fringilla ut morbi tincidunt augue interdum. Interdum varius sit amet mattis vulputate',
									'button_text'         => __( 'Learn More', 'yuki-agency' ),
									'media_align'         => 'center',
									'shape_divider'       => 'none',
									'min_height'          => '560px',
									'media'               => [
										'url' => yuki_agency_image_url( 'portfolio-01.jpg' )
									],
									'media_height'        => array(
										'desktop' => '680px',
										'tablet'  => '480px',
										'mobile'  => '380px',
									),
									'background'          => [
										'type'  => 'color',
										'color' => 'var(--yuki-base-color)',
									],
									'title_color'         => [
										'initial' => 'var(--yuki-accent-active)',
									],
									'description_color'   => [
										'initial' => 'var(--yuki-accent-color)',
									],
									'button_border'       => [
										'width' => 1,
										'style' => 'solid',
										'color' => 'var(--yuki-primary-color)',
										'hover' => 'var(--yuki-primary-active)',
									],
									'button_text_color'   => [
										'initial' => 'var(--yuki-primary-color)',
										'hover'   => 'var(--yuki-base-color)',
									],
									'button_button_color' => [
										'initial' => 'var(--yuki-transparent)',
										'hover'   => 'var(--yuki-primary-active)',
									],
								]
							],

							[
								'id'       => 'hero',
								'settings' => [
									'title'               => 'Proin sed libero enim sed faucibus',
									'description'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In aliquam sem fringilla ut morbi tincidunt augue interdum. Interdum varius sit amet mattis vulputate',
									'button_text'         => __( 'Learn More', 'yuki-agency' ),
									'media_align'         => 'center',
									'shape_divider'       => 'none',
									'min_height'          => '720px',
									'layout'              => 'media-content',
									'media'               => [
										'url' => yuki_agency_image_url( 'portfolio-02.jpg' )
									],
									'media_height'        => array(
										'desktop' => '680px',
										'tablet'  => '480px',
										'mobile'  => '380px',
									),
									'background'          => [
										'type'  => 'color',
										'color' => 'var(--yuki-base-100)',
									],
									'title_color'         => [
										'initial' => 'var(--yuki-accent-active)',
									],
									'description_color'   => [
										'initial' => 'var(--yuki-accent-color)',
									],
									'button_border'       => [
										'width' => 1,
										'style' => 'solid',
										'color' => 'var(--yuki-primary-color)',
										'hover' => 'var(--yuki-primary-active)',
									],
									'button_text_color'   => [
										'initial' => 'var(--yuki-primary-color)',
										'hover'   => 'var(--yuki-base-color)',
									],
									'button_button_color' => [
										'initial' => 'var(--yuki-transparent)',
										'hover'   => 'var(--yuki-primary-active)',
									],
								]
							],

							[
								'id'       => 'hero',
								'settings' => [
									'title'               => 'Proin sed libero enim sed faucibus',
									'description'         => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In aliquam sem fringilla ut morbi tincidunt augue interdum. Interdum varius sit amet mattis vulputate',
									'button_text'         => __( 'Learn More', 'yuki-agency' ),
									'media_align'         => 'center',
									'min_height'          => '640px',
									'layout'              => 'content-media',
									'media'               => [
										'url' => yuki_agency_image_url( 'portfolio-03.jpg' )
									],
									'media_height'        => array(
										'desktop' => '680px',
										'tablet'  => '480px',
										'mobile'  => '380px',
									),
									'background'          => [
										'type'  => 'color',
										'color' => 'var(--yuki-base-color)',
									],
									'title_color'         => [
										'initial' => 'var(--yuki-accent-active)',
									],
									'description_color'   => [
										'initial' => 'var(--yuki-accent-color)',
									],
									'button_border'       => [
										'width' => 1,
										'style' => 'solid',
										'color' => 'var(--yuki-primary-color)',
										'hover' => 'var(--yuki-primary-active)',
									],
									'button_text_color'   => [
										'initial' => 'var(--yuki-primary-color)',
										'hover'   => 'var(--yuki-base-color)',
									],
									'button_button_color' => [
										'initial' => 'var(--yuki-transparent)',
										'hover'   => 'var(--yuki-primary-active)',
									],
								]
							],
						],
					],
				],
			],
			// Reviews
			[
				'settings' => [
					'margin' => [ 'top' => '120px', 'right' => '0px', 'bottom' => '120px', 'left' => '0px' ]
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'heading',
								'settings' => [
									'title' => __( 'What Our Clients Says?', 'yuki-agency' )
								],
							],
							[
								'id'       => 'reviews',
								'settings' => $card_style
							],
						],
						'settings' => [
							//
						],
					],
				],
			],
			// Contact Us
			[
				'settings' => [
					'stretch'     => 'yes',
					'columns-gap' => '0px',
					'margin'      => [ 'top' => '0px', 'right' => '0px', 'bottom' => '0px', 'left' => '0px' ]
				],
				'columns'  => [
					[
						'elements' => [
							[
								'id'       => 'hero',
								'settings' => [
									'title'               => __( 'Ready to start your business?', 'yuki-agency' ),
									'button_text'         => __( 'Contact Us', 'yuki-agency' ),
									'min_height'          => '420px',
									'shape_divider'       => 'none',
									'overlay'             => 'yes',
									'overlay_background'  => array(
										'type'     => 'gradient',
										'gradient' => 'linear-gradient(to top, rgb(218, 212, 236) 0%, rgb(218, 212, 236) 1%, rgb(243, 231, 233) 100%)'
									),
									'overlay_opacity'     => 0.5,
									'background'          => array(
										'type'  => 'image',
										'image' => array(
											'repeat' => 'no-repeat',
											'size'   => 'cover',
											'source' => array(
												'url' => yuki_agency_image_url( 'hero-background.png' ),
												'x'   => 0.5,
												'y'   => 0.5,
											)
										)
									),
									'media'               => array(),
									'content_align'       => 'center',
									'title_color'         => array(
										'initial' => '#2A283E',
									),
									'description_color'   => array(
										'initial' => '#3f3f46',
									),
									'title_typography'    => array(
										'family'     => 'inherit',
										'fontSize'   => '2.75rem',
										'variant'    => '700',
										'lineHeight' => '1.25'
									),
									'button_button_color' => array(
										'initial' => 'var(--yuki-primary-color)',
										'hover'   => 'var(--yuki-primary-active)',
									),
									'button_border'       => array(
										'style' => 'solid',
										'width' => '1px',
										'color' => 'var(--yuki-primary-color)',
										'hover' => 'var(--yuki-primary-active)',
									),
									'button_min_height'   => '45px',
									'button_padding'      => array(
										'top'    => '0.15em',
										'right'  => '2.75em',
										'bottom' => '0.15em',
										'left'   => '2.75em',
									)
								]
							],
						],
						'settings' => [],
					],
				],
			],
		];
	}
}
add_filter( 'yuki_agency_homepage_builder_default_value', 'yuki_agency_homepage_design' );
