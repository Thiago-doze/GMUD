<?php

namespace Application\Model;

class Teste{
    private $id;
    private $descricao;
    private $localFile;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->descricao = (!empty($data['descricao'])) ? $data['descricao'] : null;
        $this->localFile = (!empty($data['localFile'])) ? $data['localFile'] : null;
    }
}
