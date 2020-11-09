<?php

use platonov\MyLog;
use platonov\PlatonovException;
use platonov\QuEquation;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "platonov/MyLog.php";
include "platonov/Equation.php";
include "platonov/QuEquation.php";
include "platonov/PlatonovException.php";

ini_set("display_errors", 1);
error_reporting (-1);

try{
    $b = new QuEquation();
    $values = array();

    for($i=1; $i<4; $i++){
        echo "Введите ".$i." аргумент: ";
        $values[]=readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    MyLog::log("Введено уравнение ".$va."x^2 + ".$vb."x + ".$vc." = 0");
    $x = $b->solve($va,$vb,$vc);

    $str = implode(", ", $x);
    MyLog::log("Корни уравнения: ".$str);
}catch(PlatonovException $e){
    MyLog::log($e->getMessage());
}

MyLog::write();

?>