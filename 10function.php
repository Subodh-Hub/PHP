<?php
    echo"Welcome to php function<br>";

    function processMarks($marksArr){
        $sum=0;
        foreach($marksArr as $value){
            $sum += $value;
        }
        return $sum;    
    }
    $rohan=[20,30,40,30,50];
    $sumMarks = processMarks($rohan);//function call-arguement $rohan
    echo"Total marks scored out of 250 is $sumMarks<br>";

    $subodh=[50,49,48,47,49];
    $totalMarksSubodh=processMarks($subodh);
    echo("The total marks obtained by subodh out of 250 is: ".$totalMarksSubodh);
?>