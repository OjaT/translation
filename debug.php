<?php
// Debugging page template

function debugTemplateAdd($templates) {
    $templates['page-translate-debug.php'] = 'Translation debug';
    return $templates;
}
add_filter ('theme_page_templates', 'debugTemplateAdd');

function debugTemplateRedirect($template) {
    $post = get_post();
    $page_template = get_post_meta( $post->ID, '_wp_page_template', true );
    if ('page-translate-debug.php' == basename ($page_template))
        $template = plugin_dir_path( __FILE__ ) . '/templates/page-translate-debug.php';
    return $template;
}
add_filter ('page_template', 'debugTemplateRedirect');