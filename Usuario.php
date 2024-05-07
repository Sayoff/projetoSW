<?php
class Usuario {
    // Atributos da classe
    private $user_nome;
    private $user_sobrenome;
    private $user_cpf;
    private $user_cidade;
    private $user_uf;
    private $user_endereco;
    private $user_email;
    private $user_tel;
    private $user_login;
    private $user_senha;

    // Método construtor
    public function __construct($user_nome, $user_sobrenome, $user_cpf, $user_cidade, $user_uf, $user_endereco, $user_email, $user_tel, $user_login, $user_senha) {
        $this->user_nome = $user_nome;
        $this->user_sobrenome = $user_sobrenome;
        $this->user_cpf = $user_cpf;
        $this->user_cidade = $user_cidade;
        $this->user_uf = $user_uf;
        $this->user_endereco = $user_endereco;
        $this->user_email = $user_email;
        $this->user_tel = $user_tel;
        $this->user_login = $user_login;
        $this->user_senha = $user_senha;
    }

    // Métodos de acesso (getters)
    public function getUserNome() {
        return $this->user_nome;
    }

    public function getUserSobrenome() {
        return $this->user_sobrenome;
    }

    public function getUserCpf() {
        return $this->user_cpf;
    }

    public function getUserCidade() {
        return $this->user_cidade;
    }

    public function getUserUf() {
        return $this->user_uf;
    }

    public function getUserEndereco() {
        return $this->user_endereco;
    }

    public function getUserEmail() {
        return $this->user_email;
    }

    public function getUserTel() {
        return $this->user_tel;
    }

    public function getUserLogin() {
        return $this->user_login;
    }

    public function getUserSenha() {
        return $this->user_senha;
    }

    // Métodos de modificação (setters)
    public function setUserNome($user_nome) {
        $this->user_nome = $user_nome;
    }

    public function setUserSobrenome($user_sobrenome) {
        $this->user_sobrenome = $user_sobrenome;
    }

    public function setUserCpf($user_cpf) {
        $this->user_cpf = $user_cpf;
    }

    public function setUserCidade($user_cidade) {
        $this->user_cidade = $user_cidade;
    }

    public function setUserUf($user_uf) {
        $this->user_uf = $user_uf;
    }

    public function setUserEndereco($user_endereco) {
        $this->user_endereco = $user_endereco;
    }

    public function setUserEmail($user_email) {
        $this->user_email = $user_email;
    }

    public function setUserTel($user_tel) {
        $this->user_tel = $user_tel;
    }

    public function setUserLogin($user_login) {
        $this->user_login = $user_login;
    }

    public function setUserSenha($user_senha) {
        $this->user_senha = $user_senha;
    }
}
?>
