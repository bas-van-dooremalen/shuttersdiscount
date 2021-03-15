<?php
// CLEANUP 
include( 'configure/cleanup.php' );

// CPT TAXONOMY
include( 'configure/cpt-taxonomy.php' );

// UTILITIES
include( 'configure/utilities.php' );

// CONFIG
include( 'configure/configure.php' );

// JAVASCRIPT & CSS
include( 'configure/js-css.php' );

// SHORTCODES
include( 'configure/shortcodes.php' );

// ACF
include( 'configure/acf.php' );

// HOOKS ADMIN
if( is_admin() )
{
	include( 'configure/admin.php' );
}

// WEBP UPLOAD IMAGE(S)
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');