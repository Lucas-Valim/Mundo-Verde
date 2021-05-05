<?php
class PontoColeta {
    
    private $id;
    private $name;
    private $address;
    private $lat;
    private $lng;
    private $type;
   

    public function __construct( $id, $name, $address,  $lat, $lng, $type)
    {
        $this->id=$id;
        $this->name=$name;
        $this->address=$address;
        $this->lat=$lat;
        $this->lng=$lng; 
        $this->type=$type;
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

    public function getType() { return $this->type; }
    public function setType($type) {$this->type = $type;}

}
?>