<?php
namespace Roots\Hamkaran\PostTypes;

if( ! defined( 'ABSPATH' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1: 403 Forbidden' );
    exit;
}

/**
 *  Class Post Type News
 */
final class News extends Base {

	/**
	 * The Post Type Name ( Slug )
	 *
	 * @return void
	 */
	public function getName() {

		return 'hamkaran-news';

	}

	/**
	 * The Post Type Arguments
	 *
	 * @return void
	 */
	public function getArguments() {

		return array(
			'labels' => array(
				'name'          => __( 'News', 'hamkaran' ),
				'singular_name' => __( 'News', 'hamkaran' )
			),
			'public'       => true,
			'has_archive'  => true,
			'rewrite'      => array(
				'slug' => 'news'
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

new News();
