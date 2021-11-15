<?php

$id = $_POST['txtrecado'];
$nome = $_POST['txtnome'];
$turma = $_POST['optturma'];
$recado = $_POST['txtrecado'];

$sql = "insert into recados
            (id, nome, turma, recado)
        values
            ('$id','$nome', '$turma', '$recado')";

$conexao = new PDO('mysql:host=127.0.0.1;dbname=coments','root','');
$conexao->exec($sql);

echo "<h2>Recado gravado com sucesso</h2>";

?>