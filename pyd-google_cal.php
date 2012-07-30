<?php
    /*
     Plugin Name: Google Calendar Shortcode
     Plugin URI: http://gyura.com
     Description: Creates a shortcode for dropping in a Google Calendar.  The plugin uses your WordPress Timezone by default.  Example:  [pydgooglecal account="michael@pokayoke.co" width="800" height="600"].
     Version: 1.1
     Author: Michael Gyura
     Author URI: http://gyura.com
    */

    /*-----------------------------------------------------------------------------------*/
    /* Bring in required files and scripts */
    /*-----------------------------------------------------------------------------------*/

    require_once( dirname( __FILE__ ) . '/includes/pyd-cal_shortcode.php' );