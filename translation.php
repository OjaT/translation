<?php
/**
 * Plugin Name: Translation
 * Version: 1.0
 * Author: OjaT
 */

require( plugin_dir_path( __FILE__ ) . '/acf/fields.php');

function getStrings() {
    $a = array();
    if( have_rows('translation_string', 'option') ):
        while( have_rows('translation_string', 'option') ) : the_row();   
            $s = get_sub_field('text');
            $s = esc_attr(trim($s));
            array_push($a, $s);
        endwhile;
    endif;
    return $a;
}