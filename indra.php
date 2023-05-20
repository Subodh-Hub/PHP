<?php
$name=[1,2,3,4];
echo count($name);
// echo "<pre>";
// print_r($name);

$arr = [
   ['name' => 'indra', 'address'=>'ktm','rollno'=> 1],
   ['name' => 'subodh', 'address'=>'salyan','rollno'=> 2],
   ['name' => 'inra', 'address'=>'ktmdang','rollno'=> 3],
   ['name' => 'tette', 'address'=>'npj','rollno'=> 4],
   
];

$onearr =[
    'name' => 'test',
    'address' => 'test',
    'rollno' => 5
];

function test(){
    return "test";
}


echo "<pre>";
print_r(test());

// class main{
//     public $tets = 1;
//     function ram ($test){
//          echo $test;
//     }

// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>address</th>
            <th>rollno</th>
        </tr>
        <?php foreach($arr as $val): ?>
            <tr>
                <td><?= $val['name']; ?></td>
                <td><?= $val['address']; ?></td>
                <td><?= $val['rollno']; ?></td>

            </tr>   
        <?php endforeach; ?>
    </table>
</body>
</html>