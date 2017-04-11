<?php

namespace Application\Model;

class Atividade{
    private $id;
    private $dataHora;
    private $descricao;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->dataHora = (!empty($data['dataHora'])) ? $data['dataHora'] : null;
        $this->descricao = (!empty($data['descricao'])) ? $data['descricao'] : null;
    }
}
