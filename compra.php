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

    <p class="pr">Salas para alugar</p></br> 


       <section class="container_compra">  

            <?php 

            $salas = ['sala1', 'sala2', 'sala3', 'sala4', 'sala5']; 

            $preco_salas= [20,45,33,26,30]; 
            $quant_salas= [2,3,2,4,3];
            $total_salas1= $preco_salas[0]; 
            $total_salas2= $preco_salas[1]; 
            $total_salas3= $preco_salas[2]; 
            $total_salas4= $preco_salas[3]; 
            $total_salas5= $preco_salas[4]; 
            

            $ranking_fotos = [ 

               0 =>'sala1', 
               1 =>'sala2', 
               2 =>'sala3', 
               3 =>'sala4', 
               4 =>'sala5', 
                

            ]; 

             

            $salas_fotos = [ 

                'sala1' => 'imgtf/sala6.jpg', 
                'sala2' => 'imgtf/sala2.jpg', 
                'sala3' => 'imgtf/sala3.jpg', 
                'sala4' => 'imgtf/sala4.jpg', 
                'sala5' => 'imgtf/sala5.jpg',  

            ]; 

            ?>    


        <div class="lanche-item"> 

                <?php  
                echo "<img src='$salas_fotos[sala1]'>"; 
                echo"</br>"; 
                echo 'Sala 10'; 
                echo"</br>"; 
                echo 'R. Treze de Maio, 1947';
                echo "</br>Valor do aluguel R$$preco_salas[0]"; 
                
                

                ?> 

                 <aside> 

                 <div id="menu">
        <lu>
            <li><a href="index.php">Alugar</a></li> 
        </lu>
        </div> 

        </aside> 

            </div> 

 
 

            <div class="lanche-item"> 

                <?php  
                echo "<img src='$salas_fotos[sala2]'>"; 
                echo"</br>"; 
                echo 'Sala 8'; 
                echo"</br>"; 
                echo 'R. Treze de Maio, 1947';
                echo "</br>Valor do aluguel R$$preco_salas[1]"; 
                
                 

                ?> 

                 <aside> 

                 <div id="menu">
        <lu>
            <li><a href="index.php">Alugar</a></li> 
        </lu>
        </div> 

        </aside> 

            </div> 

 
 

            <div class="lanche-item"> 

                <?php  
                echo "<img src='$salas_fotos[sala3]'>"; 
                echo"</br>"; 
                echo 'Sala 4'; 
                echo"</br>";
                echo 'R. Treze de Maio, 1947';
                echo "</br>Valor do aluguel R$$preco_salas[2]"; 
                
                

                ?> 

                 <aside> 

                 <div id="menu">
        <lu>
            <li><a href="index.php">Alugar</a></li> 
        </lu>
        </div> 

        </aside> 

            </div> 


            <div class="lanche-item"> 

                <?php  
                echo "<img src='$salas_fotos[sala4]'>"; 
                echo"</br>"; 
                echo 'Sala 6'; 
                echo"</br>";
                echo 'R. Treze de Maio, 1947';
                echo "</br>Valor do aluguel R$$preco_salas[3]"; 
                
                 

                ?> 

                 <aside> 

                 <div id="menu">
        <lu>
            <li><a href="index.php">Alugar</a></li> 
        </lu>
        </div> 

        </aside> 

            </div> 

            <div class="lanche-item"> 

                <?php  
                echo "<img src='$salas_fotos[sala5]'>"; 
                echo"</br>"; 
                echo 'Sala 9'; 
                echo"</br>";
                echo 'R. Treze de Maio, 1947';
                echo "</br>Valor do aluguel R$$preco_salas[4]"; 
               
               

                ?> 

                 <aside> 

                 <div id="menu">
        <lu>
            <li><a href="index.php">Alugar</a></li> 
        </lu>
        </div>
        </aside> 

        </section>
         
        
        
<div class = "rodape">  
     
</div>  
</section> 

<footer> 
    <div class="parte1"> 
<button id="menu"><a href="index.php">Home</a></button>
    <section class="elipse"> 
       <div class="item-id"><img src="imgtf/Grey Professional Monogram Circular Brand Logo.png" height="50px" weight="10px"></div> 
    </section> 

  

        </div>     
    
        </footer> 
        </div> 

</form> 
</body> 
</html> 





    
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