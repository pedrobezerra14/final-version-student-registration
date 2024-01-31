<?php
    //Acessar os dados do usuário
    session_start();
    $_SESSION['LOGINN']=$_POST['LOGINN'];
    $_SESSION['SENHAA']=$_POST['SENHA'];
    $_SESSION['FUNCAO']=$_POST['FUNC'];


    //Acessar o banco de dados
    include_once '../conexao/conec.php';

    //Passando pelo processo de criptografia
    $_SESSION['SENHAA']=hash('sha512', $_SESSION['SENHAA']);

    //verificar através do select
    $dados="SELECT * FROM cadusuario WHERE LOGINN = '$_SESSION[LOGINN]' AND CSENHA = '$_SESSION[SENHAA]'";
    $resp=mysqli_query($c,$dados);
    $linhas=mysqli_num_rows($resp);


    //verificação de professor ou aluno
    
    if ($linhas==1){
        $ver=mysqli_query($c,"SELECT FUNCAO FROM cadusuario WHERE LOGINN = '$_SESSION[LOGINN]' AND  CSENHA = '$_SESSION[SENHAA]' AND FUNCAO='$_SESSION[FUNCAO]'");
        $LIN= mysqli_num_rows($ver);
        if($LIN==1){
            header('Location:../Menu/Menu.php');
        }else{
            header('Location:../Menu/Menualuno.php');
        }
        

    }else{
        session_destroy();
        header('Location:login.html');
    }
    


    

?>