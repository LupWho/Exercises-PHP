<?php

echo "aritmetic operators
";

$a = 10 + 5; // Atribui o valor 15 à variável $a
$b = 10 - 5; // Atribui o valor 5 à variável $b
$c = 10 * 5; // Atribui o valor 50 à variável $c
$d = 10 / 5; // Atribui o valor 2 à variável $d
$e = 10 % 3; // Atribui o valor 1 à variável $e (o resto da divisão de 10 por 3 é 1)
$f = 10 ** 3; // Atribui o valor 1000 à variável $f (10 elevado a 3)

echo $a . PHP_EOL, $b . PHP_EOL, $c . PHP_EOL, $d . PHP_EOL, $e . PHP_EOL, $f . PHP_EOL;

echo "
Comparison operators
";

$a = 10; // Atribui o valor 10 à variável $a
$b = 5; // Atribui o valor 5 à variável $b
$c = 30; // Atribui o valor 30 à variável $c

$igual = $b == $a; // Nesse caso, a variável $igual ficará com o valor *false*, pois o valor de $b não é igual ao valor de $a.
$diferente = $b != $c; // A variável $diferente ficará com o valor *true*, pois o valor de $b é diferente do valor de $c.
$maior = $b > $a; // A variável maior ficará com o valor *false*, pois o valor de $b é menor que o valor de $a.
$menorIgual = $b <= $c; // A variável $menorIgual ficará com o valor *true*, pois o valor de $b é menor que o valor de $c.

echo $igual . PHP_EOL, $diferente . PHP_EOL, $maior . PHP_EOL, $menorIgual . PHP_EOL;


$a = '1';
$b = 1;

$igual = $a == $b; // A variável $igual será *true*, pois o PHP vai realizar algumas conversões de tipos
$identico = $a === $b; // A variável $identico será *false*, pois os tipos são diferentes.
$diferente = $a != $b; // A variável $diferente será *false*, pois o PHP vai realizar a conversão de tipo e comparar apenas o valor, e 1 não é diferente de 1.
$naoIdentico = $a !== $b; // A variável $naoIdentico será *true*, pois o texto '1' é não é idêntico ao número 1, ou seja, os tipos são diferentes.

echo $igual . PHP_EOL, $identico . PHP_EOL , $diferente . PHP_EOL, $naoIdentico . PHP_EOL;

echo "
Logic Operators
";

$a = true;
$b = false;
$comparacao = $a && $b;  // O resultado será o booleano *false*, já que $b é falso.

echo $comparacao . PHP_EOL;

$a = true;
$b = false;
$comparacao = $a || $b; // O resultado será o booleano *true*, já que (pelo menos) o $a é verdadeiro.

echo $comparacao . PHP_EOL;

$a = true;
$negacao = !$a; // O resultado será *false*

echo $negacao . PHP_EOL;

echo "
Increment and Decrement Operators
";

$num = 5;
$resultado = ++$num; // num é incrementado para 6 e depois atribuído ao resultado
echo $num; // Exibe 6
echo $resultado; // Exibe 6

$num = 5;
$resultado = $num++; // $num é atribuído primeiramente à variável $resultado e depois incrementado para 6
echo $num; // Exibe 6
echo $resultado; // Exibe 5