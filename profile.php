<?php
$conexion=mysqli_connect("localhost","id17727959_usuario","#AEHXo>2[bU}_v[S","id17727959_usuarios");

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
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
    <input class="logOut" type="button" onclick="location.href='home.php'" value="Home" />
  </li>
  <li class="nav-item" role="presentation">
    <input class="logOut" type="button" onclick="location.href='#'" value="Profile" />
  </li>
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

    <section id="main-section">
<h2>Mis Datos</h2>

<article>
  <table class="table table-dark table-striped">
      <caption>Datos</caption>
      <thead>
        <tr>
          <th scope="col">Usuario</th>
         <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
           <th scope="col">Cedula</th>
    
        </tr>
      </thead>
      <tbody>
        <?php 
    
        $sql="SELECT * FROM `usuarios` WHERE usuario='lol'";
        $result=mysqli_query($conexion,$sql);
        
        while ($mostrar=mysqli_fetch_array($result)){
    
        ?>
        <tr>
        
       
          <td> <?php echo  "Usuario: ".$mostrar['usuario']?></td>
          <td> <?php echo  "Usuario: ".$mostrar['nombre']?></td>
          <td> <?php echo  "Usuario: ".$mostrar['apellido']?></td>
          <td> <?php echo  "Usuario: ".$mostrar['cedula']?></td>
         
        </tr>
      <?php
        }
        ?>
      </tbody>
    </table>
</article>
</section>
 </body>
 </html>