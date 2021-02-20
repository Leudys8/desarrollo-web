<?php

    include ('conexion.php');

   if(isset($_POST['check']) && $_POST['check'] == 'si'){
        
        try{
            if(isset($_POST['save'])){
                $name = $_POST['name'];
                $cedula = $_POST['cedula'];
                $telefono = $_POST['telefono'];
                $born = $_POST['born'];
                $covid = $_POST['covid'];
                $sexo = $_POST['sexo'];
                $recoger = $_POST['recoger'];
                $sangre = $_POST['sangre'];
    
                
            }else{
                echo "Imposble guardar los datos.";
            }
        }catch(Exception $e){
            echo "Lo sentimos, a ocurrido un error en el sistema. \n.
            Codigo del error: \n $e";
        }

   }else{
       echo "Debe asegurarse de que los datos proporcionados sean correctos.";
   }
   

?>