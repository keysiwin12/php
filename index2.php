<?php
    $semana = ['lunes' ,
    'Martes' ,
    'Miercoes',
    'Jueves' ,
    'Viernes',
];

    echo $semana[4];


    $planetas = []; // crea un arreglo vacio

    $planetas[] = 'Marte';  //agrega elemenots al arreglo
    $planetas[] = 'Tierra';
    $planetas[] = 'Venus';
    echo $planetas[0];

    $planetas[2] = 'Saturno'; // modifica el arreglo

    echo $planetas[2];

    unset($planetas[1]);    // eliminda datos de un arreglo

    

?>
