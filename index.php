<?php
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sala de Reunião</title>
</head>
<body>
<div class="principal">
        <header>
             <section class="logo">
       <div class="item-id"><img src="imgtf/logo reuniao.png" height="100px" weight="10px"></div>
    </section>
   
      
    <section class="titulo">
        <p>Sala de Reunião</p>
</section>
        </header>
       

       <section class="fundo">
        <div id="menu">
        <lu>
            <li><a href="listar.php">Orçamento</a></li>
            <li><a href="sobre.php">Sobre nós</a></li>
            <li><a href="contato.php">Contatos</a></li>
            <li><a href="compra.php">Salas</a></li>
        </lu>
    </div>
    <section class= "img1">
    <div class="item-id"><img src="imgtf/img 1.png" height="400px" weight="10px"></div>
    </section>

            <div class="container"> 

<h1>Sala de Reunião</h1> 

<?php 

if (isset($_POST['submit'])) { 

    $nome = $_POST['nome']; 

    $email = $_POST['email']; 

    $telefone = $_POST['telefone']; 

    $empresa = $_POST['empresa']; 

    $data = $_POST['data']; 

    $hora = $_POST['hora']; 

 




$stmt = $pdo->prepare('SELECT COUNT(*) FROM crud_reuniao WHERE data = ? AND hora = ?'); 

$stmt->execute ([$data, $hora]); 

$count = $stmt->fetchColumn(); 




if ($count > 0){ 

    $error = 'ja existe uma reunião para essa data e horario.'; 

} else { 




    $stmt = $pdo->prepare('INSERT INTO crud_reuniao (nome, email, telefone, empresa, data, hora)  

    VALUES(:nome, :email, :telefone, :empresa, :data, :hora)'); 

    $stmt->execute(['nome' => $nome, 'email' => $email, 'empresa'  => $empresa, 'telefone' => $telefone,  

    'data' => $data, 'hora' => $hora]); 

    if ($stmt->rowCount()) { 

        echo '<span>Reunião agendada com sucesso!</span>'; 

    } else { 

        echo '<span>Erro ao agendar reunião. Tente novamente mais tarde.</span>'; 

    } 

} 

if (isset($error)) { 

    echo '<span>'.$error.'</span>'; 

} 

} 

?> 




<form method="post"> 




<label for="nome">Nome:</label> 

<input type="text" name="nome" required><br> 




<label for="email">E-mail:</label> 

<input type="email" name="email" required><br> 




<label for="telefone">Telefone:</label> 

<input type="text" name="telefone" maxlength="11" required><br> 




<label for="empresa">Nome da Empresa:</label> 

<input type="text" name="empresa" required><br> 




<label for="data">Data:</label> 

<input type="date" name="data" required><br> 




<label for="hora">Horário:</label> 

<input type="time" name="hora" required><br> 




<div> 

    <button type="submit" name="submit" value="agendar">Agendar</button> 

    <button><a href="listar.php">Listar</a></button> 

</div> 

</div>

<div class = "rodape"> 

</div> 
        </section>

<footer>
    <div class="parte1">
    <section class="elipse">
       <div class="item-id"><img src="imgtf/Grey Professional Monogram Circular Brand Logo.png" height="50px" weight="10px"></div>
    </section>
    <section class="info">
        <p>Info.</p>
</section>
<section class="local">
        <p>Localização</p>
</section>
<section class="ca">
        <p>Central</p>
</section>



    </div>
            
        </footer>

    </div>


</form>
</body>
</html>