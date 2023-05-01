<?php

define( 'QI_BLOCKS_VERSION', '1.1.2' );
define( 'QI_BLOCKS_ABS_PATH', dirname( __FILE__ ) );
define( 'QI_BLOCKS_REL_PATH', dirname( plugin_basename( __FILE__ ) ) );
define( 'QI_BLOCKS_URL_PATH', plugin_dir_url( __FILE__ ) );
define( 'QI_BLOCKS_ASSETS_PATH', QI_BLOCKS_ABS_PATH . '/assets' );
define( 'QI_BLOCKS_ASSETS_URL_PATH', QI_BLOCKS_URL_PATH . 'assets' );
define( 'QI_BLOCKS_INC_PATH', QI_BLOCKS_ABS_PATH . '/inc' );
define( 'QI_BLOCKS_INC_URL_PATH', QI_BLOCKS_URL_PATH . 'inc' );
define( 'QI_BLOCKS_BLOCKS_PATH', QI_BLOCKS_INC_PATH . '/blocks' );
define( 'QI_BLOCKS_BLOCKS_URL_PATH', QI_BLOCKS_INC_URL_PATH . '/blocks' );
define( 'QI_BLOCKS_ADMIN_PATH', QI_BLOCKS_INC_PATH . '/admin' );
define( 'QI_BLOCKS_ADMIN_URL_PATH', QI_BLOCKS_INC_URL_PATH . '/admin' );

define( 'QI_BLOCKS_ACTIVATED_TRANSIENT', 'qi_blocks_plugin_activated' );
define( 'QI_BLOCKS_DISABLED_BLOCKS', 'qi_blocks_disabled_blocks' );
