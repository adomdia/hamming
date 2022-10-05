<?php

function hamming($cad1, $cad2){
    $diferencias = [];
    $x = -1;
    $y = 0;
    $lista = ["A", "C", "T", "G"];
    if (strlen($cad1) == strlen($cad2)) {
        for ($i = 0; $i < strlen($cad1); $i++){
            if ((in_array($cad1[$i], $lista))== true){
                if ((in_array($cad2[$i], $lista))== true){
                    if ($cad1[$i] != $cad2[$i]){
                        $diferencias[] = ($i . "-" . $cad1[$i] . "/" . $cad2[$i]);
                    } else {
                        $x += 1;
                    }
                } else {
                    ?> <p>El elemento "<?= $cad2[$i] ?>" de la cadena 2, en la posición <?= $i ?>, no se corresponde con los requeridos.</p> <?php
                    $y = 1;
                }
            } else{
                ?> <p>El elemento "<?= $cad1[$i] ?>" de la cadena 1, en la posición <?= $i ?>, no se corresponde con los requeridos.</p> <?php
                $y = 1;
            }
        }
    if ($y == 0){
        if (strlen($cad1) == ($x + 1)){
            ?> <p>Las cadenas son iguales.</p><?php
        } else {
            ?> <p>Hay <?= count($diferencias) ?> direfencias.</p> 
            <p>Las diferencias son:</p><?php
            for($i = 0;$i< count($diferencias); $i ++){
                ?><p><?=$diferencias[$i]?></p><?php
            }
        }
        }
    }
}