<?php
/**
 * Custom functions
 */


add_filter('the_terms', 'no_terms_links', 10, 2);

function no_terms_links($term_list, $taxonomy) {

    if ('nicknames' == $taxonomy)
        return wp_filter_nohtml_kses($term_list);

    return $term_list;
}