<?php 

class Stanza {
    
    public $id;

    public $room_number;

    public $floor;

    public $beds;

    public function __construct($_id, $_room_number, $_floor, $_beds) {
        $this->id = $_id;
        $this->room_number = $_room_number;
        $this->floor = $_floor;
        $this->beds = $_beds;
    }

    public function stampaStanza() {

        // $this->beds = $beds;

        echo 'id stanza: ' . $this->id . ' numero stanza: ' . $this->room_number 
        . ' piano: ' . $this->floor . ' numero posti letto disponibili: ' . $this->beds . '<br>';
    }
}

// $camera_del_vescovo = new Stanza(1, '101', 1);





?>