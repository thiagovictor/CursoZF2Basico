<?php

namespace Livraria\Model;

class CartegoriaService {
    /**
     * @var Livraria\Model\CartegoriaTable
     */
    protected  $cartegoriaTable;
    
    public function __construct(CartegoriaTable $table) {
        $this->cartegoriaTable = $table;        
    }
    public function fetchAll(){
        $resultSet = $this->cartegoriaTable->select();
        return $resultSet;
    }
    
}
