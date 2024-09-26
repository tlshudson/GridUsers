<h1>Listar Usuários</h1>

<?php
    $sql = "SELECT * FROM `usuarios`";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        while ($row =$res->fecth_object()) {
            // print $row->id;
            print $row->nome;
            print $row->email;
            print $row->data_nasc;
        }
    } else {
            print "<p class='alert alert-danger'>Não foram encontrados registros</p>";
        }
?>