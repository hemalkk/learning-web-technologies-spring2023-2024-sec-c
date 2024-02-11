<?php
// VAT
$vat = 15;

// Product price=365
$pp = 365;

//Calculate how much VAT needs to be paid.
$payVat = ($pp / 100) * $vat;

//The total price with VAT.
$tPrice = $pp + $payVat;


echo $tPrice;

?>