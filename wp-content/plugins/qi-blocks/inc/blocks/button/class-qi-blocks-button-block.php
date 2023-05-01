<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Qi_Blocks_Button_Block' ) ) {
	class Qi_Blocks_Button_Block extends Qi_Blocks_Blocks {
		private static $instance;

		public function __construct() {
			// Set block data
			$this->set_block_name( 'button' );
			$this->set_block_title( esc_html__( 'Button', 'qi-blocks' ) );
			$this->set_block_subcategory( esc_html__( 'Typography', 'qi-blocks' ) );
			$this->set_block_demo_url( 'https://qodeinteractive.com/qi-blocks-for-gutenberg/button/' );
			$this->set_block_documentation( 'https://qodeinteractive.com/qi-blocks-for-gutenberg/documentation/#button' );

			parent::__construct();
		}

		/**
		 * @return Qi_Blocks_Button_Block
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}
	}

	Qi_Blocks_Button_Block::get_instance();
}