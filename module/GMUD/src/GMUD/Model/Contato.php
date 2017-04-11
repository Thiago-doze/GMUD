<?php

namespace Application\Model;

class Contato{
    private $id;
    private $valor;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->valor = (!empty($data['valor'])) ? $data['valor'] : null;
    }
}
