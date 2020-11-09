<?php
namespace platonov;
use core\EquationInterface;

class Sqr extends Line implements EquationInterface
{
    function solve($a, $b, $c)
    {
        $d = $this->discriminant($a, $b, $c);
        if ($a == 0) {
            return $this->x = $this->equation($b, $c);
        }
        if ($d < 0) {
            $this->x = false;
            return false;
        }
        $d = sqrt($d);
        $x1 = ((-$b) + $d) / (2 * $a);
        $x2 = ((-$b) - $d) / (2 * $a);
        if ($x1 == $x2) {
            $this->x = $x1;
            return $x1;
        } else {
            $this->x = array($x1, $x2);
            return array($x1, $x2);
        }
    }

    protected function discriminant($a, $b, $c)
    {
        $d = $b * $b - 4 * $a * $c;
        return $d;
    }

    /**
     * @param float $a
     * @param float $b
     * @param float $c
     *
     * @return array
     */
    public function solve($a, $b, $c)
    {
        // TODO: Implement solve() method.
    }
}
?>