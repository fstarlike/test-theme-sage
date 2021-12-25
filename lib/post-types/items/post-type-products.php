<?php
namespace Roots\Hamkaran\PostTypes;

if( ! defined( 'ABSPATH' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1: 403 Forbidden' );
    exit;
}

/**
 *  Class Post Type Products
 */
final class Products extends Base {

	/**
	 * The Post Type Name ( Slug )
	 *
	 * @return void
	 */
	public function getName() {

		return 'hamkaran-products';

	}

	/**
	 * The Post Type Arguments
	 *
	 * @return void
	 */
	public function getArguments() {

		return array(
			'labels' => array(
				'name'          => __( 'Products', 'hamkaran' ),
				'singular_name' => __( 'Products', 'hamkaran' )
			),
			'public'       => true,
			'menu_icon'    => 'dashicons-cart',
			'has_archive'  => true,
			'rewrite'      => array(
				'slug' => 'product'
			),
			'show_in_rest' => true,
			'supports'     => array(),
		);

	}

	/**
	 * Manage Post Type Supports
	 *
	 * @return void
	 */
	public function manageSupports() {

	}

	/**
	 * Manage Admin Menu
	 *
	 * @return void
	 */
	public function manageAdminMenuItems() {
	}

} // Class

new Products();
