<?php
echo "Welcome to multidimensional array.<br>";
//creating 2 dimensional array
    $student = array(
                        array(2,5,7,8),
                        array(1,2,3,1),
                        array(4,5,0,1)
    );
    echo count($student[0]);
// echo $student[0][3];
// echo var_dump($student);
//printing the content of 2 dimensional array                               
// echo $student[0][3];
// for($i=0 ; $i < count($student) ; $i++){
//     echo var_dump($student);
//     echo "<br>";
// }
// 
// for($i=0 ; $i < count($student) ; $i++){
// for($j=0 ; $j < count($student[$i]) ; $j++){
//     echo $student[$i][$j];
//     echo " ";
// }
// echo "<br>";
// }
?>