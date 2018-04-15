<?php

function openelections_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['#attached']['library'][] = 'openelections/theme-settings';

  $form['op_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['op_settings']['tabs'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'basic_tab',
  );

  $form['op_settings']['basic_tab']['basic_settings'] = array(
    '#type' => 'details',
    '#title' => t('Basic Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['basic_tab']['basic_settings']['breadcrumb_separator'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb separator'),
    '#description'   => t('Enter the class of the icon you want from the Font Awesome library e.g.: fa-angle-right. A list of the available classes is provided here: <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet" target="_blank">http://fortawesome.github.io/Font-Awesome/cheatsheet</a>.'),
    '#default_value' => theme_get_setting('breadcrumb_separator', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['basic_tab']['basic_settings']['scrolltop'] = array(
    '#type' => 'fieldset',
    '#title' => t('Scroll to top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['basic_tab']['basic_settings']['scrolltop']['scroll_to_top_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll to top button'),
    '#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
    '#default_value' => theme_get_setting('scroll_to_top_display', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['basic_tab']['basic_settings']['scrolltop']['scroll_to_top_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Scroll to top text'),
    '#description'   => t('Enter the text that you want to show on the Scroll to top button. Default text is "Top"'),
    '#default_value' => theme_get_setting('scroll_to_top_text','openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['bootstrap_tab']['bootstrap'] = array(
    '#type' => 'details',
    '#title' => t('Bootstrap'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['bootstrap_tab']['bootstrap']['bootstrap_remote_type'] = array(
    '#type' => 'select',
    '#title' => t('Select the remote type'),
    '#description'   => t('From the drop down select box, select how to load the Bootstrap library. If you select "Local" make sure that you download and place Bootstrap folder into the root theme folder (openelections/bootstrap).'),
    '#default_value' => theme_get_setting('bootstrap_remote_type', 'openelections'),
    '#options' => array(
    'local' => t('Local / No remote'),
    'cdn' => t('CDN'),
    ),
  );

  $form['op_settings']['looknfeel_tab']['looknfeel'] = array(
    '#type' => 'details',
    '#title' => t('Look\'n\'Feel'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['looknfeel_tab']['looknfeel']['color_scheme'] = array(
    '#type' => 'select',
    '#title' => t('Color Schemes'),
    '#description'   => t('From the drop-down menu, select the color scheme you prefer.'),
    '#default_value' => theme_get_setting('color_scheme', 'openelections'),
    '#options' => array(
    'blue' => t('Blue'),
    'khaki' => t('Khaki Grey'),
    'gold' => t('Gold Loulou'),
    'gray' => t('Grey Blue'),
    'green' => t('Green'),
    'lime' => t('Lime Orange'),
    'night-blue' => t('Night-Blue Grey'),
    'orange' => t('Orange'),
    'orange-blue' => t('Orange Blue (Default)'),
    'pink' => t('Pink'),
    'purple' => t('Purple'),
    'red' => t('Red'),
    ),
  );

  $form['op_settings']['looknfeel_tab']['looknfeel']['page_container_border'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable full-page body border'),
    '#description'   => t('Adds a body border around your page, right inside the browser window.'),
    '#default_value' => theme_get_setting('page_container_border', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions'] = array(
    '#type' => 'details',
    '#title' => t('Region settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['regions_tab']['regions']['animations_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Animations'),
    '#description'   => t('Enable or disable animations globally. You can further adjust this for individual regions below.'),
    '#default_value' => theme_get_setting('animations_state', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['slideout'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slideout'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['slideout']['slideout_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('slideout_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['slideout']['slideout_side'] = array(
    '#type' => 'select',
    '#title' => t('Slideout Side'),
    '#description'   => t('From the drop-down menu, select which side of the website you would like the slideout to appear.'),
    '#default_value' => theme_get_setting('slideout_side', 'openelections'),
    '#options' => array(
    'left' => t('Left'),
    'right' => t('Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['slideout']['slideout_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Slideout Touch Swipe'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe event in mobile devices.'),
    '#default_value' => theme_get_setting('slideout_touch_swipe', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['slideout']['slideout_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('slideout_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['slideout']['slideout_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('slideout_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header_top_highlighted'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header Top Highlighted'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('header_top_highlighted_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('header_top_highlighted_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('header_top_highlighted_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('header_top_highlighted_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header_top_highlighted']['header_top_highlighted_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('header_top_highlighted_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header_top']['header_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('header_top_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['header_top']['header_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('header_top_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['header_top']['header_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('header_top_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['header_top']['header_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('header_top_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header_top']['header_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('header_top_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header'] = array(
    '#type' => 'fieldset',
    '#title' => t('Header'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header']['header_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Container'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('header_layout_container', 'openelections'),
    '#options' => array(
    'container-fluid' => t('Full Width'),
    'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['header']['header_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('header_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['header']['fixed_header'] = array(
    '#type' => 'checkbox',
    '#title' => t('Fixed Header'),
    '#description'   => t('Use the checkbox to apply fixed position to the header.'),
    '#default_value' => theme_get_setting('fixed_header', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header']['header_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('header_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['header']['header_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('header_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['banner'] = array(
    '#type' => 'fieldset',
    '#title' => t('Banner'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['banner']['banner_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('banner_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['banner']['banner_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('banner_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['banner']['banner_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('banner_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['banner']['banner_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('banner_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Content Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_top']['content_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('content_top_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_top']['content_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_top_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_top']['content_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_top_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_top']['content_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('content_top_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_top']['content_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('content_top_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_top_highlighted'] = array(
    '#type' => 'fieldset',
    '#title' => t('Content Top Highlighted'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('content_top_highlighted_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_top_highlighted_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('content_top_highlighted_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_top_highlighted']['content_top_highlighted_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('content_top_highlighted_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['main_content'] = array(
    '#type' => 'fieldset',
    '#title' => t('Main Content'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['main_content']['main_content_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('main_content_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['main_content']['main_content_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('main_content_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['main_content']['main_content_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('main_content_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['main_content']['main_content_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('main_content_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sidebar_first'] = array(
    '#type' => 'fieldset',
    '#title' => t('Sidebar First'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sidebar_first']['sidebar_first_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('sidebar_first_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['sidebar_first']['sidebar_first_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('sidebar_first_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sidebar_first']['sidebar_first_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('sidebar_first_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sidebar_second'] = array(
    '#type' => 'fieldset',
    '#title' => t('Sidebar Second'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sidebar_second']['sidebar_second_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('sidebar_second_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['sidebar_second']['sidebar_second_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('sidebar_second_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sidebar_second']['sidebar_second_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region.'),
    '#default_value' => theme_get_setting('sidebar_second_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_bottom'] = array(
    '#type' => 'fieldset',
    '#title' => t('Content Bottom'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_bottom']['content_bottom_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('content_bottom_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_bottom']['content_bottom_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('content_bottom_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_bottom']['content_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('content_bottom_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_bottom']['content_bottom_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('content_bottom_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['content_bottom']['content_bottom_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('content_bottom_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['content_bottom']['content_bottom_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('content_bottom_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Featured Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured_top']['featured_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_top_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured_top']['featured_top_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('featured_top_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured_top']['featured_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_top_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured_top']['featured_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_top_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured_top']['featured_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('featured_top_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured_top']['featured_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('featured_top_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured'] = array(
    '#type' => 'fieldset',
    '#title' => t('Featured'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured']['featured_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured']['featured_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('featured_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured']['featured_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured']['featured_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured']['featured_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('featured_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured']['featured_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('featured_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured_bottom'] = array(
    '#type' => 'fieldset',
    '#title' => t('Featured Bottom'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('featured_bottom_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('featured_bottom_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('featured_bottom_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['featured_bottom']['featured_bottom_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('featured_bottom_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sub_featured'] = array(
    '#type' => 'fieldset',
    '#title' => t('Sub Featured'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sub_featured']['sub_featured_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('sub_featured_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['sub_featured']['sub_featured_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('sub_featured_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['sub_featured']['sub_featured_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('sub_featured_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['sub_featured']['sub_featured_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('sub_featured_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['sub_featured']['sub_featured_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('sub_featured_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['sub_featured']['sub_featured_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('sub_featured_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['highlighted_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Highlighted Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('highlighted_top_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('highlighted_top_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('highlighted_top_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('highlighted_top_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('highlighted_top_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['highlighted_top']['highlighted_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('highlighted_top_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['highlighted'] = array(
    '#type' => 'fieldset',
    '#title' => t('Highlighted'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['highlighted']['highlighted_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('highlighted_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['highlighted']['highlighted_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('highlighted_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['highlighted']['highlighted_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('highlighted_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['highlighted']['highlighted_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('highlighted_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['highlighted']['highlighted_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('highlighted_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['highlighted']['highlighted_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('highlighted_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer_top'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer Top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer_top']['footer_top_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('footer_top_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer_top']['footer_top_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('footer_top_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer_top']['footer_top_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('footer_top_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer_top']['footer_top_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('footer_top_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer_top']['footer_top_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('footer_top_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer_top']['footer_top_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('footer_top_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer']['footer_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('footer_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer']['footer_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('footer_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer']['footer_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('footer_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer']['footer_animation_effect'] = array(
    '#type' => 'select',
    '#title' => t('Animation Effect'),
    '#description'   => t('From the drop-down menu, select the animation effect you prefer.'),
    '#default_value' => theme_get_setting('footer_animation_effect', 'openelections'),
    '#options' => array(
    'no-animation' => t('None'),
    'fadeIn' => t('Fade In'),
    'fadeInDown' => t('Fade In Down'),
    'fadeInUp' => t('Fade In Up'),
    'fadeInLeft' => t('Fade In Left'),
    'fadeInRight' => t('Fade In Right'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer']['footer_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('footer_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer']['footer_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('footer_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer_bottom'] = array(
    '#type' => 'fieldset',
    '#title' => t('Footer Bottom'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('footer_bottom_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('footer_bottom_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('footer_bottom_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('footer_bottom_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['footer_bottom']['footer_bottom_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('footer_bottom_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['subfooter'] = array(
    '#type' => 'fieldset',
    '#title' => t('Subfooter'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['subfooter']['subfooter_layout_container'] = array(
    '#type' => 'select',
    '#title' => t('Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#default_value' => theme_get_setting('subfooter_layout_container', 'openelections'),
    '#options' => array(
      'container-fluid' => t('Full Width'),
      'container' => t('Fixed Width'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['subfooter']['subfooter_separator'] = array(
    '#type' => 'select',
    '#title' => t('Separator'),
    '#description'   => t('From the drop-down menu, select the separator you prefer. The separator will be applied between the current region and the one above.'),
    '#default_value' => theme_get_setting('subfooter_separator', 'openelections'),
    '#options' => array(
    'region--no-separator' => t('Default'),
    'region--separator-incline-diagonal' => t('Ιncline Diagonal Separator'),
    'region--separator-decline-diagonal' => t('Decline Diagonal Separator'),
    'region--separator-border-top' => t('Border Top'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['subfooter']['subfooter_background_color'] = array(
    '#type' => 'select',
    '#title' => t('Background Color'),
    '#description'   => t('From the drop-down menu, select the background color you prefer.'),
    '#default_value' => theme_get_setting('subfooter_background_color', 'openelections'),
    '#options' => array(
    'region--dark-typography region--white-background' => t('White'),
    'region--dark-typography region--white-background region--white-pattern' => t('White Pattern'),
    'region--dark-typography region--gray-background' => t('Light Gray'),
    'region--light-typography region--colored-background' => t('Colored'),
    'region--light-typography region--colored-secondary-background' => t('Colored Secondary'),
    'region--light-typography region--dark-background' => t('Dark Colored'),
    'region--light-typography region--black-background' => t('Black'),
    ),
  );

  $form['op_settings']['regions_tab']['regions']['subfooter']['subfooter_blocks_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove whitespace between blocks'),
    '#description'   => t('Use this checkbox to remove the padding between blocks assigned in this region.'),
    '#default_value' => theme_get_setting('subfooter_blocks_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['regions_tab']['regions']['subfooter']['subfooter_region_paddings'] = array(
    '#type' => 'checkbox',
    '#title' => t('Remove top and bottom region whitespace'),
    '#description'   => t('Use this checkbox to remove the top and bottom paddings of the region. Please leave this option disabled if you also select a region seperator other than "Default" from the available options above.'),
    '#default_value' => theme_get_setting('subfooter_region_paddings', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['post_tab']['post'] = array(
    '#type' => 'details',
    '#title' => t('Article features'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['post_tab']['post']['reading_time'] = array(
    '#type' => 'checkbox',
    '#title' => t('Time to read'),
    '#description'   => t('Use the checkbox to enable or disable the "Time to read" indicator.'),
    '#default_value' => theme_get_setting('reading_time', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['post_tab']['post']['font_resize'] = array(
    '#type' => 'checkbox',
    '#title' => t('Font resize'),
    '#description'   => t('Enable function that allows to increase or decrease the font-size.'),
    '#default_value' => theme_get_setting('font_resize', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['post_tab']['post']['post_progress'] = array(
    '#type' => 'checkbox',
    '#title' => t('Read so far'),
    '#description'   => t('Use the checkbox to enable or disable the reading progress indicator.'),
    '#default_value' => theme_get_setting('post_progress', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['post_tab']['post']['affix_side'] = array(
    '#type' => 'checkbox',
    '#title' => t('Affixed side'),
    '#description'   => t('Apply affixed position to the node features sidebar.'),
    '#default_value' => theme_get_setting('affix_side', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['post_tab']['post']['share_links'] = array(
    '#type' => 'checkbox',
    '#title' => t('Share links'),
    '#description'   => t('Enable social media sharing functionality'),
    '#default_value' => theme_get_setting('share_links', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['post_tab']['post']['print_button'] = array(
    '#type' => 'checkbox',
    '#title' => t('Post print'),
    '#description'   => t('Enable "Print this page" function.'),
    '#default_value' => theme_get_setting('print_button', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['layout_tab']['layout_modes'] = array(
    '#type' => 'details',
    '#title' => t('Theme Layout'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['layout_tab']['layout_modes']['layout_mode'] = array(
    '#type' => 'select',
    '#title' => t('Global Layout Mode'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer. This global setting overrides the individual region-specific layout settings.'),
    '#default_value' => theme_get_setting('layout_mode', 'openelections'),
    '#options' => array(
      'wide' => t('Wide'),
      'boxed' => t('Boxed'),
    ),
  );

  $form['op_settings']['font_tab']['font'] = array(
    '#type' => 'details',
    '#title' => t('Font Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['font_tab']['font']['font_title'] = array(
    '#type' => 'item',
    '#markup' => 'For every region pick the <strong>font-family</strong> that corresponds to your needs.',
  );

  $form['op_settings']['font_tab']['font']['sitename_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Site name'),
    '#default_value' => theme_get_setting('sitename_font_family', 'openelections'),
    '#options' => array(
      'sff-fyf' => t('@font-your-face'),
      'sff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'sff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'sff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'sff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'sff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'sff-44' => t('Cantata One, Georgia, Times, Times New Roman, Serif'),
      'sff-16' => t('Cinzel, Georgia, Times, Serif'),
      'sff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'sff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'sff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'sff-13' => t('Georgia, Times, Serif'),
      'sff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'sff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'sff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'sff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'sff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'sff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'sff-01' => t('Merriweather, Georgia, Times, Serif'),
      'sff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'sff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'sff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'sff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'sff-15' => t('Philosopher, Georgia, Times, Serif'),
      'sff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'sff-14' => t('Playfair Display, Times, Serif'),
      'sff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'sff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'sff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'sff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'sff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'sff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'sff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'sff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'sff-30' => t('Times, Times New Roman, Serif'),
      'sff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'sff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'sff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'sff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'sff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
      'sff-45' => t('Zilla Slab, Georgia, Times, Times New Roman, Serif'),
    ),
  );

  $form['op_settings']['font_tab']['font']['slogan_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Slogan'),
    '#default_value' => theme_get_setting('slogan_font_family', 'openelections'),
    '#options' => array(
      'slff-fyf' => t('@font-your-face'),
      'slff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'slff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'slff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'slff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'slff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'slff-44' => t('Cantata One, Georgia, Times, Times New Roman, Serif'),
      'slff-16' => t('Cinzel, Georgia, Times, Serif'),
      'slff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'slff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'slff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'slff-13' => t('Georgia, Times, Serif'),
      'slff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'slff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'slff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'slff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'slff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'slff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'slff-01' => t('Merriweather, Georgia, Times, Serif'),
      'slff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'slff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'slff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'slff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'slff-15' => t('Philosopher, Georgia, Times, Serif'),
      'slff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'slff-14' => t('Playfair Display, Times, Serif'),
      'slff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'slff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'slff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'slff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'slff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'slff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'slff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'slff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'slff-30' => t('Times, Times New Roman, Serif'),
      'slff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'slff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'slff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'slff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'slff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
      'slff-45' => t('Zilla Slab, Georgia, Times, Times New Roman, Serif'),
    ),
  );

  $form['op_settings']['font_tab']['font']['headings_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Headings'),
    '#default_value' => theme_get_setting('headings_font_family', 'openelections'),
    '#options' => array(
      'hff-fyf' => t('@font-your-face'),
      'hff-31' => t('Alegreya SC, Georgia, Times, Times New Roman, Serif'),
      'hff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'hff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'hff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'hff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'hff-44' => t('Cantata One, Georgia, Times, Times New Roman, Serif'),
      'hff-16' => t('Cinzel, Georgia, Times, Serif'),
      'hff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'hff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'hff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'hff-13' => t('Georgia, Times, Serif'),
      'hff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'hff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'hff-36' => t('Julius Sans One, Arial, Helvetica Neue, Sans-serif'),
      'hff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'hff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'hff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'hff-01' => t('Merriweather, Georgia, Times, Serif'),
      'hff-32' => t('Montserrat SC, Arial, Helvetica Neue, Sans-serif'),
      'hff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'hff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'hff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'hff-15' => t('Philosopher, Georgia, Times, Serif'),
      'hff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'hff-14' => t('Playfair Display, Times, Serif'),
      'hff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'hff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'hff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'hff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'hff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'hff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'hff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'hff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'hff-30' => t('Times, Times New Roman, Serif'),
      'hff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'hff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'hff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'hff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'hff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
      'hff-45' => t('Zilla Slab, Georgia, Times, Times New Roman, Serif'),
    ),
  );

  $form['op_settings']['font_tab']['font']['headings_wide_spacing'] = array(
    '#type' => 'checkbox',
    '#title' => t('Apply wide letter spacing and uppercase to Headings'),
    '#default_value' => theme_get_setting('headings_wide_spacing', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['font_tab']['font']['paragraph_font_family'] = array(
    '#type' => 'select',
    '#title' => t('Paragraph'),
    '#default_value' => theme_get_setting('paragraph_font_family', 'openelections'),
    '#options' => array(
      'pff-fyf' => t('@font-your-face'),
      'pff-25' => t('Alegreya, Georgia, Times, Times New Roman, Serif'),
      'pff-40' => t('Archivo Narrow, Arial, Helvetica Neue, Sans-serif'),
      'pff-42' => t('Arimo, Arial, Helvetica Neue, Sans-serif'),
      'pff-19' => t('Cabin, Helvetica Neue, Arial, Sans-serif'),
      'pff-44' => t('Cantata One, Georgia, Times, Times New Roman, Serif'),
      'pff-27' => t('Crimson Text, Georgia, Times, Times New Roman, Serif'),
      'pff-22' => t('Droid Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-09' => t('Exo, Arial, Helvetica Neue, Sans-serif'),
      'pff-33' => t('Fira Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-28' => t('Gentium Book Basic, Georgia, Times, Times New Roman, Serif'),
      'pff-13' => t('Georgia, Times, Serif'),
      'pff-21' => t('Helvetica Neue, Arial, Sans-serif'),
      'pff-12' => t('Josefin Sans, Georgia, Times, Serif'),
      'pff-07' => t('Lato, Helvetica Neue, Arial, Sans-serif'),
      'pff-43' => t('Libre Franklin, Helvetica Neue, Arial, Sans-serif'),
      'pff-34' => t('Lora, Georgia, Times, Times New Roman, Serif'),
      'pff-01' => t('Merriweather, Georgia, Times, Serif'),
      'pff-20' => t('Noto Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-26' => t('Noto Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-38' => t('Open Sans Condensed, Arial, Helvetica Neue, Sans-serif'),
      'pff-06' => t('Open Sans, Helvetica Neue, Arial, Sans-serif'),
      'pff-17' => t('Oswald, Helvetica Neue, Arial, Sans-serif'),
      'pff-15' => t('Philosopher, Georgia, Times, Serif'),
      'pff-18' => t('Playfair Display SC, Georgia, Times, Serif'),
      'pff-14' => t('Playfair Display, Times, Serif'),
      'pff-39' => t('PT Sans Narrow, Arial, Helvetica Neue, Sans-serif'),
      'pff-04' => t('PT Sans, Helvetica Neue, Arial, Sans-serif'),
      'pff-23' => t('PT Serif, Georgia, Times, Times New Roman, Serif'),
      'pff-35' => t('Quattrocento Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-11' => t('Raleway, Helvetica Neue, Arial, Sans-serif'),
      'pff-08' => t('Roboto Condensed, Arial Narrow, Arial, Sans-serif'),
      'pff-10' => t('Roboto Slab, Trebuchet MS, Sans-serif'),
      'pff-05' => t('Roboto, Helvetica Neue, Arial, Sans-serif'),
      'pff-02' => t('Source Sans Pro, Helvetica Neue, Arial, Sans-serif'),
      'pff-30' => t('Times, Times New Roman, Serif'),
      'pff-41' => t('Ubuntu Condensed, Arial, Helvetica Neue, Sans-serif'),
      'pff-03' => t('Ubuntu, Helvetica Neue, Arial, Sans-serif'),
      'pff-29' => t('Volkhov, Georgia, Times, Times New Roman, Serif'),
      'pff-24' => t('Vollkorn, Georgia, Times, Times New Roman, Serif'),
      'pff-37' => t('Work Sans, Arial, Helvetica Neue, Sans-serif'),
      'pff-45' => t('Zilla Slab, Georgia, Times, Times New Roman, Serif'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow'] = array(
    '#type' => 'details',
    '#title' => t('Slideshow Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen'] = array(
    '#type' => 'fieldset',
    '#title' => t('Full Screen (Slider Revolution)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_effect', 'openelections'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_navigation_style'] = array(
    '#type' => 'select',
    '#title' => t('Navigation Style'),
    '#description'   => t('From the drop-down menu, select the style you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_navigation_style', 'openelections'),
    '#options' => array(
      'bullets' => t('Bullets'),
      'titles_carousel' => t('Titles Carousel'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_bullets_position', 'openelections'),
    '#options' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['rs_slideshow_fullscreen_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Touch Swipe Navigation'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe navigation in mobile devices.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullscreen_touch_swipe', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['transparent_header_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Transparent Header'),
    '#description'   => t('Use the checkbox to display the header over the slideshow in a transparent style.'),
    '#default_value' => theme_get_setting('transparent_header_state', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['transparent_header_opacity'] = array(
    '#type' => 'textfield',
    '#title' => t('Transparent Header Background Opacity'),
    '#description'   => t('Set the % opacity for the background of the transparent header over the full screen slideshow.'),
    '#default_value' => theme_get_setting('transparent_header_opacity', 'openelections'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullscreen']['inverted_header_state'] = array(
    '#type' => 'checkbox',
    '#title' => t('Inverted Header'),
    '#description'   => t('Invert text colors in header (works only when transparent header is checked)'),
    '#default_value' => theme_get_setting('inverted_header_state', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth'] = array(
    '#type' => 'fieldset',
    '#title' => t('Full Width (Slider Revolution)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_effect', 'openelections'),
    '#options' => array(
    'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_initial_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Initial Height (px)'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_initial_height', 'openelections'),
    '#description'   => t('Set the initial height, in pixels.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_navigation_style'] = array(
    '#type' => 'select',
    '#title' => t('Navigation Style'),
    '#description'   => t('From the drop-down menu, select the style you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_navigation_style', 'openelections'),
    '#options' => array(
      'bullets' => t('Bullets'),
      'titles_carousel' => t('Titles Carousel'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_bullets_position', 'openelections'),
    '#options' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_fullwidth']['rs_slideshow_fullwidth_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Touch Swipe Navigation'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe navigation in mobile devices.'),
    '#default_value' => theme_get_setting('rs_slideshow_fullwidth_touch_swipe', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth'] = array(
    '#type' => 'fieldset',
    '#title' => t('Boxed Width (Slider Revolution)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_effect', 'openelections'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_initial_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Initial Height (px)'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_initial_height', 'openelections'),
    '#description'   => t('Set the initial height, in pixels.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_navigation_style'] = array(
    '#type' => 'select',
    '#title' => t('Navigation Style'),
    '#description'   => t('From the drop-down menu, select the style you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_navigation_style', 'openelections'),
    '#options' => array(
      'bullets' => t('Bullets'),
      'titles_carousel' => t('Titles Carousel'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_bullets_position', 'openelections'),
    '#options' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_boxedwidth']['rs_slideshow_boxedwidth_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Touch Swipe Navigation'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe navigation in mobile devices.'),
    '#default_value' => theme_get_setting('rs_slideshow_boxedwidth_touch_swipe', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_internal'] = array(
    '#type' => 'fieldset',
    '#title' => t('Internal Banner (Slider Revolution)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_effect', 'openelections'),
    '#options' => array(
      'fade' => t('Fade'),
      'slideup' => t('Slide To Top'),
      'slidedown' => t('Slide To Bottom'),
      'slideright' => t('Slide To Right'),
      'slideleft' => t('Slide To Left'),
      'slidehorizontal' => t('Slide Horizontal'),
      'slidevertical' => t('Slide Vertical'),
      'boxslide' => t('Slide Boxes'),
      'slotslide-horizontal' => t('Slide Slots Horizontal'),
      'slotslide-vertical' => t('Slide Slots Vertical'),
      'boxfade' => t('Fade Boxes'),
      'slotfade-horizontal' => t('Fade Slots Horizontal'),
      'slotfade-vertical' => t('Fade Slots Vertical'),
      'fadefromright' => t('Fade and Slide from Right'),
      'fadefromleft' => t('Fade and Slide from Left'),
      'fadefromtop' => t('Fade and Slide from Top'),
      'fadefrombottom' => t('Fade and Slide from Bottom'),
      'fadetoleftfadefromright' => t('Fade To Left and Fade From Right'),
      'fadetorightfadefromleft' => t('Fade To Right and Fade From Left'),
      'fadetotopfadefrombottom' => t('Fade To Top and Fade From Bottom'),
      'fadetobottomfadefromtop' => t('Fade To Bottom and Fade From Top'),
      'parallaxtoright' => t('Parallax to Right'),
      'parallaxtoleft' => t('Parallax to Left'),
      'parallaxtotop' => t('Parallax to Top'),
      'parallaxtobottom' => t('Parallax to Bottom'),
      'scaledownfromright' => t('Zoom Out and Fade From Right'),
      'scaledownfromleft' => t('Zoom Out and Fade From Left'),
      'scaledownfromtop' => t('Zoom Out and Fade From Top'),
      'scaledownfrombottom' => t('Zoom Out and Fade From Bottom'),
      'zoomout' => t('ZoomOut'),
      'zoomin' => t('ZoomIn'),
      'slotzoom-horizontal' => t('Zoom Slots Horizontal'),
      'slotzoom-vertical' => t('Zoom Slots Vertical'),
      'curtain-1' => t('Curtain from Left'),
      'curtain-2' => t('Curtain from Right'),
      'curtain-3' => t('Curtain from Middle'),
      '3dcurtain-horizontal' => t('3D Curtain Horizontal'),
      '3dcurtain-vertical' => t('3D Curtain Vertical'),
      'cube' => t('Cube Vertical'),
      'cube-horizontal' => t('Cube Horizontal'),
      'incube' => t('In Cube Vertical'),
      'incube-horizontal' => t('In Cube Horizontal'),
      'turnoff' => t('TurnOff Horizontal'),
      'turnoff-vertical' => t('TurnOff Vertical'),
      'papercut' => t('Paper Cut'),
      'flyin' => t('Fly In'),
      'random-static' => t('Random Flat'),
      'random-premium' => t('Random Premium'),
      'random' => t('Random Flat and Premium/Default'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_initial_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Initial Height (px)'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_initial_height', 'openelections'),
    '#description'   => t('Set the initial height, in pixels.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_navigation_style'] = array(
    '#type' => 'select',
    '#title' => t('Navigation Style'),
    '#description'   => t('From the drop-down menu, select the style you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_navigation_style', 'openelections'),
    '#options' => array(
      'bullets' => t('Bullets'),
      'titles_carousel' => t('Titles Carousel'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_bullets_position'] = array(
    '#type' => 'select',
    '#title' => t('Navigation bullets position'),
    '#description'   => t('From the drop-down menu, select the position you prefer.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_bullets_position', 'openelections'),
    '#options' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['revolution_slider_internal']['rs_slideshow_internal_touch_swipe'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable Touch Swipe Navigation'),
    '#description'   => t('Use the checkbox to enable or disable touch swipe navigation in mobile devices.'),
    '#default_value' => theme_get_setting('rs_slideshow_internal_touch_swipe', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['rs_global'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slider Revolution global settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['rs_global']['rs_slideshow_caption_opacity'] = array(
    '#type' => 'textfield',
    '#title' => t('Caption Background Opacity'),
    '#description'   => t('Set the % opacity for the background of the captions in all sliders implemented with Slider Revolution.'),
    '#default_value' => theme_get_setting('rs_slideshow_caption_opacity', 'openelections'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['rs_global']['rs_slideshow_background_opacity'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Background Opacity'),
    '#description'   => t('Set the % opacity for the background of the slides in all sliders implemented with Slider Revolution.'),
    '#default_value' => theme_get_setting('rs_slideshow_background_opacity', 'openelections'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['in_page_slider'] = array(
    '#type' => 'fieldset',
    '#title' => t('In Page Images Slider (Flexslider)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['in_page_slider']['in_page_slider_effect'] = array(
    '#type' => 'select',
    '#title' => t('Effects'),
    '#description'   => t('From the drop-down menu, select the slideshow effect you prefer.'),
    '#default_value' => theme_get_setting('in_page_slider_effect', 'openelections'),
    '#options' => array(
    'fade' => t('fade'),
    'slide' => t('slide'),
    ),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_products'] = array(
    '#type' => 'fieldset',
    '#title' => t('Products (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_products']['owl_products_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_products_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_products']['owl_products_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_products_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_team_members'] = array(
    '#type' => 'fieldset',
    '#title' => t('Team Members (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_team_members']['owl_team_members_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_team_members_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_team_members']['owl_team_members_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_team_members_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_promoted_posts'] = array(
    '#type' => 'fieldset',
    '#title' => t('Promoted Posts (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_promoted_posts']['owl_promoted_posts_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_promoted_posts_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_promoted_posts']['owl_promoted_posts_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_promoted_posts_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_articles'] = array(
    '#type' => 'fieldset',
    '#title' => t('Articles (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_articles']['owl_articles_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_articles_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_articles']['owl_articles_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_articles_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_testimonials'] = array(
    '#type' => 'fieldset',
    '#title' => t('Testimonials (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_testimonials']['owl_testimonials_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_testimonials_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_testimonials']['owl_testimonials_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_testimonials_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_related_nodes'] = array(
    '#type' => 'fieldset',
    '#title' => t('Related Nodes (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_related_nodes']['owl_related_nodes_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_related_nodes_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_related_nodes']['owl_related_nodes_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_related_nodes_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_brands'] = array(
    '#type' => 'fieldset',
    '#title' => t('Clients (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_brands']['owl_brands_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_brands_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_brands']['owl_brands_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_brands_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_collections'] = array(
    '#type' => 'fieldset',
    '#title' => t('Product Groups (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_collections']['owl_collections_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_collections_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_collections']['owl_collections_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_collections_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_service_categories'] = array(
    '#type' => 'fieldset',
    '#title' => t('Service Categories (Owl Carousel)'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_service_categories']['owl_service_categories_autoplay'] = array(
    '#type' => 'checkbox',
    '#title' => t('Autoplay'),
    '#default_value' => theme_get_setting('owl_service_categories_autoplay', 'openelections'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['op_settings']['slideshows_tab']['slideshow']['carousel']['owl_service_categories']['owl_service_categories_effect_time'] = array(
    '#type' => 'textfield',
    '#title' => t('Effect duration (sec)'),
    '#default_value' => theme_get_setting('owl_service_categories_effect_time', 'openelections'),
    '#description'   => t('Set the speed of animations, in seconds.'),
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings'] = array(
    '#type' => 'details',
    '#title' => t('In page Navigation'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_offset'] = array(
    '#type' => 'textfield',
    '#title' => t('Scroll to region offset (px)'),
    '#default_value' => theme_get_setting('in_page_navigation_offset', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions'] = array(
    '#type' => 'fieldset',
    '#title' => t('Region ids configuration'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['banner_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Banner region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('banner_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['content_top_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Content Top region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('content_top_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['content_top_highlighted_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Content Top Highlighted region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('content_top_highlighted_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['main_content_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Main Content region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('main_content_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['content_bottom_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Content Bottom region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('content_bottom_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['featured_top_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Featured Top region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('featured_top_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['featured_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Featured region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('featured_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['featured_bottom_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Featured Bottom region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('featured_bottom_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['sub_featured_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Sub Featured region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('sub_featured_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['highlighted_top_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Highlighted Top region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('highlighted_top_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['highlighted_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Highlighted region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('highlighted_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['footer_top_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Footer Top region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('footer_top_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['footer_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Footer region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('footer_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['footer_bottom_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Footer Bottom region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('footer_bottom_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['in_page_navigation']['in_page_navigation_settings']['in_page_navigation_regions']['subfooter_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Subfooter region id'),
    '#description'   => t('Specify the id attribute of the region. This value must be unique.'),
    '#default_value' => theme_get_setting('subfooter_id', 'openelections'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['op_settings']['isotope_tab'] = array(
    '#type' => 'details',
    '#title' => t('Isotope Filters'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['op_settings']['isotope_tab']['isotope_layout_mode'] = array(
    '#type' => 'select',
    '#title' => t('Layout modes'),
    '#default_value' => theme_get_setting('isotope_layout_mode', 'openelections'),
    '#description'   => t('From the drop-down menu, select the layout mode you prefer.'),
    '#options' => array(
      'masonry' => t('Masonry'),
      'fitRows' => t('Fit Rows'),
    ),
  );

  $form['op_settings']['isotope_tab']['isotope_filters_text'] = array(
    '#type' => 'textfield',
    '#title' => t('Text of isotope "All" filter'),
    '#default_value' => theme_get_setting('isotope_filters_text', 'openelections'),
    '#description'   => t('Change the text of "All" filter'),
  );

  $form['op_settings']['google_maps_tab'] = array(
    '#type' => 'details',
    '#title' => t('Google Maps Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'tabs',
  );

  $form['op_settings']['google_maps_tab']['google_maps_key'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Maps API Key'),
    '#description'   => t('Google requires an API key to be included to all calls to Google Maps API. Please create an API key and populate the above field.'),
    '#default_value' => theme_get_setting('google_maps_key','openelections'),
    '#size'          => 50,
    '#maxlength'     => 50,
  );

}
