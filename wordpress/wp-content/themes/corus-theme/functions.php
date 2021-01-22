<?php
function corus_gallery_post_type() {
    register_post_type('corus_gallery',
        array(
            'labels'      => array(
                'name'          => __('Gallery', 'textdomain'),
                'singular_name' => __('Gallery', 'textdomain'),

            ),
			'supports' => array( 
			  'title',
			  'custom-fields'
			),
                'public'      => true
        )
    );
}
add_action('init', 'corus_gallery_post_type');