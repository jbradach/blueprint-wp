<?php

namespace Roots\Sage\Titles;

/**
 * Page titles
 */
function title()
{
    if (is_home()) {
        if (get_option('page_for_posts', true)) {
            return get_the_title(get_option('page_for_posts', true));
        } else {
            return __('Recent Articles', 'sage');
        }
    } elseif (is_archive()) {
        return get_the_archive_title();
    } elseif (is_search()) {
        return sprintf(__('Search Results for %s', 'sage'), get_search_query());
    } elseif (is_404()) {
        return __('404 Not Found', 'sage');
    } else {
        return get_the_title();
    }
}

function subtitle()
{
    $subtitle = get_post_meta(get_the_ID(), 'advanced_options_subtitle', true);
    if ( ! empty ( $subtitle ) ) {
        echo '<br /><small>'.$subtitle.'</small>';
    } else {
        echo ' - no sub';
    }
    
}