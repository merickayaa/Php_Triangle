<?php

function writetriangle($num){
    for($i=0;$i<=$num;$i++){    
        for($m=0;$m<=$i;$m++){
            echo 0;
        }
        echo "<br>";
    }
}

writetriangle(15);