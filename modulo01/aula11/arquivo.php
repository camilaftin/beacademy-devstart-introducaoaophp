<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'camila'.PHP_EOL);
fwrite($arquivo, 'leleco'.PHP_EOL);
fwrite($arquivo, 'menino'.PHP_EOL);

fclose($arquivo);