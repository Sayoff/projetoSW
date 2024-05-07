<?php
    class Acesso {
        //atributos da classe
        private $ultimoAcesso;
        private $user_cpf;
        private $tempoDeAcesso;
        private $status;

        //método construtor
        public function _construct($ultimoAcesso,$user_cpf,$tempoDeAcesso,$status){
            $this-> ultimoAcesso = $ultimoAcesso;
            $this-> user_cpf = $user_cpf;
            $this-> tempoDeAcesso= $tempoDeAcesso;
            $this-> status = $status;
        }

        //metods de acesso
        //metodos get
        public function getUltimoAcesso(){
            return $this->ultimoAcesso;
        }
        public function getUser_cpf(){
            return $this->user_cpf;
        }
        public function getTempoDeAcesso(){
            return $this->tempoDeAcesso;
        }
        public function getStatus(){
            return $this->status;
        }

        //metods set
        public function setUltimoAcesso($ultimoAcesso){
                $this->ultimoAcesso = $ultimoAcesso;
        }
        public function setUser_cpf($user_cpf){
            $this->user_cpf= $user_cpf;
        }
        public function setTempoDeAcesso($tempoDeAcesso){
            $this->tempoDeAcesso= $tempoDeAcesso;
        }
        public function setStatus($status){
            $this->status = $status;
        }


        //outros metods

    }

?>