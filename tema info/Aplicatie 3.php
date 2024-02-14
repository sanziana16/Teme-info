<?php

function afiseaza_mesaj($cod_mesaj, $tip_mesaj) {

    $mesaje = array(
        1 => "Nu aveți dreptul de acces!",
    );

    if (isset($mesaje[$cod_mesaj])) 
       
      <table>
            <tr>
                <td><i class='fas fa-exclamation-triangle'></i></td> 
                <td>{$mesaje[$cod_mesaj]}</td>
            </tr>
        </table>
       
       
        echo $cod_html;
    } else {
        echo "Cod de mesaj invalid!";
    }


afiseaza_mesaj(1, "eroare");

?>