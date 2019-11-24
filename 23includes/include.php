<?php
include "header.php";
?>

<form>
Nome: <br>
<input type="text" name="nome" placeholder="nome">
Data de nascimento: <br><br>
<input type="number" name="dataNascAluno" value="data de nascimento do aluno">
Idade: <br>
<input type="radio" name="idade" value="maior que 18">
<input type="radio" name="idade" value="menor que 18">
Sexo: <br><br>
<input type="checkbox" name="sexo" value="masculino">
<input type="checkbox" name="sexo" value="feminino">

  </form>
    <a href="html.php">Voltar a pagina Inicial</a>
  <hr>







<?php
include "footer.php";
?>