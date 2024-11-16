<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<div>
    <div style="width:50%; margin:auto">
        <h1><i class="bi bi-card-checklist"></i> TODO LIST</h1>
        <form action="addTarefa.php" method="post">
            <div class="mb-3">
                <label for="tarefa" class="form-label">Tarefa:</label>
                <input type="text" name="tarefa" class="form-control" id="" placeholder="Lavar Louça">
            </div>
            <input type="submit" value="Adicionar">
        </form>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Tarefa</th>
                <th colspan="2">Opções</th>
            </tr>

            <?php

            $sqlite = new SQLite3('todo.db');

            $search = $sqlite->query("select rowid,* from tasks");

            while ($table = $search->fetchArray(SQLITE3_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $table['rowid'] . "</td>";
                if ($table['is_done'] == 1) {
                    echo "<td id='tarefaText' style='text-decoration-line:line-through'>" . $table['tarefa'] . "</td>";
                } else {
                    echo "<td id='tarefaText'>" . $table['tarefa'] . "</td>";
                }
                //echo "<td id='status'>" . $table['is_done'] . "</td>";
                echo "<td><a href='deleteTarefa.php?rowid={$table['rowid']}'><button class='btn btn-danger'><i class='bi bi-trash'></i> Delete</button></a>" . '</td>';
                echo "<td><a href='updateTarefa.php?action=setStatus&rowid={$table['rowid']}&status={$table['is_done']}'><button class='btn btn-primary' id='btnSetDone'><i class='bi bi-check'></i> Done</button></a>" . '</td>';
                echo "</tr>";
            }

            ?>
        </table>
    </div>
    </body>

</html>