<?php
trait Consignment{
    public string $day;
    public string $deliveryBy;

    public function getInfoDelivery (){
        return $this->day . ";" . $this->deliveryBy;
    }

    public function getDay(){
        return $this->day;
    }

    public function getDeliveryBy(){
        return $this->deliveryBy;
    }
}
?>