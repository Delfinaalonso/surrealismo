<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@100;800&family=Bebas+Neue&family=Birthstone&family=Londrina+Solid:wght@100;400&family=Oswald:wght@200&family=Staatliches&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <title>Contacto</title>
</head>
<body>
    <header class="container-fluid header   ">
        

        <nav class="navbar navbar-expand-lg navbar-light ">
                
            <div class="container-fluid p-3">
              
                <a class="navbar-brand " href="index.html">
                   <img class="imgmenu img-fluid" src="imagenes/Logo.png" alt="logo">
                  
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>    
    
                
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav  ">
                <li class="nav-item p3">
                    <a class="nav-link "  href="filosofia.html">FILOSOFIA</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "  href="historia.html">HISTORIA</a>
                </li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                     ARTISTAS
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <li><a class="dropdown-item" href="salvadordali.html">Salvador Dali</a></li>
                      <li><a class="dropdown-item" href="renemagritte.html">Rene Magritte</a></li>
                      <li><a class="dropdown-item" href="joanmiro.html">Joan Miro</a></li>
                      <li><a class="dropdown-item" href="maxernst.html">Max Ernst</a></li>
                    </ul>
                  </div>
                <li class="nav-item">
                    <a class="nav-link " href="galeria.html">GALERIA</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link " href="contacto.html">CONTACTO</a>
                </li>
            </ul>
        </div>
    
    </div>
    </nav>
    </div>
    </header> 

<section>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%'  ");
?>
<article style="">
	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'];
			echo $resultados['apellido'] ;
echo $resultados['bio'] ;
echo $resultados['foto'] ;

		
	?>
    </p>
    <hr/>
    <?php
		}

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>
</article>


</section>


    

    <footer class="container-fluid footer d-flex d-flex justify-content-center">
    
        <h2>Surrealismo--</h2>
        <h2>Delfina Alonso</h2>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  




</body>
</html>