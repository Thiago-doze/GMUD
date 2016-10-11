<?php

namespace Application\Model;

class Perfil{
    private $id;
    private $nome;
    private $descricao;
    private $nivel;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->nome = (!empty($data['nome'])) ? $data['nome'] : null;
        $this->descricao = (!empty($data['descricao'])) ? $data['descricao'] : null;
        $this->nivel = (!empty($data['nivel'])) ? $data['nivel'] : null;
    }
}
