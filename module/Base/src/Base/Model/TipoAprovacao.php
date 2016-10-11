<?php

namespace Application\Model;

class TipoAprovacao{
    private$id;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
    }
}
