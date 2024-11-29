<?php
$conn = new PDO('mysql:host=localhost;dbname=db_cinebox','root','');

//GET pega tudo que foi enviado atravez do metodo get, que a gente preeche la e envia; 
$dados =$_GET;

var_dump($dados);

$query= 'INSERT INTO tb_filmes (nome, classificacao_indicativa, valor_ingresso) VALUE (:nome, :classificacao_indicativa, :valor_ingresso)'; 

//prepare é para preparar para poder executar; 
//ainda nao estou com os valore que eu quero;
$preparando =$conn ->prepare($query);

//depois de peparar eu peço para executar; 
$preparando->execute([
    ':nome' => $dados['nome'],
    ':classificacao_indicativa' => $dados['indicativa'],
    ':valor_ingresso' => $dados ['valor']
]);