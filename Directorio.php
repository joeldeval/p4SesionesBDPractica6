<?php
session_start();
if(!isset($_SESSION['codigo'])){
	header("Location: Sesion.php");
}
require_once('contacto.php');
require_once('listarContactos.php');

?>


<html>
  <head>
  <title>DIRECTORIO</title>
  <style type="text/css">
  #lblusu{
    margin-left: 32%;
  }
  #cerrarsesion{
    margin-left: 2%;
    width: 20%;
    background-color: white;
    color: grey;
    margin-top: -8%;
    
  }
  #usu{
    color: #555555;
    font-size: 100%;
    margin-left: 37%;

  }

  
  #nuevo{
      
    font-size: 190%;
    margin-left: 45%;
    background-color: white;
    margin-top: 5%;
    color: grey;
    
  }

  </style>


  </head>
  <body>

<?php
  echo "<form method='post' action='cerrarsesion.php'>
     <label id=lblusu>USUARIO: ".$_SESSION['codigo']."</label>
     <input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'>
     </form>";
     ?>


   <form method="post" action="Nuevo.php">
      
<input type="submit" id="nuevo" value="Nuevo" size="50" />
<h1>Mostrar los elementos</h1>
        <?php
            $modelo = new Contacto();
            $contactos = $modelo->encontrarTodos();
            $listar = new ListarContactos();
            $listar->contactos = $contactos;
            $listar->generaTabla();
        ?>
   
 </form>	
</body>

</html>
