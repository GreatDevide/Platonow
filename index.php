<?php

class a{
    
}

class b extends a
{
    public function __construct($b)
    {
        $this->b = $b;
        
    }
    
    protected $b;  
}


class c extends b
{
    public function __construct($b,$c)
    {
        $this->c = $c;
        parent::__construct($b);
    }
    protected $c;
    
}

$a1 = new a ();
$b2 = new b ($a1);
$c3 = new c ($a1,$b2);
$b4 = new b ($a1);
$c5 = new c ($b4,$c3);

?>