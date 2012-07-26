<?php
    /**
     * User: mgyura
     * Date: 7/26/12
     */

    /*-----------------------------------------------------------------------------------*/
    /* Create shortcode for Google Map Directions */
    /* Shortcode [pydgooglecal] */
    /*-----------------------------------------------------------------------------------*/


    function pyd_maps_shortcode( $atts ) {

        $pyd_timezone = get_option( 'timezone_string' );

        extract(
            shortcode_atts(
                array(
                     'width'          => '800',
                     'height'         => '600',
                     'account'        => '',
                     'timezone'       => $pyd_timezone,
                ), $atts
            )
        );
        $pyd_encode_account  = urlencode( $account );
        $pyd_encode_timezone = urlencode( $timezone );

        ?>

    <div class="PYDgoogleCal">
        <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showCalendars=0&amp;height=<?php echo $height; ?>&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=<?php echo $pyd_encode_account; ?>&amp;color=%232952A3&amp;ctz=<?php echo $pyd_encode_timezone; ?>" style=" border-width:0 " width="<?php echo $width; ?>" height="<?php echo $height; ?>" frameborder="0" scrolling="no"></iframe>
        </div>
    <?php
    }

    add_shortcode( 'pydgooglecal', 'pyd_maps_shortcode' );