<?php

class MT_UpgradeController extends MT_BaseController {
    
      
    /**
     * Script that runs if the menu has been upgraded
     *
     * @return void
     * @added 1.0
     */
    
    public function __construct() {
        
        
        if( $this->needsUpgrade() ) :
            
            $this->upgrade();   
            
        endif;

            
    }
    
    /**
     * Script that upgrades the current version to the latest
     *
     * @return void
     * @added 1.0
     */
    
    public function upgrade() {
        
        
        /* Update Version */
        update_option( 'MTVer', MT_Registry::get( 'config', 'current_version' ) );

            
    }
    
        
    
    /**
     * Determines whether or not the site needs upgrading
     *
     * @return boolean
     * @added 1.0
     */
    
    public function needsUpgrade() {
        
        
        return get_option( 'MTVer' ) != MT_Registry::get( 'config', 'current_version' ) ? true : false;

        
    }
    
    
}