<?php
class Chasis {
  
  public $id;

  public function __construct($id){
      $this->id = $id;
  }

  public function getId() {
      return $this -> id;
  }  

}
?>