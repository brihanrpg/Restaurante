<?php

namespace Models;
use Core\Model;


class Pessoa extends Model{
    protected $table = 'pessoas';
    private $user;
    protected $columns = ['id',
                           'nome',
                           'telefone',
                           'cpf',
                           'rg',
                           'rg_expedidor',
                           'email'];
    
    protected $__protected_delete = true;

    protected $__audit_date = true;

    public function getUser(){
        if(!$this->user instanceof Usuario && $this->isStorage()){
            $usuario = new Usuario();
            $this->usuario = $usuario->where('pessoas_id', '=', $this->id)->get();
        }
        return $this->usuario;
    }
}