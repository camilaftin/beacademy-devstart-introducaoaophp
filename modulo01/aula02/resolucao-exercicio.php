<form action="" method="post">

  <input name="number1" type="text" placeholder="Numero1"><br/>

  <input name="number2" type="text" placeholder="Numero2"<br/>

  <button name="soma">Somar</button>
  <button name="diferenca">Diferenca</button>
  <button name="multiplo">Multiplo</button>
  <button name="divisao">Dividir</button>
  
</form>

<?php
  
  if($_POST){

    if(isset($_POST['diferenca'])){
      echo $_POST['number1'] - $_POST['number2'];
    }

    if(isset($_POST['soma'])){
      echo $_POST['number1'] + $_POST['number2'];
    }

    if(isset($_POST['divisao'])){
      echo $_POST['number1'] / $_POST['number2'];
    }

    if(isset($_POST['multiplo'])){
      echo $_POST['number1'] * $_POST['number2'];
    }

    //var_dump($_POST);

  }
?>
