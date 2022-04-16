<?php
echo "<p>8. Ciclo </p>";
$i = 12; 
echo $i++ .'<br>';
echo $i.'<br>';

echo "<p>9. Sqt </p>";
$area_quadrato = 900 ;
sqrt($area_quadrato);
echo "il quadrato ha area " . $area_quadrato ." e il suo lato calcolato con la radice quadrata vale " . sqrt(900) . '<br>';

echo "<p>10. Run Time </p>";

$i= 1;
echo gettype($i) .'<br>';

$i= $i . $i;
echo  $i;
echo gettype($i) .'<br>';

$i= 1;
echo  $i;
echo gettype($i) .'<br>';