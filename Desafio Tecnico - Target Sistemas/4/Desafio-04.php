<?php
$sp = 67836.43;
$rj = 36678.66;
$mg = 29229.88;
$es = 27165.48;
$outros = 19849.53;


$total = $sp + $rj + $mg + $es + $outros;


echo "SP: " . number_format(($sp / $total) * 100, 2) . "%\n";
echo "RJ: " . number_format(($rj / $total) * 100, 2) . "%\n";
echo "MG: " . number_format(($mg / $total) * 100, 2) . "%\n";
echo "ES: " . number_format(($es / $total) * 100, 2) . "%\n";
echo "Outros: " . number_format(($outros / $total) * 100,2)."%\n";
?>

