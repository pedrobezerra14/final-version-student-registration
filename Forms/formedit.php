<?php
   $id=$_GET['LINHA'];

  include_once '../Conexao/conec.php';

  $r=mysqli_query($c,"SELECT NOME,ENDERECO,BAIRRO,CIDADE,ESTADO,SEXO FROM cadalunos WHERE ID='$id' ");
  $r1=mysqli_fetch_array($r);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../btsp/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../CSS/estilo.css">
	<script>
		function envi() {
			alert("Cadastro editado com sucesso!!");
		}
	</script>
	<title>Editar Cadastro</title>
</head>

<body id="forms"><br><br><br><br><br>

	<form method="POST">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div id="divv">

			<div id="div1" class="row justify-content-center">

				<div class="col-md-2">
					<label>Nome do aluno</label>
					<input type="Text" name="N" class="form-control" value="<?php echo $r1[0];?>" required><br>
				</div>

				<div class="col-md-2">
					<label>Endereço</label>
					<input type="Text" name="End" class="form-control" value="<?php echo $r1[1];?>" required><br><br>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-2">
					<label for="bairro">Bairro</label>
					<input type="Text" name="Ba" id="bairro" class="form-control" value="<?php echo $r1[2];?>"
						required><br><br>
				</div>

				<div class="col-md-2">
					<label>Cidade</label>
					<input type="Text" name="Cid" class="form-control" value="<?php echo $r1[3];?>" required><br><br>
				</div>

			</div>
			<div class="row justify-content-center">
				<div class="col-md-2">
					<label>Estado</label>
					<select name="Est" class="form-select" required>
						<option>
							<?php echo $r1[4];?>
						</option>
						<option>RJ</option>
						<option>SP</option>
						<option>RN</option>
						<option>PE</option>
						<option>RR</option>
						<option>RO</option>
						<option>TO</option>
						<option>MG</option>
						<option>BA</option>
						<option>PA</option>
						<option>CE</option>
						<option>AM</option>
						<option>RS</option>
						<option>DF</option>
						<option>GO</option>
						<option>AL</option>
						<option>PR</option>
						<option>ST</option>
					</select><br><br>
				</div>

				<div class="col-md-2">
					<label>Selecione seu sexo </label>
					<select name="Sexo" class="form-select" required>
						<option>
							<?php echo $r1[5];?>
						</option>
						<option id="M">Masculino</option>
						<option id="F">Feminino</option>
						<option id="MF">Outros</option>

					</select><br><br>
				</div>
			</div>
			<br><br><br><br><br>
			<div id="dbt">
				<button id="bt" class="btn btn-dark" name="salvar" onclick="envi()">Enviar cadastro</button>
			</div>
		</div>
	</form>
</body>

</html>

<?php



if (isset($_POST['salvar'])){

$Nome=$_POST['N'];
$End=$_POST['End'];
$Bairro=$_POST['Ba'];
$Cidade=$_POST['Cid'];
$Estado=$_POST['Est'];
$Sexo=$_POST['Sexo'];

include_once '../conexao/conec.php';

$ins= "UPDATE cadalunos set NOME='$Nome',ENDERECO='$End',BAIRRO='$Bairro',CIDADE='$Cidade',ESTADO='$Estado',SEXO='$Sexo' where cadalunos.ID=$id ";

mysqli_query($c,$ins);

// Voltando para o arquivo: Tela de Menu
header('Location:../Menu/Menu.php');


}
?>