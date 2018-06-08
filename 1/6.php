<?php

echo "<table border='3'>";

for ($i=1; $i<=10; $i++) {
    echo '<tr>';
    for ($j=1; $j<=10; $j++) {
        if ((($i*$j)%2)!==0) {
            echo '<td align="center">['. $i*$j .']</td>';
        
        }
        elseif ($i%2===0 and $j%2===0) {
            echo '<td align="center">('. $i*$j .')</td>';
        
        }
        else {
            echo '<td align="center">'. $i*$j .'</td>';
        
        }
    
    }
    
    echo '</tr>';

}

echo '</table>';
