<?php

namespace Application\Model;

class Usuario{
    private $id;
    private $referencia;
    private $titulo;
    private $justificativa;
    private $objetivo;
    private $naoExecucao;
    private $impacto;
    private $consideracao;
    private $enderecoIC;
    private $planoTeste;
    private $data;
    private $status;
    private $contadorAux;
    
    public function exchangeArray($data){
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->referencia = (!empty($data['referencia'])) ? $data['referencia'] : null;
        $this->titulo = (!empty($data['titulo'])) ? $data['titulo'] : null;
        $this->justificativa = (!empty($data['justificativa'])) ? $data['justificativa'] : null;
        $this->objetivo = (!empty($data['objetivo'])) ? $data['objetivo'] : null;
        $this->naoExecucao = (!empty($data['naoExecucao'])) ? $data['naoExecucao'] : null;
        $this->impacto = (!empty($data['impacto'])) ? $data['impcato'] : null;
        $this->consideracao = (!empty($data['consideracao'])) ? $data['consideracao'] : null;
        $this->enderecoIC = (!empty($data['enderecoIC'])) ? $data['enderecoIC'] : null;
        $this->planoTeste = (!empty($data['planoTeste'])) ? $data['planoTeste'] : null;
        $this->data = (!empty($data['data'])) ? $data['data'] : null;
        $this->status = (!empty($data['status'])) ? $data['status'] : null;
        $this->contadorAux = (!empty($data['contadorAux'])) ? $data['contadorAux'] : null;
    }
}

