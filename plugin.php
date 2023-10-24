<?php
/*
Plugin Name: Decimal to Fraction Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/decimal-to-fraction-calculator/
Description: Decimal to Fraction Calculator converts decimals to fractions or mixed numbers. The Fraction converter works for terminating and for recurring decimals.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_decimal_to_fraction_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Decimal to Fraction Calculator by Calculator.iO";

function display_ci_decimal_to_fraction_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/decimal-to-fraction-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Decimal to Fraction Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_decimal_to_fraction_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_decimal_to_fraction_calculator', 'display_ci_decimal_to_fraction_calculator' );