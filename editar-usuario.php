<h1>Editar Usuários</h1>
<?php
    $sql = "SELECT * FROM `usuarios` WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <input type="hidden" name="id" value="<?php print $row->id?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" name="email" value="<?php print $row->email?>" class="form-control">
    </div>       
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" value="<?php print $row->senha?>" class="form-control">
    </div>       
    <div class="mb-3">
        <label>Senha</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc?>" class="form-control">
    </div>   
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>    
</form>