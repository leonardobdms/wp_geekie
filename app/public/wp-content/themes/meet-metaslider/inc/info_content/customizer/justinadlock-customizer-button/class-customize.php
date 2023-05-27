<?php

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class meet_metaslider_theme_Customize
{

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance()
	{

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct()
	{
	}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions()
	{

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the controls.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager)
	{

		// Load custom sections.
		require_once(trailingslashit(get_template_directory()) . 'inc/info_content/customizer/justinadlock-customizer-button/section-pro.php');
		require_once(trailingslashit(get_template_directory()) . 'inc/info_content/customizer/justinadlock-customizer-button/control-pro.php');

		// Register custom section types.
		$manager->register_section_type('meet_metaslider_theme_Customize_Section_Pro');
		//$manager->register_control_type('meet_metaslider_theme_Customize_Control_Pro');

		// Register sections.
		$manager->add_section(
			new meet_metaslider_theme_Customize_Section_Pro(
				$manager,
				'meet_metaslider_theme',
				array(
					'title'    => esc_html__('Upgrade To Premium 👑', 'meet-metaslider'),
					'pro_description' => esc_html__('Unlock all customization options with premium. Customize all colors, fonts, layouts, 1-click design and much more!', 'meet-metaslider'),
					'pro_text' => esc_html__('View Premium Version', 'meet-metaslider'),
					'pro_url'  => 'https://superbthemes.com/meet-metaslider/',
					'priority'  => '0'
				)
			)
		);

		$manager->add_setting("meet_metaslider_theme_control");
		$manager->add_control(
			new meet_metaslider_theme_Customize_Control_Pro(
				$manager,
				'meet_metaslider_theme_control',
				array(
					'label'    => esc_html__('Upgrade To Premium 👑', 'meet-metaslider'),
					'pro_description' => esc_html__('Upgrade to premium and Unlock all customization options. Customize all colors, fonts, layouts, 1-click design and much more!', 'meet-metaslider'),
					'pro_text' => esc_html__('View Premium Version', 'meet-metaslider'),
					'pro_url'  => 'https://superbthemes.com/meet-metaslider/',
					'priority'  => '999',
					'settings' => 'meet_metaslider_theme_control',
					'section' => 'superbthemes_customizer_panel_HEADERsuperbthemes_customizer_section_header_default',
				)
			)
		);


		$manager->add_setting("meet_metaslider_theme_control_layout");
		$manager->add_control(
			new meet_metaslider_theme_Customize_Control_Pro(
				$manager,
				'meet_metaslider_theme_control_layout',
				array(
					'label'    => esc_html__('Upgrade To Premium 👑', 'meet-metaslider'),
					'pro_description' => esc_html__('Upgrade to premium and Unlock all customization options. Customize all colors, fonts, layouts, 1-click design and much more!', 'meet-metaslider'),
					'pro_text' => esc_html__('View Premium Version', 'meet-metaslider'),
					'pro_url'  => 'https://superbthemes.com/meet-metaslider/',
					'priority'  => '999',
					'settings' => 'meet_metaslider_theme_control_layout',
					'section' => 'superbthemes_customizer_panel_COLORSsuperbthemes_customizer_section_header_default',
				)
			)
		);


		$manager->add_setting("meet_metaslider_theme_control_postpage");
		$manager->add_control(
			new meet_metaslider_theme_Customize_Control_Pro(
				$manager,
				'meet_metaslider_theme_control_postpage',
				array(
					'label'    => esc_html__('Upgrade To Premium 👑', 'meet-metaslider'),
					'pro_description' => esc_html__('Upgrade to premium and Unlock all customization options. Customize all colors, fonts, layouts, 1-click design and much more!', 'meet-metaslider'),
					'pro_text' => esc_html__('View Premium Version', 'meet-metaslider'),
					'pro_url'  => 'https://superbthemes.com/meet-metaslider/',
					'priority'  => '999',
					'settings' => 'meet_metaslider_theme_control_postpage',
					'section' => 'superbthemes_customizer_panel_COLORSsuperbthemes_customizer_section_navigation',
				)
			)
		);


				$manager->add_setting("meet_metaslider_theme_control_postcontrols");
		$manager->add_control(
			new meet_metaslider_theme_Customize_Control_Pro(
				$manager,
				'meet_metaslider_theme_control_postcontrols',
				array(
					'label'    => esc_html__('Upgrade To Premium 👑', 'meet-metaslider'),
					'pro_description' => esc_html__('Upgrade to premium and Unlock all customization options. Customize all colors, fonts, layouts, 1-click design and much more!', 'meet-metaslider'),
					'pro_text' => esc_html__('View Premium Version', 'meet-metaslider'),
					'pro_url'  => 'https://superbthemes.com/meet-metaslider/',
					'priority'  => '999',
					'settings' => 'meet_metaslider_theme_control_postcontrols',
					'section' => 'superbthemes_customizer_panel_LAYOUTsuperbthemes_customizer_section_footer',
				)
			)
		);

		$manager->add_setting("meet_metaslider_theme_control_layout_nav");
		$manager->add_control(
			new meet_metaslider_theme_Customize_Control_Pro(
				$manager,
				'meet_metaslider_theme_control_layout_nav',
				array(
					'label'    => esc_html__('Upgrade To Premium 👑', 'meet-metaslider'),
					'pro_description' => esc_html__('Upgrade to premium and Unlock all customization options. Customize all colors, fonts, layouts, 1-click design and much more!', 'meet-metaslider'),
					'pro_text' => esc_html__('View Premium Version', 'meet-metaslider'),
					'pro_url'  => 'https://superbthemes.com/meet-metaslider/',
					'priority'  => '999',
					'settings' => 'meet_metaslider_theme_control_layout_nav',
					'section' => 'superbthemes_customizer_panel_LAYOUTsuperbthemes_customizer_section_blog',
				)
			)
		);

		$manager->add_setting("meet_metaslider_theme_control_layout_header");
		$manager->add_control(
			new meet_metaslider_theme_Customize_Control_Pro(
				$manager,
				'meet_metaslider_theme_control_layout_header',
				array(
					'label'    => esc_html__('Upgrade To Premium 👑', 'meet-metaslider'),
					'pro_description' => esc_html__('Upgrade to premium and Unlock all customization options. Customize all colors, fonts, layouts, 1-click design and much more!', 'meet-metaslider'),
					'pro_text' => esc_html__('View Premium Version', 'meet-metaslider'),
					'pro_url'  => 'https://superbthemes.com/meet-metaslider/',
					'priority'  => '999',
					'settings' => 'meet_metaslider_theme_control_layout_header',
					'section' => 'superbthemes_customizer_panel_LAYOUTsuperbthemes_customizer_section_single',
				)
			)
		);


		$manager->add_setting("meet_metaslider_theme_control_layout_header");
		$manager->add_control(
			new meet_metaslider_theme_Customize_Control_Pro(
				$manager,
				'meet_metaslider_theme_control_layout_header',
				array(
					'label'    => esc_html__('Upgrade To Premium 👑', 'meet-metaslider'),
					'pro_description' => esc_html__('Upgrade to premium and Unlock all customization options. Customize all colors, fonts, layouts, 1-click design and much more!', 'meet-metaslider'),
					'pro_text' => esc_html__('View Premium Version', 'meet-metaslider'),
					'pro_url'  => 'https://superbthemes.com/meet-metaslider/',
					'priority'  => '999',
					'settings' => 'meet_metaslider_theme_control_layout_header',
					'section' => 'superbthemes_customizer_panel_LAYOUTsuperbthemes_customizer_section_navigation',
				)
			)
		);






	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts()
	{

		wp_enqueue_script('meet-metaslider-customize-controls', trailingslashit(get_template_directory_uri()) . 'inc/info_content/customizer/justinadlock-customizer-button/customize-controls.js', array('customize-controls'));

		wp_enqueue_style('meet-metaslider-customize-controls', trailingslashit(get_template_directory_uri()) . 'inc/info_content/customizer/justinadlock-customizer-button/customize-controls.css', array(), "1.0");
	}
}

// Doing this customizer thang!
meet_metaslider_theme_Customize::get_instance();
