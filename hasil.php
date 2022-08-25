<?php
$n = isset($_POST['n']) ? $_POST['n'] : '';
for($i=1;$i<=$_POST['n'];$i++) 
    { 
        for($j=1;$j<=$i;$j++) { 
            echo $j; 
        } 
        echo "<br>"; 
    } "<br>";
?>