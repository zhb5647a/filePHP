<?php

function tester($age){
    if($age>=6 AND $age<=7){
        echo 'est Poussin';
    }
    else if($age>=8 AND $age<=9){
        echo 'est Pupille';
    }
    else if($age>=10 AND $age<=11){
        echo 'est Minime';
    }
    else if($age>=12){
        echo 'est Cadet';
    }
    else{
        echo 'est trop jeune';
    }
}
tester(14);
//version switch case
function switchTest($age){
    switch($age){
        case $age>=6 AND $age<=7:
            echo 'est Poussin';
            break;
        case $age>=8 AND $age<=9:
            echo 'est Pupille';
            break;
        case $age>=10 AND $age<=11:
            echo 'est Minime';
            break;
        case $age>=12: 
            echo 'est Cadet';
            break;
        default:
            echo 'est trop jeune';
            break;
        }
    }
function switchTestV2($age){
    switch($age){
        case $age>=12:
            echo 'est Cadet';
            break;
        case $age>=10:
            echo 'est Minime';
            break;
        case $age>=8:
            echo 'est Pupille';
            break;
        case $age>=6: 
            echo 'est Poussin';
            break;
        default:
            echo 'est trop jeune';
            break;
        }
    }

    






?>