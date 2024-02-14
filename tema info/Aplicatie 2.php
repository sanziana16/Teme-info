<?php
    $val1 = 6000;
    $val2 = 3000;
    $val3 = 4000;
    //calculare procent corespunzator fiecarei valori
    $suma = $val1 + $val2 + $val3;
    $proc1 = ($val1 *100)/$suma;
    $proc2 = ($val2 *100)/$suma;
    $proc3 = ($val3 *100)/$suma;
    $lg1 = (int)$proc1*5;
    $lg2 = (int)$proc2*5;
    $lg3 = (int)$proc3*5;
?>
<h1>Diagrama</h1>
<table border="1" BorderColor="black" CellSpacing="0">
    <tr>
        <td>
        <?php 
            echo '<table><tr><td BgColor="red" width="'. $lg1 . '">'. number_format($proc1,2).'%</td></tr></table>'; 
            echo '<table><tr><td BgColor="green" width="'. $lg2 . '">'. number_format($proc2,2).'%</td></tr></table>'; 
            echo '<table><tr><td BgColor="blue" width="'. $lg3 . '">'. number_format($proc3,2).'%</td></tr></table>';                     
	    ?>
        </td>
    </tr>
</table>