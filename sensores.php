<?php
    //if(isset($_POST['v'])) 
    //Para capturar o corpo JSON
    $json_convertido = json_decode(file_get_contents('php://input'), true);

    //Exibindo os dados enviados para seu arquivo PHP
    echo print_r($json_convertido,true);
?>
