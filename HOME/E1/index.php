<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
			<title>E1</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="style.css" rel="stylesheet" type="text/css" />
			<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
			<script type="text/javascript" src="js/script.js"></script>
			<script type="text/javascript" src="js/cufon-yui.js"></script>
			<script type="text/javascript" src="js/arial.js"></script>
			<script type="text/javascript" src="js/cuf_run.js"></script>
			<!-- Bootstrap core CSS -->
			<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
			<!-- Custom styles for this template -->    
			<link href="css/scrolling-nav.css" rel="stylesheet">
			<!-- Material Design Bootstrap -->
			<link href="css2/mdb.min.css" rel="stylesheet">
			<!-- Your custom styles (optional) -->
			<link href="css2/style.css" rel="stylesheet">
			<!-- Librerias para el objeto Modal-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
			<?php
			  include '../Validar.php';
			 ?>
			    <!-- Navigation -->
			    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
			      <div class="container">
			        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ejercicio 1</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			          <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarResponsive">
			          <ul class="navbar-nav ml-auto">
			            <li class="nav-item">
			              <a class="nav-link js-scroll-trigger" href="/ESDB/HOME/index.php">Home</a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link js-scroll-trigger" href="/ESDB/HOME/Perfil/index.php">Perfil</a>
			            </li>
			            <li class="nav-item">
			              <a class="nav-link js-scroll-trigger" href="/ESDB/CerrarSesion.php">Cerrar Sesion</a>
			            </li>
			          </ul>
			        </div>
			      </div>
			    </nav>
				<br /><br /><br />
			    <div class="container">
			    	<div class="container-fluid bg-dark text-center text-white">
			    		Ejercicio 1
			    	</div>
			    	<div class="">
			    		<h5 class="animated zoomIn">Instrucciones: </h5>
			    		<p>Ordena los numeros del 1 al 12 haciendo click en el orden correcto.</p>
			    	</div>
			    	<div id="Tablero" class="justify-content-center">
			    		
			    	</div>
			    	<div class="btn btn-primary" id = "Reset" onclick="Reset()">
			    		Reset
			    	</div>
			    	<div class="progress">
        				<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:0%" id="Avanze"></div>  
      				</div>
			    </div>
				<script type="text/javascript">
					/////////////////////////////////////////////////////////////////
					///Aqui se crea Obtiene la base del tablero
					var Tablero = document.getElementById("Tablero");
					var cont = 0, cont3 = 0;
					var Barra = document.getElementById("Avanze");
					var Ganaste = document.createElement('div');
					var Mensaje = document.createElement('h1');
					/////////////////////////////////////////////////////////////////
					///Se dibujan los botones
					var numeros = [1,2,3,4,5,6,7,8,9,10,11,12];//Array 
					numero = shuffle(numeros);
					for(var i = 0; i < 4; i++)
					{
						var Fila = document.createElement("div");
						Fila.className += "row justify-content-center";
						for(var j = 0; j < 3; j++)
						{
							var Boton = document.createElement("div");
							Boton.className += "col-md-2 btn btn-dark animated pulse infinite";
							  
							Boton.id = "btn"+cont;
							Boton.innerHTML = numeros[cont];
							Boton.addEventListener('click',EmpiezaJuego,false);
							Fila.appendChild(Boton);
							cont += 1;		
						}
						Tablero.appendChild(Fila);	
					}
					var arrayBotones = [];

					/////////////////////////////////////////////////////////////////////////////
					//////Se barajea el Array para que esten en los botones de forma desordenada
					function shuffle(array) 
					{
  							var currentIndex = array.length, temporaryValue, randomIndex;
 							// Mientras queden elementos a mezclar...
  							while (0 !== currentIndex) 
  							{
    								// Seleccionar un elemento sin mezclar...
    								randomIndex = Math.floor(Math.random() * currentIndex);
    								currentIndex -= 1;
    								// E intercambiarlo con el elemento actual
    								temporaryValue = array[currentIndex];
    								array[currentIndex] = array[randomIndex];
    								array[randomIndex] = temporaryValue;
  							}

  					return array;
					}
					//////////////////////////////////////////////////////////////////////////////
					////Funcion que Empieza el Juego
					function EmpiezaJuego(e)
					{
						//alert(e.target.id);
						e.target.className = "btn btn-primary animated fadeOut";
						e.target.removeEventListener('click',EmpiezaJuego,false);
						arrayBotones.push(e.target.id);
						VerOrden();
					}
					///////////////////////////////////////////////////////////////////////////////////
					//Comprobar Orden
					function VerOrden()
					{//Inicia Funcion VerOrden
						var Ord = [1,2,3,4,5,6,7,8,9,10,11,12];//Array Orden correcto de pulsacion de botones
						//Obtenemos el objeto por medio de su id
						var Obje= document.getElementById(arrayBotones[arrayBotones.length-1]);
						if(cont3 < Ord.length)
						{
							if(Ord[cont3] != Obje.innerHTML)
							{
								alert("Diferente !!!");
								for(var i = 0; i < arrayBotones.length; i++)
								{
									var Obje= document.getElementById(arrayBotones[i]);
									Obje.className = "col-md-2 btn btn-dark animated pulse infinite";
								}
								arrayBotones = [];
								cont3 = 0;
							}
							else
							{
								cont3 += 1;
								switch(cont3)
								{
									case 3:
										Barra.style = "width:"+30+"%;";
										break;
									case 6:
										Barra.style = "width:"+60+"%;";
										break;
									case 9:
										Barra.style = "width:"+90+"%;";
										break;
									case 12:
										Barra.style = "width:"+100+"%;";
										Mensaje.innerHTML = "Felicidades Ganaste!!!!";
										Mensaje.className = "animated shake infinite";
										Ganaste.appendChild(Mensaje);
										Tablero.appendChild(Ganaste); 
										break;
								}	
							}
						}
							
					}//Termina Funcion VerOrden
					function Reset()
					{
								for(var i = 0; i < arrayBotones.length; i++)
								{
									var Obje= document.getElementById(arrayBotones[i]);
									Obje.className = "col-md-2 btn btn-dark animated pulse infinite";
									Obje.addEventListener('click',EmpiezaJuego,false);
								}
								arrayBotones = [];
								Barra.style = "width:"+0+"%;";
								Tablero.removeChild(Ganaste);
								cont3 = 0;
					}
				</script>
			    <!-- Bootstrap core JavaScript -->
    			<script src="vendor/jquery/jquery.min.js"></script>
    			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>