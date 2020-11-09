<?php

include "core\EquationInterface.php";
include "core\LogAbstract.php";
include "core\LogInterface.php";
include "platonov\MyLog.php";
include "platonov\Line.php";
include "platonov\Sqr.php";

\platonov\MyLog::log("qwerty");
\platonov\MyLog::write();

$try= new\platonow\Sqr();
var_dump($try->solve(0,1,1));