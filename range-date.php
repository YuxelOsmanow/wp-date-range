<?php
function get_date_range( $start_date, $end_date ) {
    $date = '';

    $start_date_year = date( 'Y', strtotime( $start_date ) );
    $end_date_year = date( 'Y', strtotime( $end_date ) );

    $start_date_month = date( 'M', strtotime( $start_date ) );
    $end_date_month = date( 'M', strtotime( $end_date ) );

    $start_date_day = date( 'j', strtotime( $start_date ) );
    $end_date_day = date( 'j', strtotime( $end_date ) );

    if( $start_date_year == $end_date_year ) {

        if( $start_date_month == $end_date_month ) {
            if( $start_date_day == $end_date_day ) {
                $days = $start_date_day;
            } else {
                $days = $start_date_day . '-' . $end_date_day;
            }
            $date = $start_date_month . ' ' . $days . ' ' . $start_date_year;
        } else {
            $date = $start_date_month . ' ' . $start_date_day . ' - ' . $end_date_month . ' ' . $end_date_day . ' ' . $start_date_year;
        }

    } else {
        $date = $start_date_month . ' ' . $start_date_day . ' ' . $start_date_year . ' - ' . $end_date_month . ' ' . $end_date_day . ' ' . $end_date_year;
    }

    return $date;
}
