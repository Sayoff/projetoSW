<?php
    class AcessarBanco {
    private $servidorDB;
    private $portaDB;
    private $baseDeDadosDB;
    private $loginDB;
    private $senhaDB;
    private $conexao;

    public function __construct() {
        $this->servidorDB = "sql309.infinityfree.com";
        $this->portaDB = 3306; //trocar porta caso não for a padrão
        $this->baseDeDadosDB = "if0_36029646_vp_sistema";
        $this->loginDB = "if0_36029646";
        $this->senhaDB = "7N9dEVdc0p3Ju";
        $this->conexao = null;
    }

    // Getters
    public function getServidorDB() {
        return $this->servidorDB;
    }
    public function getPortaDB() {
        return $this->portaDB;
    }
    public function getBaseDeDadosDB() {
        return $this->baseDeDadosDB;
    }
    public function getLoginDB() {
        return $this->loginDB;
    }
    public function getSenhaDB() {
        return $this->senhaDB;
    }
    public function getConexao() {
        return $this->conexao;
    }

     // Setters
    public function setServidorDB($servidorDB) {
        $this->servidorDB = $servidorDB;
    }
    public function setPortaDB($portaDB) {
        $this->portaDB = $portaDB;
    }
    public function setBaseDeDadosDB($baseDeDadosDB) {
        $this->baseDeDadosDB = $baseDeDadosDB;
    }
    public function setLoginDB($loginDB) {
        $this->loginDB = $loginDB;
    }
    public function setSenhaDB($senhaDB) {
        $this->senhaDB = $senhaDB;
    }
    public function setConexao($conexao) {
        $this->conexao = $conexao;
    }
    public function abrirConexao() {
        try {
            $dsn = "mysql:host={$this->servidorDB};port={$this->portaDB};dbname={$this->baseDeDadosDB}";
            $this->conexao = new PDO($dsn, $this->loginDB, $this->senhaDB);
            // Definir modo de erro para exceções
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            // Configurar o charset para UTF-8
            $this->conexao->exec("SET NAMES 'utf8'");
        } catch (PDOException $e) {
                die("Erro na conexão: " . $e->getMessage());
        }
    }
    public function executarSQL($sql) {
        try {
            return $this->conexao->exec($sql);
        } catch (PDOException $e) {
            die("Erro ao executar SQL: " . $e->getMessage());
        }
    }
    public function consultarSQL($sql) {
        try {
            $stmt = $this->conexao->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Erro ao consultar SQL: " . $e->getMessage());
        }
    }
    public function fecharConexao() {
        if ($this->conexao !== null) {
            $this->conexao = null;
        }
    }
}

?>