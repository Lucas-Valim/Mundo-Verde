<?php
class PontoColeta {
    
    private $id;
    private $name;
    private $address;
    private $lat;
    private $lng;
    private $id_descarte;
   

    public function __construct( $id, $name, $address,  $lat, $lng, $id_descarte)
    {
        $this->id=$id;
        $this->name=$name;
        $this->address=$address;
        $this->lat=$lat;
        $this->lng=$lng; 
        $this->id_descarte=$id_descarte;
    }

    public function getId() { return $this->id; }
    public function setId($id) {$this->id = $id;}

    public function getName() { return $this->name; }
    public function setName($name) {$this->name = $name;}

    public function getAddress() { return $this->address; }
    public function setAddress($address) {$this->address = $address;}

    public function getLat() { return $this->lat; }
    public function setLat($lat) {$this->lat = $lat;}

    public function getLng() { return $this->lng; }
    public function setLng($lng) {$this->lng = $lng;}

    public function getId_descarte() { return $this->id_descarte; }
    public function setId_descarte($id_descarte) {$this->id_descarte = $id_descarte;}

}
?>