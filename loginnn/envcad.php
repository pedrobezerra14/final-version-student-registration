
<?php


if (isset($_POST['butao'])){

// acessando os dados do formulário
$LOGINN=$_POST['Login'];
$SENHA=$_POST['Senha'];
$CSENHA=$_POST['CSenha'];
$EMAIL=$_POST['EMAIL'];
$CPF=$_POST['CPF'];
$STATUS=$_POST['Status'];
$FUNCAO=$_POST['FUNC'];

//Verificando se a confirmação de senha está igual a senha digitada anteriormente
if($CSENHA==$SENHA){

// chamando o arquivo de conexão
include_once '../conexao/conec.php';

//Passando pelo processo de criptografia
$SENHA=hash('sha512',$SENHA);
$CSENHA=hash('sha512',$CSENHA);

$dados="SELECT * FROM cadusuario WHERE CPF='$CPF'";
    $resp=mysqli_query($c,$dados);
    $linhas=mysqli_num_rows($resp);

if ($linhas==1){
    echo "<script> alert('Esse usuário ja existe!!!!!') </script>";
    
    
}

else{
    $ins= "INSERT INTO  cadusuario (LOGINN,CSENHA,CPF,SENHA,FUNCAO,EMAIL,STATUSS) VALUES ('$LOGINN','$CSENHA','$CPF','$SENHA','$FUNCAO','$EMAIL','$STATUS')";

    mysqli_query($c,$ins);
    header('Location:login.html');
    
}




}
}else{
     
    header('Location:cadusuario.php');
}


  ?>