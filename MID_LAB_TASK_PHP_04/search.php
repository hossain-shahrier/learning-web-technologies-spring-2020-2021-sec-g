<?php 
$array = array(1,2,3,4,5,6,7,8,9);
for ($i=0; $i <count($array); $i++) { 
    if ($array[$i] == 2) {
        echo 2 ." is in " .$i ." index";
    }
}

?>