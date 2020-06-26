<?php
// Definimos la clase
class Destiny{
     
    // Atributos
    public $destinyID;
    public $destinyName;
    public $image;
    public $amount;

    public function getDestinyID(){

        return $this->destinyID;
    }
     
    public function setDestinyID($destinyID){
        $this->destinyID = $destinyID;
    }

     public function getDestinyName(){

        return $this->destinyName;
    }
     
    public function setDestinyName($destinyName){
        $this->destinyName = $destinyName;
    }

    
   public function getImage(){
       return $this->image;
    }
     
    public function setImage($image){
        $this->image = $image;
    }

     public function getAmount(){
       return $this->amount;
    }
     
    public function setAmount($amount){
        $this->amout = $amount;
    }
     

}

?>
