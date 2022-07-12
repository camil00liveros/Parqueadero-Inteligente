<?php

$conexion=mysqli_connect("localhost","id17727959_usuario","#AEHXo>2[bU}_v[S","id17727959_usuarios");
?>
<!DOCTYPE html>
<html lang="es">
<head>

<meta name viewport" content="width-device-width: initial-scale-1.0">

<title>Ejemplo de diseño adaptativo</title>
<link href="colors.css" rel="stylesheet" type="text/css" />
<link href="base.css" rel="stylesheet" type="text/css" />
<link href="great.css" rel="stylesheet" type="text/css" media="screen and (min-width: 981px)" /> 
<link href="medium.css" rel="stylesheet" type="text/css" media="screen and (min-width: 481px) and (max-width: 980px)" /> 
<link href="mini.css" rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  
<header>

<h1>Parquea Unicauca</h1>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
     <input class="logOut" type="button" onclick="location.href='index.html'" value="Log Out" />
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"></div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"></div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"></div>
</div>

</header>


<div id="wrapper">


<section id="main-section">
<h2>Mi contenido</h2>

<article>
<?php 
    $idd=$_GET["id"];
    $estado = $_GET["estado"];

     ?>
  <table class="table table-dark table-striped">
      <caption>List of Bahias</caption>
      <thead>
        <tr>
          <th scope="col">Numero #</th>
          <th scope="col">Bahias</th>
          <th scope="col">Estado</th>
    
        </tr>
      </thead>
      <tbody>
        <?php 
        
        $consulta ="UPDATE ultrasonico SET `id`='$idd',`estado`='$estado' WHERE id=1";
        $resultado=mysqli_query($conexion,$consulta);
    
        $sql="SELECT * from ultrasonico";
        $result=mysqli_query($conexion,$sql);
        $i=0;
       
        
        while ($mostrar=mysqli_fetch_array($result)){
        $i=$i+1;
        ?>
        <tr>
        
        <th scope="row"> <?php echo $i?></th>
          <td> <?php echo "Bahia #: ".$mostrar['id']?></td>
          <td> <?php if ($mostrar['estado']==0){echo"Disponible";}else{echo"ocupado";} ?></td>
 
        </tr>
      <?php
        }
        ?>
      </tbody>
    </table>
</article>
</section>
</div>
<footer>
<p> Desarrolladores:</p>
<p>Camilo Andres Oliveros Chacon</p>
<p>Elkin David Aguilar</p>
<p>Tatiana Cosme</p>
<p>Oscar muñoz</p>
<p>Oliver muñoz</p>

<select class="display-mini">
<option>Uno</option>
<option>Dos</option>
<option>Tres</option>
</select>

</footer>

</body>
</html>