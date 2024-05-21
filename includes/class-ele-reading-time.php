<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Ele_Reading_Time {

    public function __construct() {
        add_action( 'elementor/dynamic_tags/register', [ $this, 'register_tags' ] );
        add_action( 'elementor/widgets/widgets_registered', [ $this, 'init' ] );
    }

    public function init() {
        if ( did_action( 'elementor/loaded' ) ) {
            require_once( plugin_dir_path( __FILE__ ) . 'tags/class-reading-time-tag.php' );
        }
    }

    public function register_tags( $dynamic_tags ) {
        $dynamic_tags->register_tag( 'Reading_Time_Tag' );
    }

}

new Ele_Reading_Time();
