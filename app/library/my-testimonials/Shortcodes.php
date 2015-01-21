<?php

class MT_Shortcodes {
    
        
    /**
     * Create new shortcodes for use throughout the application
     *
     * @param  array  $args
     * @return null
     * @added 1.0
     */
    
    public function __construct() {
        
        
        add_shortcode( 'testimonials', array( &$this, 'testimonials' ) );
        add_shortcode( 'testimonials-list', array( &$this, 'testimonialsList' ) );
        
        
    }
    
    /**
     * Return the appropriate view for our testimonial
     *
     * @param  array  $args
     * @return view
     * @added 1.0
     */
    
    public function testimonials( $args ) {
        
        
        return MT_View::make( 'testimonials', $args );
        
        
    }
    
    /**
     * Return a list view of our testimonials
     *
     * @param  array  $args
     * @return view
     * @added 1.0
     */
    
    public function testimonialsList( $args ) {
        
        
        return MT_View::make( 'testimonials-list', $args );
        
        
    }
    
}