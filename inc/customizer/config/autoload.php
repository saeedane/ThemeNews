<?php
/**
 * @author : PenciDesign
 */

/**
 * Autoload Function
 */

spl_autoload_register( function ( $class ) {
	$prefix = 'SoledadFW\\';

	$baseDir = 'inc/customizer/config';

	$len = strlen( $prefix );

	if ( strncmp( $prefix, $class, $len ) !== 0 ) {
		return;
	}

	$relativeClass = substr( $class, $len );

	$file = rtrim( $baseDir, '/' ) . '/' . str_replace( '\\', '/', $relativeClass ) . '.php';
	$file = get_theme_file_path( $file );

	if ( is_link( $file ) ) {
		$file = readlink( $file );
	}

	if ( is_file( $file ) ) {
		require $file;
	}
} );
