<?php

namespace Application\Model;

class Segmento{
    private $id;
    private $descricao;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->descricao = (!empty($data['descricao'])) ? $data['descricao'] : null;
    }
}
