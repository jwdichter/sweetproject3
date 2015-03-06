<?php
    date_default_timezone_set("America/New_York");
    $hour = date("G");
    if($hour>=5 && $hour<11){
        $image = "morning";
    } else if($hour>=11 && $hour<16){
        $image = "afternoon";
    } else if($hour>=16 && $hour<20){
        $image = "evening";
    } else {
        $image = "night";
    }
?>