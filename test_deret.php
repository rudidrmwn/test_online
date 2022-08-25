<?php

function deretValueBesarKecil($arrBilangan){
   $arrayCount = count($arrBilangan);  // no need to evaluate the count on every iteration of the for loop

    for($i=0; $i < $arrayCount - 1; $i++)
    {
        for($j = $i+1; $j < $arrayCount; $j++)
        {
            if($arrBilangan[$j] > $arrBilangan[$i])
            {
                $temp = $arrBilangan[$i];
                $arrBilangan[$i] = $arrBilangan[$j];
                $arrBilangan[$j] = $temp;
            }
        }
    }

    return print_r($arrBilangan);
}
$bilangan = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);  
echo deretValueBesarKecil($bilangan);
?>
