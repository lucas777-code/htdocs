<?php
// lendo o conteudo do arquivo
$dados = json_decode(file_get_contents("dados.json"),
true);
// verificando se a converção foi bem sucedida
if(!is_array($dados)){
    $dados = [];
}
// pegou as informações dos input
$novoDado = [
    "nome" => $_POST["nome"],
    "data" => $_POST["data"],
    "idade" => $_POST["idade"]
];

$dados [] = $novoDado;

file_put_contents("dados.json" , json_encode($dados,
JSON_PRETTY_PRINT));

echo "Dados salvos com sucesso!"; 
header("refresh:1;url=index.php");
exit();
?>