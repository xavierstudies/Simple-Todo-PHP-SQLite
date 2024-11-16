<?php

$action = $_GET['action'];
$id = $_GET['rowid'];
$status = !$_GET['status'];

if ($action == "setStatus") {

    $sqlite = new SQLite3('data/todo.db');

    $query = "update tasks set is_done=? where rowid=?";
    $pstm = $sqlite->prepare($query);
    $pstm->bindValue(1, $status, SQLITE3_INTEGER);
    $pstm->bindValue(2, $id, SQLITE3_INTEGER);

    if ($pstm->execute()) {
        $sqlite->close();
        header("Location: index.php");
    } else {
    }
    $sqlite->lastErrorCode();
}
