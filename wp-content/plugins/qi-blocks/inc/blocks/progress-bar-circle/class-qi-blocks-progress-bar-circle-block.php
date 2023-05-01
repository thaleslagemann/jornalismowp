<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Qi_Blocks_Progress_Bar_Circle_Block' ) ) {
	class Qi_Blocks_Progress_Bar_Circle_Block extends Qi_Blocks_Blocks {
		private static $instance;

		public function __construct() {
			// Set block data
			$this->set_block_name( 'progress-bar-circle' );
			$this->set_block_title( esc_html__( 'Radial Progress Bar', 'qi-blocks' ) );
			$this->set_block_subcategory( esc_html__( 'Infographics', 'qi-blocks' ) );
			$this->set_block_demo_url( 'https://qodeinteractive.com/qi-blocks-for-gutenberg/radial-progress-bar/' );
			$this->set_block_documentation( 'https://qodeinteractive.com/qi-blocks-for-gutenberg/documentation/#radial_progress_bar' );

			// Set block 3rd party scripts
			$this->set_block_3rd_party_scripts(
				array(
					'progress-bar' => array(
						'block_name' => 'progress-bar-circle',
						'url'        => QI_BLOCKS_INC_URL_PATH . '/blocks/progress-bar-circle/assets/js/plugins/progressbar.min.js',
					),
				)
			);

			parent::__construct();
		}

		/**
		 * @return Qi_Blocks_Progress_Bar_Circle_Block
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}
	}

	Qi_Blocks_Progress_Bar_Circle_Block::get_instance();
}
