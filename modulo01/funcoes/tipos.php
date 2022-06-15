<?php

declare(strict_types=1);

function soma(float $n1, float $n2): float
{
  return $n1 + $n2;
}

echo soma (6.75, 20);

function welcome(string $nome): string
{
  return "Bem-vindo {$nome}";
}

echo PHP_EOL;

echo welcome('Camila');
