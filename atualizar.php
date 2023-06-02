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
    <div class="container"> 
            <?php 

include 'db.php'; 
if (!isset($_GET['id'])) { 
    header('location: listar.php'); 
    exit; 
} 

$id = $_GET['id']; 
$stmt = $pdo->prepare('SELECT * FROM crud_reuniao WHERE id =?'); 
$stmt->execute ([$id]); 
$appointment = $stmt->fetch(PDO::FETCH_ASSOC); 

if (!$appointment) { 
    header('location: listar.php'); 
    exit; 
} 

$nome = $appointment['nome']; 
$email = $appointment['email']; 
$telefone = $appointment['telefone']; 
$empresa = $appointment['empresa']; 
$data = $appointment['data']; 
$hora = $appointment['hora']; 

?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Atualizar compromisso</title> 
</head> 
<body> 
    <h1>Atualizar compromisso</h1> 
    <form method="post"> 

        <label for="nome">Nome:</label> 
        <input type="tex" name="nome" value="<?php echo $nome; ?>"required><br> 

        <label for="email">E-mail:</label> 
        <input type="email" name="email" value="<?php echo $email; ?>"required><br> 

        <label for="telefone">Telefone:</label> 
        <input type="tel" name="telefone" value="<?php echo $telefone; ?>"required><br> 

        <label for="empresa">Nome da Empresa:</label> 
        <input type="tex" name="empresa" value="<?php echo $empresa; ?>"required><br> 

        <label for="data">Data:</label> 
        <input type="date" name="data" value="<?php echo $data; ?>"required><br> 

        <label for="hora">Horário:</label> 
        <input type="time" name="hora" value="<?php echo $hora; ?>"required><br> 

        <button type="submit">Atualizar</button> 
</form> 
</body> 
</html> 


<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $nome = $_POST['nome']; 
    $email = $_POST['email']; 
    $telefone = $_POST['telefone']; 
    $empresa = $_POST['empresa']; 
    $data = $_POST['data']; 
    $hora = $_POST['hora']; 

    //validação dos dados do formulario aqui 
    $stmt = $pdo->prepare('UPDATE crud_reuniao SET nome= ?, email = ?, telefone = ?, empresa = ?, data = ?, hora = ? WHERE id = ?'); 
    $stmt->execute([$nome, $email, $telefone, $empresa, $data, $hora, $id]); 
    header('location: listar.php'); 
    exit; 
} 
?> 
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