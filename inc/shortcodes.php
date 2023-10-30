<?php
function currentYearShortcode_ruggedrobotics() {
    return date('Y');
}
add_shortcode( 'Y', 'currentYearShortcode_ruggedrobotics' );