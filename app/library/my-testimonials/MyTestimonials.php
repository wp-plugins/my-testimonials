<?php


class MyTestimonials {
    
    
    /**
     * Main Construct for the Whole Application
     * Sets Registry and Default Values (if none present)
     *
     * @return null
     * @added 2.0
     */
    
    public function __construct() {
        
        
        if( !get_option( 'MTVer' ) ) :
                add_option( 'MTVer', MT_Registry::get( 'config', 'current_version' ) );
        endif;
        
        MT_Registry::set( 'version', get_option( 'MTVer' ) );

        
    }
    
        
    /**
     * The main application run function, this sets up all the magic and grunt
     * work of the application, firing off all the different controllers.
     *
     * @return null
     * @added 2.0
     */
    
    public function run() {
        

        new MT_InstallController;
        new MT_UpgradeController;
        new MT_GlobalController;
        new MT_PostTypeFactory( new MT_PostType );
        new MT_Shortcodes();

     
    }
    
    
}