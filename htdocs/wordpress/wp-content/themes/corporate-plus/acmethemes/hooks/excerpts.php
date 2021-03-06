<?php
/**
 * Excerpt length 90 return
 *
 * @since Corporate Plus 1.1.0
 *
 * @param null
 * @return null
 *
 */
if ( !function_exists('corporate_plus_alter_excerpt') ) :
    function corporate_plus_alter_excerpt( $length ){
		if( is_admin() ){
			return $length;
		}
        return 70;
    }
endif;

add_filter('excerpt_length', 'corporate_plus_alter_excerpt');

/**
 * Add ... for more view
 *
 * @since Corporate Plus 1.1.0
 *
 * @param null
 * @return null
 *
 */

if ( !function_exists('corporate_plus_excerpt_more') ) :
    function corporate_plus_excerpt_more($more) {
		if( is_admin() ){
			return $more;
		}
        return '&hellip;';
    }
endif;
add_filter('excerpt_more', 'corporate_plus_excerpt_more');