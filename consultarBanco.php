<?php
//pode usar qualquer tipo de aspas sendo dupla ou simples. 
// $ = para declarar uma varianvel 
//conn = nome da variavel 
// contatenar no php é com . 

// //para comecar: 
// mysql =primeiro o tipo do banco - parametro do banco 
// host=localhost, nome da pasta - local onde esta o banco 
// , = para separar; 
// usuario do banco 
// , = sempre para separar; 
// senha que esta vazio; 
$conn = new PDO('mysql:host=localhost;dbname=db_cinebox','root','');

// comandos banco PRECISA estar em letra maiusculas; 
$query = 'SELECT * FROM tb_filmes';

// a funcao query chama a query com cifrão que é a variavel que ja foi definido para chamar uma funcao; 
//fetchAll para consulta tudo, todos os parametros; 
$resultado = $conn->query($query)->fetchAll();

//var_dump depuração - ver o que esta acontecendo; 
//prev para organizar o codigo - melhora a visualização;
//var_dump para ser o comando console.log ; 
//echo '<pre>';
//var_dump($resultado)

//foreach pega um array e passa por cada casa desse array 
//primeiro passa na lista de resultados e depois passa pela minha variavel nova e no singular; 
    // echo é como comando escreva. 
foreach ($resultado as $filme)
{
    echo '<p style="background-color:tomato">' . $filme ['nome'] . '</p>';
    echo '<br>';
}

?>