<form action="" method="post">

  <input name="name" type="text" placeholder="Nome"><br/>

  <input name="sobrenome" type="text" placeholder="Sobrenome"<br/>

  <button>Enviar</button>
  
</form>

<?php
   
  if($_POST){
    echo "Oi " .$_POST['nome'];
  }

?>