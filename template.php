<?php

function simcapy_preprocess_html(&$variables) {
    // Add conditional stylesheets for IE
    drupal_add_css(path_to_theme() . '/blueprint/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lt IE 8', '!IE' => FALSE), 'media' => 'screen, projection'));
}
