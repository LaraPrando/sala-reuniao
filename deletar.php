<?php include 'db.php'; ?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css"> 
    <title>Reuniões</title> 
</head> 

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
    <section class= "img2">
    <div class="item-id"><img src="imgtf/img 2.png" height="300px" weight="10px"></div>
    </section>
    <div class="container_listar"> 

    <?php 
include 'db.php'; 

 
if (!isset($_GET['id'])) { 
    header('location: listar.php'); 
    exit; 
} 

 
$id = $_GET['id']; 
$stmt = $pdo->prepare('SELECT * FROM crud_reuniao WHERE id * ?'); 
$stmt->execute([$id]); 
$appointment = $stmt->fetch(PDO::FETCH_ASSOC); 


if (!$appointment) { 
    header('location: listar.php'); 
    exit; 
} 


if ($_SERVER['REQUEST_METHOD']== 'POST') { 
    $stmt = $pdo->prepare('DELETE FROM crud_reuniao WHERE id = ?'); 
    $stmt->execute([$id]); 
    header('location: listar.php'); 
    exit; 
} 


?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Deletar a Reunião</title> 
</head> 
<body> 
    <h1>Deletar a Reunião</h1> 
    <p>Tem certeza que deseja deletar a Reunião de <?php echo $appointment['nome']; ?> em <?php echo date('d/m/Y', strtotime($appointment['data'])); ?> às <?php echo date('H:i', strtotime($appointment['hora'])); ?>?</p> 
    <form method="post"> 
        <button type="submit">Sim</button> 
        <a href="listar.php">Não</a> 
</form> 

<div class = "rodape"> 

</div> 
</section>

<footer>
    <div class="parte1">
    <button id="menu"><a href="index.php">Home</a></button>
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