<?php
  echo "<pre>";
//Chamando o arquivo json.
$dadosJson = file_get_contents('arquivo.json');


//Decodificando o json para ser entendido pelo php.
$dadosJsondecodificados = json_decode($dadosJson);

//Mostrando o arquivo json em formato de array.
print_r($dadosJsondecodificados);

//Se houver erro no arquivo json é mostrado por essa função.
print_r(" Erro. ".json_last_error());

echo PHP_EOL;
//Percorrendo dados do arquivo json.
foreach($dadosJsondecodificados->clientes as $cliente){
        echo $cliente -> id. ' - '.$cliente -> nome. ' - ' . $cliente -> email . PHP_EOL;
}

echo "</pre>";

//Abaixo segue uma url do php para verificação do código de erro.

/*

https://www.php.net/manual/pt_BR/function.json-last-error.php

*/
?>

