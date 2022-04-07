<?php
echo "<h3> 1</h3>";
echo "Hello world!";

echo "<h3> 2. values</h3>";
$a = 5;
$b =10;

echo "la variabile a vale: " .$a ."<br>";
echo "la variabile a vale: " .$a;


echo "<h3> 3. Arithmetics</h3>";
$somma = $a + $b;
$diff = $a - $b;
$prod = $a * $b;
$div = $a / $b;

echo "la somma delle variabili a e b vale: " .$somma ."<br>";
echo "la differenza delle variabili a e b vale: " .$diff ."<br>";
echo "il prodotto delle variabili a e b vale: " .$prod ."<br>";
echo "il rapporto (divisione) vale: " .$div ."<br>";

echo "<h3> 4. Date function </h3>";
echo date_default_timezone_set("Europe/Berlin");
echo date ("j/n/Y") ."<br>";
echo date ("Y-m-d") ."<br>";
echo date ("H:i:s");

echo "<h3> 5. Sentences </h3>";
$town = "Torino";
$region = "Piemonte";
echo $town . " è il capoluogo delle regione " .$region . "." ."<br>";

$messaggio = $town . " è il capoluogo delle regione " .$region . ".";
echo $messaggio;

echo "<h3> 6. IVA </h3>";
define("IVA" , 22);
$costo =40;
$Costo_ivato = IVA/100 * $costo ;
$total = $Costo_ivato + $costo;
echo "Il prodotto costa " . $costo . " per un totale di " . $total;

echo "<h3> 7. Magic Constant </h3>";
echo __DIR__ ."<br>";
echo __FILE__  ."<br>";
echo  __LINE__ ."<br>";

echo "<h3> 8. Incremento ++ </h3>";
$i =12;
$i++;
echo $i."<br>";
// echo ++$i;

echo "<h3> 9. Area </h3>";
$area_quadrato = 900;
echo "la radice quadrata vale: " . sqrt($area_quadrato);

echo "<h3> 10. Run Time; Gettype </h3>";

$i=1;
echo $i ."<br>";
echo gettype($i)."<br>";
//integer

$i= $i .$i;
echo $i ."<br>";
echo gettype($i) ."<br>";
  //string

 $i--;
 echo $i ."<br>";
 echo gettype($i);
//integer

 echo "<h3> END... </h3>";
 
