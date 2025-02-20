<?php
$name="programer";
echo "Hello, $name","<br>","<br>";
//---------------

$x=5;
$y=10;
echo "X+Y= ",$x+$y,"<br>";
echo "X*Y= ",$x*$y,"<br>";
echo "X-Y= ",$x-$y,"<br>","<br>";

//--------------

$A=1;
$B=2;
$C=3;
$D=4;
$X=($A*$B)-($C*$D);
echo "Difference = ",$X,"<br>","<br>";


//----------------

$N=13;
$M=12;
$lastDigitN=$N % 10;
$lastDigitM=$M % 10;
echo "$N + $M = ",$lastDigitN + $lastDigitM,"<br>","<br>" ; 

//------------------
$X=4569;
$firstDigit = (int)strval($X)[0];
if ($firstDigit%2==0) {
    echo "Even","<br>";
} else {
    echo "Odd","<br>";
}


 //----------------------------------
 echo "<br>";
 $a=22;
 $b=10;
 $k=2;
 if ($a % $k == 0 && $b % $k == 0) {
    echo "Both","<br>";
} elseif ($a % $k == 0) {
    echo "Memo","<br>";
} elseif ($b % $k == 0) {
    echo "Momo","<br>";
} else {
    echo "No One ","<br>";
}

//-------------------------
echo "<br>";
$N=24;
$firstDigit = intval($N / 10);
$secondDigit = $N % 10;
if ($firstDigit != 0 && $secondDigit != 0 && ($firstDigit % $secondDigit == 0 || $secondDigit % $firstDigit == 0)) {
    echo "YES\n";
} else {
    echo "NO\n";
}

?>
 
