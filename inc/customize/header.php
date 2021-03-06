<?php

$wp_customize->add_section(
  'quasarwp_layout_header',
  array(
    'title'       => __('Header', 'quasarwp'),
    'priority'    => 103.1,
    'capability'  => 'edit_theme_options',
    'description' => __('Allows you to customize header layout for QuasarWP.', 'quasarwp'),
    'panel'  => 'quasarwp',
  )
);

// Header enabled checkbox 
$wp_customize->add_setting(
  'layout_header_enabled',
  array(
    'default'    => true,
    'type'       => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'  => 'postMessage',
  )
);
$wp_customize->add_control('quasarwp_layout_header_enabled', array(
  'label' => __('Enabled', 'quasarwp'),
  'section' => 'quasarwp_layout_header',
  'settings' => 'layout_header_enabled',
  'type' => 'checkbox',
  'priority'   => 1,
));

// Header reveal checkbox
$wp_customize->add_setting(
  'layout_header_reveal',
  array(
    'default'    => false,
    'type'       => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'  => 'postMessage',
  )
);
$wp_customize->add_control('quasarwp_layout_header_reveal', array(
  'label' => __('Header Reveal', 'quasarwp'),
  'section' => 'quasarwp_layout_header',
  'settings' => 'layout_header_reveal',
  'type' => 'checkbox',
  'priority'   => 2,
));

// Header icon checkbox
$wp_customize->add_setting(
  'layout_header_icon',
  array(
    'default'    => true,
    'type'       => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'  => 'postMessage',
  )
);
$wp_customize->add_control('quasarwp_layout_header_icon', array(
  'label' => __('Show Header Icon', 'quasarwp'),
  'section' => 'quasarwp_layout_header',
  'settings' => 'layout_header_icon',
  'type' => 'checkbox',
  'priority'   => 3,
));

// Header blog name checkbox
$wp_customize->add_setting(
  'layout_header_blogname',
  array(
    'default'    => true,
    'type'       => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'  => 'postMessage',
  )
);
$wp_customize->add_control('quasarwp_layout_header_blogname', array(
  'label' => __('Show Header Blog Name', 'quasarwp'),
  'section' => 'quasarwp_layout_header',
  'settings' => 'layout_header_blogname',
  'type' => 'checkbox',
  'priority'   => 4,
));

// Theme header background-color
$wp_customize->add_setting(
  'layout_header_backgroundcolor',
  array(
    'default'    => '',
    'type'       => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'  => 'postMessage',
  )
);
$wp_customize->add_control(new WP_Customize_Color_Control(
  $wp_customize,
  'quasarwp_layout_header_backgroundcolor',
  array(
    'label'      => __('Background Color', 'quasarwp'),
    'settings'   => 'layout_header_backgroundcolor',
    'priority'   => 5,
    'section'    => 'quasarwp_layout_header',
  )
));

// Header select separator type
$wp_customize->add_setting(
  'layout_header_separator',
  array(
    'default'    => 'elevated',
    'type'       => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport'  => 'postMessage',
  )
);
$wp_customize->add_control('quasarwp_layout_header_separator', array(
  'label' => __('Separator type', 'quasarwp'),
  'section' => 'quasarwp_layout_header',
  'settings' => 'layout_header_separator',
  'type' => 'radio',
  'priority'   => 6,
  'choices' => array(
    'none' => 'None',
    'elevated' => 'Elevated',
    'bordered' => 'Bordered',
  ),
));

$wp_customize->get_setting('layout_header_enabled')->transport = 'postMessage';
$wp_customize->get_setting('layout_header_reveal')->transport = 'postMessage';
$wp_customize->get_setting('layout_header_icon')->transport = 'postMessage';
$wp_customize->get_setting('layout_header_blogname')->transport = 'postMessage';
$wp_customize->get_setting('layout_header_backgroundcolor')->transport = 'postMessage';
$wp_customize->get_setting('layout_header_separator')->transport = 'postMessage';
