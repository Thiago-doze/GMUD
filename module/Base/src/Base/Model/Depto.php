<?php

namespace Application\Model;

class Depto{
    private $id;
    private $nome;
    private $descricao;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->nome = (!empty($data['nome'])) ? $data['nome'] : null;
        $this->descricao = (!empty($data['descricao'])) ? $data['descricao'] : null;
    }
}
