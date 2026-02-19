<h1>Listar Usuários</h1>

<?php
    $sql = "SELECT * FROM usuarios";

    $res = pg_query($dbconn, $sql);

    $qtd = pg_num_rows($res);

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while ($row =pg_fetch_object($res)) {
            print "<tr>";
            print "<td>" . $row->id . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>" . $row->data_nascimento . "</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-info'>Editar</button>
            
                <button onclick=\"if(confirm('Deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>"; 
            print "</tr>";
        }
        print "</table>";
    } else {
            print "<p class='alert alert-danger'>Não foram encontrados registros</p>";
            print "<a class='link' href='index.php'>Voltar</a>";
        }
?>