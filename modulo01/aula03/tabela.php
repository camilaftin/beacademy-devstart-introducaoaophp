<form action="" method="post">

  <input name="nome" type="text" placeholder="nome"><br/>

  <input name="sobrenome" type="text" placeholder="sobrenome"<br/>

  <button name="submit">Enviar</button>
  
</form>

<?php
  
  if(isset($_POST['submit'])){

    $tabela = '<table border="1">';
    $tabela .= '<thead>'; //abre cabecalho
    $tabela .= '<tr>'; //abre linha
    $tabela .= '<th>Nome</th>'; 
    $tabela .= '<th>Sobrenome</th>';
    $tabela .= '</tr>';//fecha linha
    $tabela .='</thead>'; //fecha cabeçalho

    $tabela .='<tbody>';//abre corpo da tabela
    
    $tabela .= '<tr>';//abre linha
    $tabela .= '<td>'.$_POST['nome'].'</td>';
    $tabela .= '<td>'.$_POST['sobrenome'].'</td>'; 
    $tabela .= '</tr>'; //fecha linha
   
    $tabela .= '</table>';//fecha tabela

    echo $tabela;

  }
?>
