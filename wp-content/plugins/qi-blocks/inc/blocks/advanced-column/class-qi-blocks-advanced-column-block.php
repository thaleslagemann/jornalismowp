<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Qi_Blocks_Advanced_Column_Block' ) ) {
	class Qi_Blocks_Advanced_Column_Block extends Qi_Blocks_Blocks {
		private static $instance;

		public function __construct() {
			// Set block name
			$this->set_block_name( 'advanced-column' );

			parent::__construct();
		}

		/**
		 * @return Qi_Blocks_Advanced_Column_Block
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}
	}

	Qi_Blocks_Advanced_Column_Block::get_instance();
}
