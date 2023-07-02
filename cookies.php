<?php
// cookie = information about the user stored in a user web browser targeted advertisements,
//          browsing preferences, and other non sensitive data 
setcookie( "fav_food","pizza",time(86400*2),"/");//to set cookie
setcookie("fav_drink","hot_chocolate",time()-0,"/"); //to delete cookie
setcookie("fav_dessert","ice-cream",time()-0,"/");  
?>