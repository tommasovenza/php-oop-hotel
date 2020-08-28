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

    public function stampaStanza($_beds) {

        // $this->beds = $beds;

        echo 'id stanza: ' . $this->id . ' numero stanza: ' . $this->room_number 
        . ' piano: ' . $this->floor . ' numero posti letto disponibili: ' . $_beds . '<br>';
    }
}

$camera_del_vescovo = new Stanza(1, '101', 1);





?>