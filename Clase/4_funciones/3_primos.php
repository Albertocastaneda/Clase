<?php
$num = 100;
echo("<ol>");

for ($i=1; $i <=$num ; $i++) { 
    if (numPrimo($i)) {
        echo("<li>Primo</li>");
    }else{
        echo("<li>No Primo</li>");
    }
}

echo("</ol>");

function numPrimo($num){
    for ($i=2; $i <$num ; $i++) { 
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

