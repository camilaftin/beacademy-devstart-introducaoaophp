<?php

$url = $_SERVER['REQUEST_URI'];

if($url === '/'){

  include 'telas/home.php';
  //echo '<h1>Pagina Inicial</h1>';
}else if($url === '/login'){
  echo '<h1>Pagina de login<h1>';
}else if($url === '/cadastro'){
  echo '<h1>Pagina de cadastro<h1>';
}else{
  echo '<h1>Pagina nao encontrada<h1>';
}