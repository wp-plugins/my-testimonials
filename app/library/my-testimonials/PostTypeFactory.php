<?php

class MT_PostTypeFactory {
    
    public $postTypeCreator;
    
    public function __construct( $postType ) {
        
        $this->postTypeCreator = $postType;
        
        add_action( 'init', array( &$this, 'createAll' ) );


    }
    
    /**
     * Create all post types
     *
     * @return null
     * @added 1.0
     */
    
    public function createAll() {

        $this->postTypeCreator->create( 'testimonials', array( 
            
            'labels' => array( 
                 
                    'name' => 'Testimonials' ,
                    'singular_name' => 'Testimonial',
                    'add_new_item' => 'Add New Testimonial',
                    'edit_item' => 'Edit Testimonial',
                    'new_item' => 'New Testimonial',
                    'view_item' => 'View Testimonial',
                    'search_items' => 'Search Testimonials',
                    'not_found' => 'No Testimonials Found',
                    'not_found_in_trash' => 'No Testimonials Found in the bin' ),
                    'taxonomies' => array( 'type' ), 
                    'public' => true,
                    'rewrite' => array( 
                        'with_front' => false
                    )
            

            ) );

	register_taxonomy(
		'type',
		'testimonials',
		array(
			'label' => __( 'Type' ),
			'rewrite' => array( 'slug' => 'type' ),
			'capabilities' => array(
                            'manage_terms' => 'edit_posts', 
                            'edit_terms' => 'edit_posts',
                            'delete_terms' => 'edit_posts',
                            'assign_terms' => 'edit_posts'  
			),
                        'show_admin_column' => true
		)
	);


    }
    
    
}