<?php


$notasCursoA = [
  10,
  9,
  9.5,
  7,

];

$notasCursoB = [
  8,
  7,
  7.5,
  9,

];

function mediaNotas(array $notas): float
{
  //$total = array_sum($notas);
  //$quantidade = count($notas);
  /*foreach($notas as $cadaNota){
    $total += $cadaNota;
    $quantidade++;
  }*/

  return array_sum($notas)/count($notas);

}

echo mediaNotas($notasCursoA).PHP_EOL;
echo mediaNotas($notasCursoB).PHP_EOL;