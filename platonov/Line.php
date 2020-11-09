<?php
namespace platonov;
class Line implements EquationInterface
{
    protected $x;

    function equation($a, $b)
    {
        if ($a == 0) {
            return false;
        }
        $x = -$b / $a;
        $this->x = $x;
        return $x;
    }
}

?>