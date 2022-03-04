<?php
//Evaluar la seleccion del usuario
    if(isset($_POST["enviar"]))
    {
        $seleccion = $_POST["seleccion"];
        INCLUDE $seleccion . ".php"; //el punto se utiliza para concatenar
    }else{
        INCLUDE "es.php";    
    }
    
?>
<div>
    <form action="" method="POST">
        <select name="seleccion" id="">
            <option value="en">English</option>
            <option value="es">Español</option>
        </select>
        <input type="submit" name="enviar" value="cambiar">
    </form>
    <h2><?php echo TITLE;?></h2>
    <h3><?php echo SUBTITLE;?></h3>
</div>