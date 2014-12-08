<?php
/**
 * Contest Post Type
 *
 * @package   Contest_Post_Type
 * @license   GPL-2.0+
 */

/**
 * Register post types and taxonomies.
 *
 * @package Contest_Post_Type
 */
class Contest_Post_Type_Registrations {

	public $post_type = 'contest';

	public $taxonomies = array( 'contest-category' );

	public function init() {
		// Add the contest post type and taxonomies
		add_action( 'init', array( $this, 'register' ) );
	}

	/**
	 * Initiate registrations of post type and taxonomies.
	 *
	 * @uses Contest_Post_Type_Registrations::register_post_type()
	 * @uses Contest_Post_Type_Registrations::register_taxonomy_category()
	 */
	public function register() {
		$this->register_post_type();
		$this->register_taxonomy_category();
	}

	/**
	 * Register the custom post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	protected function register_post_type() {
		$labels = array(
			'name'               => __( 'Contest', 'contest-post-type' ),
			'singular_name'      => __( 'Contest Member', 'contest-post-type' ),
			'add_new'            => __( 'Add Profile', 'contest-post-type' ),
			'add_new_item'       => __( 'Add Profile', 'contest-post-type' ),
			'edit_item'          => __( 'Edit Profile', 'contest-post-type' ),
			'new_item'           => __( 'New Contest Member', 'contest-post-type' ),
			'view_item'          => __( 'View Profile', 'contest-post-type' ),
			'search_items'       => __( 'Search Contest', 'contest-post-type' ),
			'not_found'          => __( 'No profiles found', 'contest-post-type' ),
			'not_found_in_trash' => __( 'No profiles in the trash', 'contest-post-type' ),
		);

		$supports = array(
			'title',
			'editor',
			'thumbnail',
			'custom-fields',
			'revisions',
		);

		$args = array(
			'labels'          => $labels,
			'supports'        => $supports,
			'public'          => true,
			'capability_type' => 'post',
			'rewrite'         => array( 'slug' => 'contest', ), // Permalinks format
			'menu_position'   => 30,
			'menu_icon'       => 'dashicons-id',
		);

		$args = apply_filters( 'contest_post_type_args', $args );

		register_post_type( $this->post_type, $args );
	}

	/**
	 * Register a taxonomy for Contest Categories.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
	 */
	protected function register_taxonomy_category() {
		$labels = array(
			'name'                       => __( 'Contest Categories', 'contest-post-type' ),
			'singular_name'              => __( 'Contest Category', 'contest-post-type' ),
			'menu_name'                  => __( 'Contest Categories', 'contest-post-type' ),
			'edit_item'                  => __( 'Edit Contest Category', 'contest-post-type' ),
			'update_item'                => __( 'Update Contest Category', 'contest-post-type' ),
			'add_new_item'               => __( 'Add New Contest Category', 'contest-post-type' ),
			'new_item_name'              => __( 'New Contest Category Name', 'contest-post-type' ),
			'parent_item'                => __( 'Parent Contest Category', 'contest-post-type' ),
			'parent_item_colon'          => __( 'Parent Contest Category:', 'contest-post-type' ),
			'all_items'                  => __( 'All Contest Categories', 'contest-post-type' ),
			'search_items'               => __( 'Search Contest Categories', 'contest-post-type' ),
			'popular_items'              => __( 'Popular Contest Categories', 'contest-post-type' ),
			'separate_items_with_commas' => __( 'Separate contest categories with commas', 'contest-post-type' ),
			'add_or_remove_items'        => __( 'Add or remove contest categories', 'contest-post-type' ),
			'choose_from_most_used'      => __( 'Choose from the most used contest categories', 'contest-post-type' ),
			'not_found'                  => __( 'No contest categories found.', 'contest-post-type' ),
		);

		$args = array(
			'labels'            => $labels,
			'public'            => true,
			'show_in_nav_menus' => true,
			'show_ui'           => true,
			'show_tagcloud'     => true,
			'hierarchical'      => true,
			'rewrite'           => array( 'slug' => 'contest-category' ),
			'show_admin_column' => true,
			'query_var'         => true,
		);

		$args = apply_filters( 'contest_post_type_category_args', $args );

		register_taxonomy( $this->taxonomies[0], $this->post_type, $args );
	}
}