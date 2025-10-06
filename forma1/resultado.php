<?php
    require 'operar.php';

    if(isset($_GET['numero1']) && isset($_GET['numero1'])!='' 
    && isset($_GET['numero2']) && isset($_GET['numero2'])!='' && isset($_GET['operacion'])) {
            $objOperar = new Operar();
            switch($_GET["operacion"]){
                case '+':
                    $res = $objOperar->sumar($_GET['numero1'], $_GET['numero2']);
                    break;
                case '-':
                    $res = $objOperar->restar($_GET['numero1'], $_GET['numero2']);
                    break;
                case '*': 
                    $res = $objOperar->multiplicar($_GET['numero1'], $_GET['numero2']);
                    break;
                case '/':
                    $res = $objOperar->dividir($_GET['numero1'], $_GET['numero2']);
                    break;
                }
            echo "El resultado es: ".$res;
    } else {
        echo "No se han recibido los datos correctamente";
    }    
?>