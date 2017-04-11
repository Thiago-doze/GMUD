<?php

namespace Application\Model;

class UsuarioPerfil{
    private$id;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
    }
}
