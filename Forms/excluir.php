<?php

//Acessando o ID do(a) aluno(a) que será excluído.
 $ID=$_GET['LINHA'];

 // Chamar o arquivo de conexão
 include_once '../Conexao/conec.php';

 $exc= "DELETE FROM cadalunos where ID='$ID'";

// Excluindo o(a) Aluno(a)
 mysqli_query($c,$exc);

// Voltando para o arquivo: RELAÇÃO DE ALUNOS
 header('Location:../Menu/Menu.php');
?>