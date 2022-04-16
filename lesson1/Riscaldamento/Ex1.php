<?php
echo "<p>1. Printing out words</p>";
// scrivere il codice che stampa la stringa "Hello world!"
echo "Hello World!";

// dichiarare una variabile $a ed assegnare il valore 5; dichiarare una variabile $b ed assegnare il valore 10. Stampare i valori delle due variabili premettando al valore una etichetta: "la variabile x vale: " dove x sta ad indicare il nome della variabile
$a = 5;
$b = 10;
$x = $a + $b;

echo "<p>2. Values</p>";
echo "la variabile a vale:" .$a ."<br>";
echo "la variabile b vale:" .$b. "<br>";

echo "<p>3. Basic Operations</p>";
echo "la somma di a e b vale:" .$x ."<br>";
echo "la differenza vale:" .$a - $b ."<br>";
echo "il prodotto vale:" .$a * $b ."<br>";
echo "divisione vale:" .$a/$b ."<br>";

echo "<p>4. Date</p>";
echo " oggi è " . date ('d/m/y'). "<br>";
echo " oggi è " . date ('y-m-d') ."<br>";
echo " oggi è " . date ('l')."<br>";
echo " the time is " .date ('H:i:s')."<br>" ;

echo "<p>5. Regions</p>";
 $town = "Torino";
 $region = "Piemonte";
echo $town ." è il capoluogo delle regione " . $region ."<br>";

$messaggio = $town ." è il capoluogo delle regione ". $region;
echo $messaggio;

echo "<p>6. IVA CALC </p>";
$IVA = 22;
$costo = 40;
$costo_ivato = ($IVA /100 * $costo) + $costo;
$total = $costo_ivato;

echo "Il prodotto costa ". $costo. " per un totale di " . $total. '<br>';

