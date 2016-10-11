<?php

namespace Application\Model;

class AprovacaGmud{
    private $id;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
    }
}
