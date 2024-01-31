<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="logincss/login.css">
</head>
<body>
    <div class="page">
        <form method="POST"  class="formLogin">
           
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="password">CPF</label>
            <input type="text" name="CPF" placeholder="Digite seu cpf" />
            <label for="password">Senha</label>
            <input type="password" name="SENHA" placeholder="Digite sua senha" />
            <label for="password">Confirme sua senha</label>
            <input type="password" name="CSENHA" placeholder="Confirme sua senha" />
            <input type="submit" value="ALTERAR" name="butao"  class="btn" /><br>
           
            
        </form>
    </div>
</body>
</html>
<?php 
if (isset($_POST['butao'])){


$CSENHA=$_POST['CSENHA'];
$CSENHA1=hash('sha512',$CSENHA);
$SENHA=$_POST['SENHA'];
$SENHA1=hash('sha512',$SENHA);
$CPF=$_POST['CPF'];


include_once '../conexao/conec.php';


if($CSENHA1==$SENHA1){

$dados="SELECT * FROM cadusuario WHERE CPF='$CPF'";
    $resp=mysqli_query($c,$dados);
    $linhas=mysqli_num_rows($resp);

if ($linhas==1){
   
   $dados1="UPDATE cadusuario SET CSENHA='$CSENHA1', SENHA='$SENHA1' WHERE CPF='$CPF'";
   $r=mysqli_query($c,$dados1);
    
}

else{
    
    echo "<script>alert('CPF NÃO CADASTRADO')</script>";

    
    
}
}else{
    echo "SENHA DESIGUAL";
}
 
}

?>