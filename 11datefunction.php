<?php
    echo "This is all about date function<br>";
    //date function $variablename=date*=(value)
    /*some value of date:
    l-for day
    D-for short representation of day
    Y-for year
    and there are lots of date just go and search in php documentation manual
    */
    $d=date("l");
    echo "Today day is $d";
    echo "<br>";

    $d=date("D");
    echo "today is $d";
    echo "<br>";

    $d=date("d");
    echo "Today is $d";
    echo "<br>";
    
    $d=date("dS F Y g:i A");
    echo "Today is $d";
    echo "<br>";
    $year=date("Y");
    echo "Copyright $year | All right reserved";

?>