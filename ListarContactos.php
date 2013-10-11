<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
#ID{
    color: blue;
}
#Nombre{
    color: blue;
}
</style>
</head>
<body>
<?php
class ListarContactos
{
    public $contactos;

    public function generaTabla()
    {
        echo '<table>';
        echo '<tr>';
        echo '<th id="ID">ID  </th>';
    echo '<th id="Nombre">  Nombre</th>';
    echo '<th id="AP">  Apellido Paterno</th>';
    echo '<th id="AM">  Apellido Materno</th>';
    echo '<th id="Direccion">  Direcci&oacute;n</th>';
        echo '<th id="Telefono">  TELEFONO</th>';
    echo '<th  id="CP">  CP</th>';
    echo '<th id="Op">  OPCIONES</th>';
               
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td>'.$contacto['idPersona']. '</td>';
            echo '<td>'.$contacto['Nombre'].'</td>';
                    echo '<td>'.$contacto['ApePaterno'].'</td>';
                    echo '<td>'.$contacto['ApeMaterno'].'</td>';
                    echo '<td>'.$contacto['Direccion'].'</td>';
                    echo '<td>'.$contacto['Telefono'].'</td>';
                    echo '<td>'.$contacto['CP'].'</td>';
                echo '<td><a href="eliminar.php?id='.$contacto['idPersona'].'"> Eliminar</a>
                <a href=" editar.php?id='.$contacto['idPersona'].'"> Editar</a>
                <a href="ver.php?id='.$contacto['idPersona'].'"> Ver</a>
                </td>';
                    
                    
                echo '</tr>';
            }
        echo '<table>';
    }
} 
?>

</body>
</html>
