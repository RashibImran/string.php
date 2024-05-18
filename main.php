<?php

/* 
$countries=[
    'Bangladesh'=>"Dhaka",
    'India'=>"New Delhi",
    'Japan'=>"Tokeyo",
    'America'=>"New York",
    'China'=>"Beiging",
    'Korea'=>"Seoul",
    'Bangladesh1'=>"Dhaka1",
    'Bangladesh2'=>"Dhaka2",
    'Bangladesh3'=>"Dhaka3",
];


foreach($countries as $country=>$capital){
    Echo " The capital of $country is $capital"."\n";
} */

/* $mathmarks=[
    'Jhon'=>85,
    'Sarah'=>60,
    'Kabir'=>65,
    'Imran'=>85,
    'Rahim'=>90,
    'Karim'=>55,
    'Apu'=>60,
    'Jalil'=>30,
];


function calculateMarks($marks){
    if($marks>=85){
        return "A+";
    }else if($marks>=70){
        return "A";
    }else if($marks>=60){
        return "A-";
    }else if($marks>=50){
        return "B";
    }else if($marks>=40){
        return "C";
    }else if($marks>=33){
        return "D";
    }else if($marks<33){
        return "F";
    }

}

foreach($mathmarks as $students=>$mark){
    $grade=calculateMarks($mark);
    echo "$students gets $mark marks and grade is $grade"."\n";

} */


$studentMarks=[
    'Jhon'=>[
    'Math'=>70,
    'English'=>65,
    'Bangla'=>80,
    'Science'=>50
],
    'Sarah'=>[
    'Math'=>80,
    'English'=>70,
    'Bangla'=>90,
    'Science'=>40
    ]
];


foreach($studentMarks as $students=>$subjects){
    $totalMarks=0;
    foreach($subjects as $subject=>$marks){
        
        $totalMarks +=$marks; 
        //echo "$students got $marks marks in $subject"."\n"; 
        
    }
    //echo "$students got total $totalMarks marks"."\n";
     $average = $totalMarks / count($subjects);
    echo "$students got avarage $average marks"."\n";

}
