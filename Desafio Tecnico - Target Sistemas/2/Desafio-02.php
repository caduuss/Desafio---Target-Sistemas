<?php
function fibonacci($numero) {
    $sequencia_fib = [0, 1];
    while (end($sequencia_fib) < $numero) {
        $proximo_valor = end($sequencia_fib) + prev($sequencia_fib);
        $sequencia_fib[] = $proximo_valor;
        next($sequencia_fib); 
    }
    return $sequencia_fib;
}

function h_numero_fibonacci($num) {
    $sequencia_fib = fibonacci($num);
    if (in_array($num, $sequencia_fib)) {
        return "O número $num pertence à sequência de Fibonacci.";
    } else {
        return "O número $num não pertence à sequência de Fibonacci.";
    }
}


echo "Informe um número: ";
$numero = trim(fgets(STDIN));
$resultado = h_numero_fibonacci((int)$numero);
echo $resultado . PHP_EOL;
?>
