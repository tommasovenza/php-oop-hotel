<?php 

class Stanza {
    
    public $id;

    public $room_number;

    public $floor;

    public $beds;

    public function __construct($_id, $_room_number, $_floor) {
        $this->id = $_id;
        $this->room_number = $_room_number;
        $this->floor = $_floor;
    }
}

$camera_del_vescovo = new Stanza(1, '101', 1);





?>