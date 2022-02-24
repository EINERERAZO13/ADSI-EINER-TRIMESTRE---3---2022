<?php 
    //require llama al nombre del archivo para ser cargado en memoria RAM
    require_once("cliente.php");
    require_once("cuenta_bancaria.php");
    require_once("usuario.php");


    $objCliente = new cliente(100201100,"Juan Perez", 21);
    
    $objcliente = new cliente(100201100,"Juan Perez", 21);
    echo "Cedula: " . $objcliente->getCedula()."<br>";
    $objcliente->setCedula(20001001);
   

?>