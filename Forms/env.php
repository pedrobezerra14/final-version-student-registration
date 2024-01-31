
<?php
include_once 'cad_aluno.html';

if (isset($_POST['butao'])){

// acessando os dados do formulário
$Nome=$_POST['NOME'];
$End=$_POST['ENDERECO'];
$Bairro=$_POST['BAIRRO'];
$Cidade=$_POST['CIDADE'];
$Estado=$_POST['ESTADO'];
$Sexo=$_POST['SEXO'];

// chamando o arquivo de conexão
include_once '../conexao/conec.php';

// inserir os dados na base de dados
$ins= "INSERT INTO  cadalunos (NOME,ENDERECO,BAIRRO,CIDADE,ESTADO,SEXO) VALUES ('$Nome','$End','$Bairro','$Cidade','$Estado','$Sexo')";

mysqli_query($c,$ins);


}

header('location:../Menu/Menu.php');
  ?>