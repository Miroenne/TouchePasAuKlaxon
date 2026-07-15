<?php

class agency{

    private $id;
    private $Name;
    
    public function __construct(int $id, string $Name){
        $this->Name = $Name;
    }
    public function getAgencyById(int $id){
        $agency = Agency::find($id);
        return $agency;
    }

    public function getAgencies(){
        $agencies = agency::all();
        return $agencies;
    }
    public function setAgencyName(string $Name){
        $this->Name = $Name;
    }
    
}
