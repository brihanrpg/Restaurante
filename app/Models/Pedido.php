<?php

namespace Models;
use Core\Model;


class Produto extends Model{
    protected $table = 'pedidos';
    protected $columns = ['id',
                           'atendimentos_id',
                           'produtos_id',
                           'quantidade',
                           'valor_un',
                           'situcao',
                           'saida_data',
                           'entrega_data',
                        ];
    
    protected $__protected_delete = true;

    protected $__audit_date = true;
}