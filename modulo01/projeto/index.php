<?php

$url = explode('?',$_SERVER['REQUEST_URI']);

include 'telas/head.php';

include 'telas/menu.php';

include 'acoes.php';

match($url[0]){
  '/' => home(),
  '/login' => login(),
  '/cadastro' => cadastro(),
  '/listar' => listar(),
  '/relatorio' => relatorio(),
  '/excluir' => excluir(),
  '/editar' => editar(),
   default => pagina404(),
};


/*if($url === '/'){
  home();
  //include 'telas/home.php';
  
}else if($url === '/login'){
  login();
  //include 'telas/login.php';
  
}else if($url === '/cadastro'){
  cadastro();
  //include 'telas/cadastro.php';
  
}elseif ($url === '/listar'){
  listar();
  //include 'telas/listar.php';

}else{
  pagina404();
  //include 'telas/404.php';
 
}*/
include 'telas/footer.php';