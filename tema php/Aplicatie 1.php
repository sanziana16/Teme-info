<?php 
$n = 105; //numarul dat
$col = 5; // numarul coloanelor
$nrSol = 0; //numarul solutiilor
?>
<div style="width:50%; margin: 0 auto; text-align:center;">
<table border="1" style="margin:0 auto;">
 <?php
    for($i=2; $i<=$n; $i++){
         $ePrim = TRUE;
            for($div=2; $div <=(int)($i/2) && $ePrim; $div++)
if($i % $div == 0)
$ePrim = FALSE;
if($ePrim){
 $nrSol++;
if ($nrSol % $col == 1)
 echo '<tr>';
echo '<td align ="right">'. $i. '</td>';
if ($nrSol%$col == 0)
echo '</tr>';
}
}
        //completare linie cu celule vide   
        if ($nrSol % $col > 0){
 for($i=1; $i<=$col-$nrSol % $col;$i++)
    echo '<td bgcolor="gray"> </td>';
    echo '</tr>';
        }
    ?> 
    </table>
    <?php 
    if ($nrSol > 0)
echo '<b> Am gasit '. $nrSol. ' solutii! </b>';
else
 echo '<b>Nu exista solutii! </b';
?>
</div>