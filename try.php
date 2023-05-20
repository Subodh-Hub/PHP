<?php
    //  function subodh($x,$y)
    //  //function declaration named as subodh with 2 arguement x and y
    //  {
    //     $sum=$x+$y;
    // return $sum;     
    // }
    // $a=10;
    // $b=6;
    // $add=subodh($a,$b);
    // //function call and it is returning me sum value
    // //value of a and b are passed to the arguement
    //  echo $add;

        // $x=5;
        // $y=9;
      

        // function apple($a,$b){
        //     $sum=$a+$b;
        //     echo $sum;
        // }
        //   apple($x,$y);

        // function loop($i){
        //     while(1<=$i){
        //         echo "Subodh";
        //         $i--;
        //     }
        // }
        // loop(3)

        // $A=array(1,2,3,4,5);
        
        // for($i=0;$i<=$value;$i++){
        //     echo $A[$i];
        // }

        // function name($fname){
        //     echo " $fname rijal<br>";
        // }
        // name("Subodh");
        // name("Keshab");
        // name("Babita");
        // name("Sugarika");

        // function Subodh($x,$y){
        //     return $x+$y;
        // }
        // echo Subodh(2,3);
$arr=array(
    array('name'=>'Subodh Rijal','address'=>'Dallu','age'=>21),
    array('name'=>'Ram Rijal','address'=>'Dallu','age'=>21),
    array('name'=>'Hari Rijal','address'=>'Dallu','age'=>21),
);


for($i=0;$i<count($arr);$i++)
{
    foreach ($arr as $key => $value){
        echo("hello $key is $value <br>" );
    }
}

?>