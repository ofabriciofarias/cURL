<?php
//Bilioteca cURL
//Soluciona o problema para API`s em difernetes linguagens

//Usaremos o viacep como exemplo https://viacep.com.br/

$cep = "66025540";

//Link para o web service.

$link = "https://viacep.com.br/ws/$cep/json/";

//Acessando a biblioteca curl iniciando criando a variável ch para receber o valor do link
$ch = curl_init($link);

//Endereço, opção e valor
//Vamos usar duas opções pelo curl_setopt
//Vamos dizer que esperamos um retorno
//Diz que vai transferir CURLOPT_RETURNTRANSFER
//1 significa que quer voltar uma resposta
//0 significa que não quer
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//Vai verificar se funciona http, não vamos validar com https
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//Pegar a resposta
$response = curl_exec($ch);

curl_close($ch);

//$data = json_decode($response, true);
echo $response;
//print_r($data);


?>