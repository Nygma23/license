<?php
    function remainingTime($date){
        $today= time();
        $expireDate= strtotime($date);
        return (int)$fark=($expireDate-$today)/60/60/24;
    }

function state($date) {
 


    $day=remainingTime($date);
    if ($day<=30) {

        return("danger");
    
    }

    elseif ($day>30 && $day<=45) {
        
        return ("warning");
    }

    elseif ($day>=45) {
        
        return ("success");
    }
   }    
?>