<?php
namespace Roots\Hamkaran\PostTypes;

if( ! defined( 'ABSPATH' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1: 403 Forbidden' );
    exit;
}

/**
 *  Class Post Type Init
 */
class Init {

	/**
	 * Current Directory
	 *
	 * @var string
	 */
	private $dir;

	/**
     * The Constructor
	 *
     * @return void
     */
    function __construct() {

		$this->definitions();
		$this->dependencies();

    }

	/**
     * Define Variables
	 *
     * @return void
     */
    private function definitions() {

		$this->dir = dirname( __FILE__ );

    }

	/**
     * Load Dependencies
	 *
     * @return void
     */
    private function dependencies() {

        require_once $this->dir . '/base.php';

        foreach ( glob( $this->dir . '/items/post-type-*.php' ) as $filename ) {
            require_once $filename;
        }

    }

} // Class

new Init();
