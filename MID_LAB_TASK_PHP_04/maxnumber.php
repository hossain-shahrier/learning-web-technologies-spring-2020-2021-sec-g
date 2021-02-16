<?php
$number1 = 2;
$number2 = 3;
$number3 = 1;

if($number3 >$number2 && $number3 >$number1 ){
    echo "Largest Number is : " .$number3;
}
else if($number2 > $number1 && $number2 >$number3 ){
    echo "Largest Number is : ".$number2;
}
else {
    echo "Largest Number is : ".$number1;
}
?>