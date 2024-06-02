<?php
    function staticScope()
    {
        static $a = 0;
        echo $a;
        $a++;
    }
    // Visestruko pozivanje funkcije
    staticScope();
    staticScope();
    staticScope();
?>