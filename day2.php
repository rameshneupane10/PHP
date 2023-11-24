<?php
$a="abc";
$b=30;
function arr()                      //function
{
$array=['apple','orange','grapes'];     //indexed array
echo "$array[0]<br>" ; //prints a single element

$array2=['fruit1'=>'apple','fruit2'=>'orange','fruit3'=>'grapes'];  //Associative Array in which the array iS
print_r($array2);
}
arr();              //calling the function
?>