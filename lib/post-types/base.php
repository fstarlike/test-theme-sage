<?php
namespace Roots\Hamkaran\PostTypes;

if( ! defined( 'ABSPATH' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1: 403 Forbidden' );
    exit;
}

/**
 *  Class Post Type Base
 */
abstract class Base {

	/**
	 * Post Type Slug ( Name )
	 *
	 * @var string
	 */
	public $name;

	/**
	 * Post Type Args ( Name )
	 *
	 * @var string
	 */
	public $args;

	/**
	 * The Constructor
	 *
	 * @param string $postTypeName
	 */
    function __construct() {

		$this->name = $this->getName();

		$this->args = $this->getArguments();

        $this->register();

    }

	/**
     * Registers The Post Type
     * @since 0.1.0
     * @return void
     */
    private function register() {

		register_post_type( $this->name, $this->args );

        $this->manageSupports();

        add_action( 'admin_menu', [ $this, 'manageAdminMenuItems' ] );

    }

	/**
	 * The Post Type Name ( Slug )
	 *
	 * @return void
	 */
	abstract public function getName();

	/**
	 * The Post Type Arguments
	 *
	 * @return void
	 */
	abstract public function getArguments();

	/**
	 * Manage Post Type Supports
	 *
	 * @return void
	 */
	abstract public function manageSupports();

	/**
	 * Manage Admin Menu
	 *
	 * @return void
	 */
	abstract public function manageAdminMenuItems();

} // Class
