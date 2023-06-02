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
<body class="listar"> 
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
            <h1>Agenda de Reuniões</h1>
            <?php 
$stmt = $pdo->query('SELECT * FROM crud_reuniao ORDER by data, hora'); 
$agendamentos = $stmt->fetchAll(PDO::FETCH_ASSOC); 
if (count($agendamentos) == 0) { 
    echo '<p>Nenhuma reunião agendada.</p>'; 
} else { 
    echo '<table border="1">'; 
    echo '<thead><tr><th>Nome</th><th>E-mail</th><th>Telefone</th><th>Empresa</th><th>Data</th><th>Horário</th><th colspan 
    ="2">Opções</th></tr></thead>'; 
    echo '<tbody>'; 


    foreach ($agendamentos as $agendamento) { 
        echo '<tr>'; 
        echo '<td>' . $agendamento ['nome'] . '</td>'; 
        echo '<td>' . $agendamento['email'] . '</td>'; 
        echo '<td>' . $agendamento['telefone'] . '</td>'; 
        echo '<td>' . $agendamento['empresa'] . '</td>'; 
        echo '<td>' . date('d/m/y', strtotime($agendamento['data'])) . '</td>'; 
        echo '<td>' . date('H:i', strtotime($agendamento['hora'])) . '</td>'; 
        echo '<td><a ;" href="atualizar.php?id=' . $agendamento['id'] . '">Atualizar</a></td>'; 
        echo '<td><a ;" href="deletar.php?id=' . $agendamento['id'] . '">Deletar</a></td>'; 
        echo '</tr>'; 
    } 

    echo '</tbody>'; 
    echo '</table>'; 
} 
?> 

 
 



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
            
        </footer>
        </div>


</form>
</body>
</html>