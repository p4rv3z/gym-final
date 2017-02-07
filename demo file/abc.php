<?php
$val = htmlspecialchars('<h1>hi</h1>');
echo $val ;
?>
<?php
        $birthdate = new DateTime('1994-04-28');
        $today   = new DateTime('today');
        $y = $birthdate->diff($today)->y;
        $m = $birthdate->diff($today)->m;
        $d = $birthdate->diff($today)->d;
        echo $y."y:".$m.'m:'.$d."d";
?>