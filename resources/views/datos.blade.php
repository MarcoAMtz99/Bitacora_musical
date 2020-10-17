<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Bitacora</title>
	
</head>

<body class="container">
	<nav class="nav">
		<a class="nav-link active" href="#">Active</a>
		<a class="nav-link" href="#">Link</a>
		<a class="nav-link" href="#">Link</a>
		<a class="nav-link disabled" href="#">Disabled</a>
	  </nav>
	<div class="container">
		<div class="row">
			<div class=".col-md-">
				<div class="card">
					<div  class="card-header">
						<h1 class="card-title">Bitacora de Canto</h1>
					</div>
				<div class="card-body">
					
					
			

				<form action="{{Route('plantilla')}}" method="POST">
					{{ csrf_field() }}
					<label for="nombre">Nombre del alumno</label>
					<input type="text" id="nombre" value="" name="nombre"> <br>
					<br>
					<label for="tesitura">Tesitura:</label>
					<select id="tesitura" name="tesitura" >
 					 <option value="Soprano">Soprano</option>
 					 <option value="Mezzosoprano">Mezzosoprano</option>	
 					 <option value="Contralto">Contralto </option>
					  <option value="Tenor">Tenor</option>
					  <option value="Barítono">Barítono</option>
					  <option value="Bajo">Bajo</option>
					</select>
					<hr>
					<h3>Resistencia</h3>
					<label for="shhh">SHHH</label>
					<input type="text" id="shhh" name="sh"> <br>
					<br>
					<label for="comentario_sh">comentario_sh</label>
					<br>
				 	<textarea name="comentario_sh" id="comentario_sh" cols="50" rows="1"></textarea>
					<hr>
					<label for="fliptrip">FLIPTRIP</label>
					<input type="text" id="fliptrip" name="fliptrip"> <br>
					<label for="comentario_sh">comentario_Fliptrip</label>
					<br>
				 	<textarea name="comentario_fliptrip" id="comentario_fliptrip" cols="50" rows="1"></textarea>
					<hr>
					<div class="card-body">
					<h3>Vocaleo sostenido</h3>
					<label for="a">A:</label>
					<select id="a" name="a" >
						<option value="fuerza al cantar">fuerza al cantar</option>
						<option value="exceso de fuerza">exceso de fuerza</option>	
						<option value="entonacion forzada">entonacion forzada</option>
						<option value="entonacion natural">entonacion natural</option>
					</select>
					<br>
					<label for="e">E:</label>
					<select id="e" name="e" >
						<option value="fuerza al cantar">fuerza al cantar</option>
						<option value="exceso de fuerza">exceso de fuerza</option>	
						<option value="entonacion forzada">entonacion forzada</option>
						<option value="entonacion natural">entonacion natural</option>
					</select>
					<br>
					<label for="i">I:</label>
					<select id="i" name="i" >
 					 <option value="fuerza al cantar">fuerza al cantar</option>
 					 <option value="exceso de fuerza">exceso de fuerza</option>	
 					 <option value="entonacion forzada">entonacion forzada</option>
 					 <option value="entonacion natural">entonacion natural</option>
					</select>
					<br>
					<label for="o">O:</label>
					<select id="o" name="o" >
 					 <option value="fuerza al cantar">fuerza al cantar</option>
 					 <option value="exceso de fuerza">exceso de fuerza</option>	
 					 <option value="entonacion forzada">entonacion forzada</option>
 					 <option value="entonacion natural">entonacion natural</option>
					</select>
					<br>
				</div>
				<hr>
				<h3>Vocalizacion por frase</h3>
					<label for="nombre">Al bimbo dorme nel patie</label> <br>
					<label for="neutro">Neutro:</label>
					<select id="neutro" name="neutro" >
 					 <option value="Entona facil">Entona facil</option>
 					 <option value="Pierde facilmente aire">Pierde facilmente aire</option>	
 					 <option value="Entonacion natural">Entonacion natural</option>
					</select><br>
					<label for="agudo">Agudo:</label> 
					<select id="agudo" name="agudo" >
 					 <option value="Entona facil">Entona facil</option>
 					 <option value="Pierde facilmente aire">Pierde facilmente aire</option>	
 					 <option value="Entonacion natural">Entonacion natural</option>
					</select><br>
					<label for="grave">Grave:</label> 
					<select id="grave" name="grave" >
 					 <option value="Entona facil">Entona facil</option>
 					 <option value="Pierde facilmente aire">Pierde facilmente aire</option>	
 					 <option value="Entonacion natural">Entonacion natural</option>
					</select>
					<hr>
					<button type="submit" class="btn btn-dark">Enviar datos</button>

					
				</form>
			    </div>
			  </div>
			</div>
			
			

		</div>		
	</div>
</body>
</html>