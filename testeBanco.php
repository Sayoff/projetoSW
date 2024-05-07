<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo ("<h4>Acessando o Banco de Dados</h4>");

    include_once 'acessarBanco.php';
    $bd = new acessarBanco();
    $bd-> abrirConexao();
    $sql = "INSERT INTO `usuario`(`cpf`, `nome`, `sobrenome`, `cidade`, `endereco`, `uf`, `telefone`, `email`, `login`, `senha`) VALUES ('222.222.222-22','TESTE','Segundo','Sampa','AV. 1','SP','1199999-9999',''email@email','User21','passw0rd%str0ng');";
    $bd->executarSQL($sql);
    $bd->fecharConexao();
    ?>
</body>
</html>