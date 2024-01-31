<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css" integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../btsp/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
    <title>Listagem de alunos</title>
</head>
<body>

    <table class="table table-striped">
    <thead class="table-dark">
        <td>ID</td>
        <td>NOME</td>
        <td>ENDEREÇO</td>
        <td>BAIRRO</td>
        <td>CIDADE</td>
        <td>ESTADO</td>
        <td>SEXO</td>
        <td>OPÇÕES</td>
    </thead>

<body>

<?php 

// Chamando o arquivo de conexão
 include_once '../Conexao/conec.php';

 $rec= "SELECT ID,NOME,ENDERECO,BAIRRO,CIDADE,ESTADO,SEXO FROM cadalunos";

 $tudo= mysqli_query($c,$rec);

 while ($Linha = mysqli_fetch_array($tudo)){
    echo "<tr class='td'>
        
        <td class='td'>$Linha[ID]</td>
        <td class='td'>$Linha[NOME]</td>
        <td class='td'>$Linha[ENDERECO]</td>
        <td class='td'>$Linha[BAIRRO]</td>
        <td class='td'>$Linha[CIDADE]</td>
        <td class='td'>$Linha[ESTADO]</td>
        <td class='td'>$Linha[SEXO]</td>
        <td>
         <a href='../Forms/excluir.php?LINHA=$Linha[ID]'>
         <img id='lixo' src='../IMAGEM/trash.svg'>
         </a>
         <a href='../Forms/formedit.php?LINHA=$Linha[ID]'>
         <img id='editar' src='../IMAGEM/pen.svg'/>
         </a>
        </td>
        
    
    
    
    </tr>";
     }

 echo "</body>
 </table>";
 ?>
</body>
</html>