<?php

/*
|--------------------------------------------------------------------------
| Autoload our application
|--------------------------------------------------------------------------
|
| Here we include all our required files for the application to run correctly.
| At the moment this is a big mess of require_once calls and needs to be 
| tidied up with an autoloader function
|
*/

define( 'MT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MT_FOLDER', 'my-testimonials' );

require_once MT_PLUGIN_DIR . 'library/' . MT_FOLDER . '/Registry.php';

require_once MT_PLUGIN_DIR . 'config.php';

require_once MT_PLUGIN_DIR . 'library/' . MT_FOLDER . '/MyTestimonials.php';

require_once MT_PLUGIN_DIR . 'library/' . MT_FOLDER . '/View.php';

require_once MT_PLUGIN_DIR . 'library/' . MT_FOLDER . '/PostType.php';

require_once MT_PLUGIN_DIR . 'library/' . MT_FOLDER . '/PostTypeFactory.php';

require_once MT_PLUGIN_DIR . 'library/' . MT_FOLDER . '/Shortcodes.php';

require_once MT_PLUGIN_DIR . 'controllers/BaseController.php';

require_once MT_PLUGIN_DIR . 'controllers/GlobalController.php';

require_once MT_PLUGIN_DIR . 'controllers/InstallController.php';

require_once MT_PLUGIN_DIR . 'controllers/UpgradeController.php';

require_once MT_PLUGIN_DIR . 'models/BaseModel.php';
