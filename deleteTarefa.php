<?php

$id = $_GET['rowid'];

$sqlite = new SQLite3('todo.db');

$query = "delete from tasks where rowid=?";
$pstm = $sqlite->prepare($query);
$pstm->bindValue(1, $id,SQLITE3_INTEGER);

if($pstm->execute()){
    $sqlite->close();
    header("Location: index.php");
}else{
}    $sqlite->lastErrorCode();
