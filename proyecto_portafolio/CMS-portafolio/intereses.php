<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Poppins" rel="stylesheet">
    <script src="js/script.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Intereses - Samantha Arburola</title>
</head>

<body>
	<header>
		<h1>Portafolio Personal</h1>
		<h2>Samantha Arburola</h2>
	</header>

	<nav class="col-12">
		<ul>
			<li class="col-2"><a href="index.php">Inicio</a></li>
			<li class="col-2"><a href="formacion.php">Formación</a></li>
			<li class="col-2 active"><a href="intereses.php">Intereses Personales</a></li>
			<li class="col-2"><a href="portafolio.php">Portafolio de Proyectos</a></li>
			<li class="col-2"><a href="contacto.php">Contáctame</a></li>
		</ul>
	</nav>

	<main>
		<articles class="col-12">
			<section class="contact">		    
				<form class="col-6">
					<fieldset>
					<legend><h3>Intereses</h3></legend>
                    <label for="titulo">Nombre</label>
                    <input class="myIn" type="text">
                    <br>
                    <label for="titulo">Descripción</label>
                    <input class="myIn" type="text">
                    <br>
						<button>Agregar</button>
					</fieldset>
				</form>
			</section>
			
			 <section class="col-12 datas contact">
                <table class="col-12">        
                    <tbody class="col-6">
                       <tr>
                           <td colspan="3" class="titleTable">Historial</td>
                       </tr>
                       <tr>
                           <td class="col-2">Nombre</td>
                           <td class="col-6">Descripción</td>
                           <td class="col-1">Editar</td>
                       </tr>
                        
                        <tr>
                            <td>Montañismo</td>
                            <td>Caminata en montaña</td>
                            <td><button>Editar</button></td>
                        </tr>
                        <tr>
                            <td>Trabajo en Plataforma TIC-as</td>
                            <td>Destrucción de Brecha Digital</td>
                            <td><button>Editar</button></td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="col-12">        
                    <tbody class="col-6">
                       <tr>
                           <td colspan="3" class="titleTable">Galería</td>
                       </tr>
                       <tr>
                           <td class="col-6">Imagen</td>
                           <td class="col-6">Descripción</td>
                           <td class="col-1">Editar</td>
                       </tr>
                        
                        <tr>
                            <td><img src="img\img1.jpg" alt="img1"></td>
                            <td>Segunda Hackaton Femenina TIC-as</td>
                            <td><button>Editar</button></td>
                        </tr>
                        <tr>
                            <td><img src="img\img3.jpg" alt="img3"></td>
                            <td>NodeJS School Day 2016	</td>
                            <td><button>Editar</button></td>
                        </tr>
                        <tr>
                            <td><img src="img\img4.jpg" alt="img4"></td>
                            <td>Taller de Aplicaciones Móviles Campus Party 2015	</td>
                            <td><button>Editar</button></td>
                        </tr>
                        <tr>
                            <td colspan="3"><button>Agregar</button></td>
                        </tr>
                    </tbody>
                </table>
                
                
            </section>
		</articles>
	</main>

   	<footer>
	<p>
		© 2017 by Samantha Arburola - Introducción al Desarrollo de Aplicaciones Web
    </p>
	</footer>
</body>
</html>