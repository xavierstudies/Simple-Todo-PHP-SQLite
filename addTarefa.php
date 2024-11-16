<?php

$tarefa = $_POST['tarefa'];

$sqlite = new SQLite3('todo.db');

$query = "insert into tasks(tarefa) values (?)";
$pstm = $sqlite->prepare($query);
$pstm->bindValue(1, $tarefa,SQLITE3_TEXT);

if($pstm->execute()){
    header("Location: index.php");
}else{
}    $sqlite->lastErrorCode();
