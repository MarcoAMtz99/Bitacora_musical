
<style>
    .marca_agua{
  position: absolute;
  opacity: 0.1;
  -moz-transform: rotate(30deg);
     -o-transform: rotate(30deg);
     -webkit-transform: rotate(30deg);
     transform: rotate(30deg);
}

</style>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Plantilla</title>
</head>
<body>
    
   <br><br><br>
   <br><br><br>
   <br><br><br>
   <br><br><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                
                @php
                    date_default_timezone_set('America/Mexico_City');
                    $hoy = getdate();	

                @endphp
                <h1 class="text-center">Evaluacion de progreso </h1> 
                <span> {{date('l jS \of F Y ')}}</span> <br>
                 <i><span> <strong>*</strong> Miguel Angel Martinez Matinez</span> </i> 
            </div>
           
    <div class="card-body">
        <i><H3>Nombre: {{$datos->nombre}}</H3>  </i>
        <h5>Tesitura: {{$datos->tesitura}} </h5>
        <hr>
        <h3>Resistencia</h3>
        <br>
       <i> <h4>Ejercicio 1 (SHH)</h4> </i>
        <p>{{$datos->sh}} </p>
        <p>{{$datos->comentario_sh}} </p>
        
        <i> <h4>Ejercicio 2 (Fliptrip)</h4> </i>
        <p>{{$datos->fliptrip}} </p>
        <p>{{$datos->comentario_fliptrip}} </p>
        <div class="marca_agua">
            <img class="img" src="music.png">
          </div>
          <hr>
           <i><h3>Vocaleo sostenido</h3> </i>
        <p>A: {{$datos->a}} </p>
        <p>E: {{$datos->e}} </p>
        <p>I: {{$datos->i}} </p>
        <p>O: {{$datos->o}} </p>
        <hr>
        <i> <h3>Vocalizacion por frase</h3>  </i>
         <i><h5>Al bimbo dorme nel patie</h5></i>
        <p>Tono neutro:{{$datos->neutro}} </p>
        <p>Tono agudo: {{$datos->agudo}} </p>
        <p>Tono grave:{{$datos->grave}} </p>
        

    </div>
        

        </div>
        
    
    </div>
    

</body>
</html>