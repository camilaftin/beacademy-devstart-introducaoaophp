<?php

$frutas = [
  'Laranja',
  'Banana',
  'Abacaxi',
];

//adicionando novas frutas
$frutas [3] = 'Maca';

$frutas[10] = 'Melancia';

$frutas[7] ='morango';

$frutas[] = 'tangerina';

//var_dump($frutas);
?>

<ul>
  <li><?php echo $frutas[0];?></li>
  <li><?php echo $frutas[1];?></li>
  <li><?php echo $frutas[2];?></li>
  <li><?php echo $frutas[3];?></li>
  <li><?php echo $frutas[4];?></li>
  <li><?php echo $frutas[5];?></li>
  <li><?php echo $frutas[6];?></li>
  <li><?php echo $frutas[7];?></li>
  <li><?php echo $frutas[8];?></li>
  <li><?php echo $frutas[9];?></li>
  <li><?php echo $frutas[10];?></li>
  
</ul>



