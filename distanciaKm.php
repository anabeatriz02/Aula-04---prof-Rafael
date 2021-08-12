<link rel= "stylesheet" href="style.css">

<?php 

if (

    isset($_POST["localOrigem"]) && isset($_POST["localDestino"])
    
    && isset($_POST["distancia"]) && isset($_POST["pedagios"])
    
    ) {
    
    $localOrigem = $_POST["localOrigem"];
     
    $localDestino = $_POST["localDestino"];
    
    $distancia = $_POST["distancia"];
    
    $pedagios = $_POST["pedagios"];
    
    $calculo = ($distancia * 6) + ($pedagios * 9.40);

    /* += - é uma atribuição para se referir a atribuir e somar a uma formula ja existente*/
    
    echo "a Viagem de ". $localOrigem . " até " . $localDestino . " irá custar R$" . $calculo;
    
    }else{
        echo "Você não enviou os dados!";
        exit;
    }
    
?>
    
