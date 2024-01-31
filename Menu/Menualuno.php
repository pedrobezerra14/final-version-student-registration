<?php  

session_start();
 if (empty($_SESSION['LOGINN'] or $_SESSION['SENHAA'])){
    header('location:../loginnn/login.html');
 }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../btsp/css/bootstrap.css">
    <link rel="stylesheet" href="css/Menu.css">
    <title>Menu Principal</title>
    <script>
        function Carregar(Pagina){
            $('.container').load(Pagina);
        }
        function sair(){
            var saindo= confirm('Deseja sair do sistema ?');
            if(saindo==true){
                location.href='../loginnn/sair.php';
            }

        }
    </script>
</head>
<body id="forms">
    
    <nav class="menu">
        <img src="../IMAGEM/cpm.jpg" alt="">
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">ALUNO</a></li>
            <li><a href="#" onclick="sair();">Sair</a></li>
        </ul>
    </nav>
    <br>
    <div  class="container">
        
    </div>
   
    <script src="../JS/code.jquery.com_jquery-3.7.1.min.js" type="text/javascript"></script>
</body>
</html>