<?php

class trip {

    private $id;
    private $departure;
    private $arrival;
    private $departureDateTime;
    private $arrivalDateTime;
    private $space;
    private $creatorId;

    public function __construct($id, $departure, $arrival, $departureDateTime, $arrivalDateTime, $space, $creatorId) {
        $this->id = $id;
        $this->departure = $departure;
        $this->arrival = $arrival;
        $this->departureDateTime = $departureDateTime;
        $this->arrivalDateTime = $arrivalDateTime;
        $this->space = $space;
        $this->creatorId = $creatorId;
    }

    public function getTrip(){
        return [
            'departure' => $this->departure,
            'arrival' => $this->arrival,
            'departureDateTime' => $this->departureDateTime,
            'arrivalDateTime' => $this->arrivalDateTime,
            'space' => $this->space,
            'creatorId' => $this->creatorId
        ];
    }

    public function setDeparture($departure){
        $this->departure = $departure;
    }

    public function setArrival($arrival){
        $this->arrival = $arrival;
    }

    public function setDepartureDateTime($departureDateTime){
        $this->departureDateTime = $departureDateTime;
    }

    public function setArrivalDateTime($arrivalDateTime){
        $this->arrivalDateTime = $arrivalDateTime;
    }

    public function setSpace($space){
        $this->space = $space;
    }


}