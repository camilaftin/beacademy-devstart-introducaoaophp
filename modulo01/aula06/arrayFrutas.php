<?php

$frutas = [
  'Laranja',
  'Banana',
  'Abacaxi',
  'Morango',

];

$frutas [100] = 'melancia';

echo '<ul>';

foreach($frutas as $cadaFruta){
  echo "<li>{$cadaFruta}</li>";
}


/*for($i = 0; $i < 3;$i++){
  echo "<li>{$frutas[$i]}</li>";
}*/
echo '</ul>';