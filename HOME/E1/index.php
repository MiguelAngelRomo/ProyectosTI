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
			    		<div class="row border border-primary">
			    			<div class ="col-sm-1">
			    				tiempo:  
			    			</div>
			    			<div class ="col-sm-2" id = "tiempo">
			    				0 : 0
			    			</div>
			    			<div class ="col-sm-1" >
			    				Puntos:
			    			</div>
			    			<div class="col-sm-1" id="puntos">
			    				0
			    			</div>
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
			    <!-- Empieza Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
				    <div class="modal-content">

				      <!-- Modal Header -->
				      <div class="modal-header bg-info">
				        <h4 class="modal-title">Ganaste!!</h4>
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				      </div>

				      <!-- Modal body -->
				      <div class="modal-body justify-content-center">
				        <h3 class="animated shake infinite">Felicidades Lo Has Logrado!!!!</h3>
				       <center> <img src="Confeti.gif"></center>
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer">
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				      </div>

				    </div>
				  </div>
				</div>
				<!--Termina Modal -->
				<script type="text/javascript">
					/////////////////////////////////////////////////////////////////
					///Se declaran las variables globales
					var Tablero = document.getElementById("Tablero");
					var cont = 0, cont3 = 0;
					var Barra = document.getElementById("Avanze");
					var Ganaste = document.createElement('div');
					var Mensaje = document.createElement('h1');
					var arrayFila = [];
					var listaB = [];
					var Puntos = 0; 
					var Gano = false;
					////////////////////////////////////////////////////////////
					var Cronometro;
					/////////////////////////////////////////////////////////////
					/////Cronometro
					function EmpezarTiempo()
					{//Empieza funcion Empezar Tiempo
						var contador_s = 0;
						var contador_m = 0;

						var t = document.getElementById("tiempo");
						

						Cronometro = setInterval(
							function()
							{
								if(contador_s == 60)
								{
									contador_s = 0;
									contador_m++;
									t.innerHTML = contador_m + " : "+contador_s;

									if(contador_m == 60)
									{
										contador_m = 0;
									}
								}
								t.innerHTML = contador_m + " : "+contador_s;
								contador_s++;
							}
						,1000);
					}//Termina funcion Empezar Tiempo
					function DetenerTiempo()
					{//Empieza Funcion DetenerTiempo
							clearInterval(Cronometro);
					}//Termina Funcion Detener Tiempo

					/////////////////////////////////////////////////////////////////
					///Se dibujan los botones
					function CrearTablero()
					{///Inicia Funcion Crear Tablero
						var numeros = [1,2,3,4,5,6,7,8,9,10,11,12];//Array 
						numero = shuffle(numeros);//Se desordenan los numeros
						///Se dibuja el tablero por medio de dos ciclos
						for(var i = 0; i < 4; i++)
						{//Inicia ciclo de Fila
							var Fila = document.createElement("div");
							Fila.className += "row justify-content-center";
							Fila.id = "fila"+i;
							arrayFila.push(Fila.id);
							for(var j = 0; j < 3; j++)
							{//Inicia ciclo de columnas

								var Boton = document.createElement("div");
								Boton.className += "col-md-2 btn btn-dark animated pulse infinite";
								Boton.id = "btn"+cont;
								listaB.push(Boton.id);
								Boton.innerHTML = numeros[cont];
								Boton.addEventListener('click',EmpiezaJuego,false);
								Fila.appendChild(Boton);
								cont += 1;		

							}//Termina el ciclo de la columna
							Tablero.appendChild(Fila);	//Se añade la fila al tablero

						}///Termina ciclo de fila	
						cont = 0;
						EmpezarTiempo();
					}///Termina Funcion Crear Tablero

					CrearTablero();
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
								/////Aqui va el metodo Reset
								Reset();
							}
							else
							{
								cont3 += 1;
								Puntos += 8.4;
								var Puntos2 = Math.round(Puntos);
								var EP = document.getElementById("puntos");
								EP.innerHTML = Puntos2 - 1;
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
										for(var i = 0; i<arrayFila.length; i++)
										{
											Tablero.removeChild(document.getElementById(arrayFila[i]));
										}
										arrayFila =[];
										listaB = [];
										arrayBotones = [];
										Barra.style = "width:"+100+"%;";
										$("#myModal").modal();
										Ganaste.appendChild(Mensaje);
										Tablero.appendChild(Ganaste); 
										Gano = true;
										DetenerTiempo();
										break;
								}	
							}
						}
							
					}//Termina Funcion VerOrden
					function Reset()
					{///Inicia funcion reset
							var C = 0;
							for(var i = 0; i<arrayFila.length; i++)
							{
								Tablero.removeChild(document.getElementById(arrayFila[i]));
							}
							arrayFila =[];
							listaB = [];
							arrayBotones = [];
							Barra.style = "width:"+0+"%;";
							DetenerTiempo();
							var EP = document.getElementById("puntos");
							Puntos = 0;
							EP.innerHTML = Puntos;
							CrearTablero();
							cont3 = 0;
					}//Termina funcion Reset
				</script>
			    <!-- Bootstrap core JavaScript -->
    			<script src="vendor/jquery/jquery.min.js"></script>
    			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>