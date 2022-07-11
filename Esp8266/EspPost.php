<?php

include'conexion.php';

if ($con) {
    echo "Conexão deu certo poha ";
    
    print_r($_POST);

    if(isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        echo " nome : ".$nome;
    }
 
    if(isset($_POST['id_user'])) { 
        $id = $_POST['id_user'];
        
        echo "id:".$id;
        
        
        $consulta = "INSERT INTO usuario(nome,id_user) VALUES ('$nome','$id')";
       // $consulta = "UPDATE DHT11 SET Temperatura='$temperatura',Humedad='$humedad' WHERE Id = 1";
        $resultado = mysqli_query($con, $consulta);
        if ($resultado){
            echo " Registo en base de datos OK! ";
        } else {
            echo " Falla! Registro BD";
        }
    }
    
    
} else {
    echo "Falla! conexion con Base de datos ";   
}


?>