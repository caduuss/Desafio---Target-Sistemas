<?php

$string = "Aqui uma string";


$string_invertida = "";


for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $string_invertida .= $string[$i];
}


echo "A string invertida é: $string_invertida";
?>
