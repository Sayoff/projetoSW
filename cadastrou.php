<?php
    include "Usuario.php";
    include_once "AcessarBanco.php";

    $usuario = new Usuario("","","","","","","","","","");
    $usuario->setUserCpf($_GET['cpf']);
    $usuario->setUserNome($_GET['nome']);
    $usuario->setUserSobrenome($_GET['sobrenome']);
    $usuario->setUserEndereco($_GET['endereco']);
    $usuario->setUserCidade($_GET['cidade']);
    $usuario->setUserUf($_GET['uf']);
    $usuario->setUserEmail($_GET['email'].$_GET['email2']);
    $usuario->setUserTel($_GET['ddd'].$_GET['cell']);
    $usuario->setUserLogin($_GET['login']);
    $usuario->setUserSenha($_GET['senha']);

    var_dump($usuario);

    $bd = new AcessarBanco();
    $bd->abrirConexao();
    $sql = "INSERT INTO `usuario` (`cpf`, `nome`, `sobrenome`, `cidade`, `endereco`, `uf`, `telefone`, `email`, `login`, `senha`) VALUES ('".$usuario->getUserCpf()."','".$usuario->getUserNome()."','".$usuario->getUserSobrenome()."','".$usuario->getUserEndereco()."','".$usuario->getUserCidade()."','".$usuario->getUserUf()."','".$usuario->getUserEmail()."','".$usuario->getUserTel()."','".$usuario->getUserLogin()."','".$usuario->getUserSenha()."');";
    $bd->executarSQL($sql);
    $bd->fecharConexao();
    echo("Cadastrou!");
?>