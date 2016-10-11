<?php

namespace Application\Model;

class Usuario{
    private $id;
    private $nome;
    private $matricula;
    private $login;
    private $senha;
    private $salt;
    private $status;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->nome = (!empty($data['nome'])) ? $data['nome'] : null;
        $this->matricula = (!empty($data['matricula'])) ? $data['matricula'] : null;
        $this->login = (!empty($data['login'])) ? $data['login'] : null;
        $this->senha = (!empty($data['senha'])) ? $data['senha'] : null;
        $this->salt = (!empty($data['salt'])) ? $data['salt'] : null;
        $this->status = (!empty($data['status'])) ? $data['status'] : null;
    }
}
