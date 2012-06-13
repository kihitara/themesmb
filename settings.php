<?php
 
/**
 * Settings for the themesmb theme
 */

defined('MOODLE_INTERNAL') || die;

// Adds our page to the structure of the admin tree

if ($ADMIN->fulltree) { 

// Logo file setting
// $name = 'theme_themesmb/logo';
// $title = get_string('logo','theme_themesmb');
// $description = get_string('logodesc', 'theme_themesmb');
// $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
// $settings->add($setting);

// Foot note setting
$name = 'theme_themesmb/footnote';
$title = get_string('footnote','theme_themesmb');
$description = get_string('footnotedesc', 'theme_themesmb');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);

// Show the credits to MoodleBites for Theme Designers
$name = 'theme_themesmb/mbcredits';
$title = get_string('mbcredits','theme_themesmb');
$description = get_string('mbcreditsdesc', 'theme_themesmb');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Custom CSS file
$name = 'theme_themesmb/customcss';
$title = get_string('customcss','theme_themesmb');
$description = get_string('customcssdesc', 'theme_aerie');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}