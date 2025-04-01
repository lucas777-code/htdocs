<?php
include 'conexao.php';

$sql = "SELECT nome FROM pessoas";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()){
    echo "<h1> Nome: " . htmlspecialchars($row['nome'])."</h1>";
}
?>