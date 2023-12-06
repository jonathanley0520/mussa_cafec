<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<h1 class="text-center">ADMINISTRADOR</h1>
<?php
include("./conexion.php");

?>
<div  class="col-8 p-1">
<table class="table">
<thead class="bg-info">
    <h2>feria</h2>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombreInstitucion</th>
      <th scope="col">nombreProyecto</th>
      <th scope="col">personas</th>
      <th scope="col">archivos</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    $sql = $conexion->query("SELECT * FROM feria");
    while ($datos = $sql->fetch_object()) { ?> 
    <tr>
    <th scope="row"><?=$datos->id?></th>
    <td><?=$datos->nombreInstitucion?></td>
    <td><?=$datos->nombreProyecto?></td>
    <td><?=$datos->numPersonas?></td>
    <td><?=$datos->archivos?></td></td>
    <td>
      <div class="iconos">
      <div class="icon">
      <a href="./editar.php ?id-feria=<?=$datos->id?>"><i class='bx bxs-edit'></i></a> 
      </div>
      <div class="icon1">
      <a href="./controlador.php ?id-feria=<?php echo $datos->id?>"><i class='bx bx-trash'></i> </a>
      
      </div>
      </div>
    </td>
    </tr>
    <?php }
    ?>
    </table>
  </tbody>
  <table class="table">
<thead class="bg-info">
    <h2>ponente</h2>
    <tr>
      <th scope="col">id</th>
      <th scope="col">ejeTematico</th>
      <th scope="col">Institucion</th>
      <th scope="col">Programa</th>
      <th scope="col">ficha</th>
      <th scope="col">nombre</th>
      <th scope="col">correo</th>
      <th scope="col">telefono</th>
      <th scope="col">proyecto</th>
      <th scope="col">tipoproyecto</th>
      <th scope="col">archivos</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    
    $sql = $conexion->query("SELECT * FROM ponente");
    while ($datos=$sql->fetch_object()){?> 
    <tr>
    <th scope="row"><?=$datos->id?></th>
    <td><?= $datos->ejeTematico?></td>
    <td><?= $datos->InstituciónParticipación?></td>
    <td><?= $datos->nombrePrograma?></td>
    <td><?= $datos->fichaPrograma?></td>
    <td><?= $datos->nombrePonente?></td>
    <td><?= $datos->CorreoContacto?></td>
    <td><?= $datos->NúmeroTeléfono?></td>
    <td><?= $datos->tituloProyecto?></td>
    <td><?= $datos->tipoProyecto?></td>
    <td><?= $datos->archivos?></td>

    <td>
      <div class="iconos">
      <div class="icon">
      <a href="editar2.php?id-ponente=<?php echo $datos->id?>"><i class='bx bxs-edit'></i></a>
      </div>
      </div>
      <div class="icon1">
      <a href="./controlador.php ?id-ponente=<?php echo $datos->id?>"><i class='bx bx-trash'></i></a>
      </div>
      </div>
    </td>
    </tr>
    <?php }
    ?>
  </table>
  </tbody>
  <tbody class="table-group-divider">
  <table class="table">
  <thead class="bg-info">
    <h2>poster</h2>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombreInstitucion</th>
      <th scope="col">nombrePonente</th>
      <th scope="col">correo</th>
      <th scope="col">telefono</th>
      <th scope="col">tituloProyecto</th>
      <th scope="col">archivos</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
   
    $sql = $conexion->query("SELECT * FROM poster");
    while ($datos=$sql->fetch_object()){?> 
    <tr>
    <th scope="row"><?=$datos->id?></th>
    <td><?= $datos->nombreInstitucion?></td>
    <td><?= $datos->nombrePonenten?></td>
    <td><?= $datos->correo?></td>
    <td><?= $datos->telefono?></td>
    <td><?= $datos->tituloProyecto?></td>
    <td><?= $datos->archivos?></td>
       <td>
      <div class="iconos">
      <div class="icon">
      <a href="./editar3.php?id-poster=<?php echo $datos->id?>"><i class='bx bxs-edit'></i></a>
      </div>
      <div class="icon1">
      <a href="./controlador.php?id-poster=<?php echo $datos->id?>"class="btn btn-small btn-danger"><i class='bx bx-trash'></i></a>
      </div>
      </div>
    </td>
    </tr>
    <?php }
     ?>
    </table>
  </tbody>
  <table class="table">
<thead class="bg-info">
    <h2>Robotica</h2>
    <tr>
      <th scope="col">id</th>
      <th scope="col">categoria</th>
      <th scope="col">nombreInstitucion</th>
      <th scope="col">nombreParticipantes </th>
      <th scope="col">correo</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    $sql = $conexion->query("SELECT * FROM robotica ");
    while ($datos=$sql->fetch_object()){?> 
    <tr>
    <th scope="row"><?= $datos->id?></th>
    <td><?= $datos->categoria?></td>
    <td><?= $datos->nombreInstitucion?></td>
    <td><?= $datos->nombreParticipantes?></td>
    <td><?= $datos->correo?></td>
    <td><?= $datos->telefono?></td>

    <td>
      <div class="iconos">
      <div class="icon">
      <a href="./editar4.php?id-robotica=<?php echo $datos->id?>"><i class='bx bxs-edit'></i></a>
      </div>
      <div class="icon1">
      <a href="./controlador.php?id-robotica=<?=$datos->id?>"class="btn btn-small btn-danger"><i class='bx bx-trash'></i></a>
      </div>
      </div>
    </td>
    </tr>
    <?php }
    ?>
    </tr>
    </table>
  </tbody>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
crossorigin="anonymous"></script>
</body>
</html>
<style>

  body{
   
    justify-content: center;
    align-items: center;
    text-align: center;
    display:flex;
    flex-direction: column;
    grid: 1rem;

  }
  
  .iconos{
    display: flex;
    

  }
  .icon{
    
    background-color: yellow;
    width: 40px;
    height: 40px;
  }
  .icon i{
    color: #000000;
    padding: 10px;

    
  }
  .icon1{
    background-color: red;
    width: 40px;
    height: 40px;
  }
  .icon1 i{
    color: #000000;
    padding: 10px;
  }
  
</style>