<?php

namespace Application\Model;

class Aprovacao{
    private $id;
    private $data;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->data = (!empty($data['data'])) ? $data['data'] : null;
    }
}
