<?php 
$shape = array("*","*","*");
    for ($i=0; $i <count($shape) ; $i++) { 
        echo $shape[$i]."<br>";
        for ($j=0; $j <$i+1 ; $j++) { 
            echo $shape[$j];
        }
    }
?>