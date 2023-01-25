<?php
$status = false;

//vytvorit triedu konstruktor, set, get, metody

function logedSet($status) {
    return $status;
}

function logedGet() {
    //logedSet($status);
}

class Loged {
    // Properties
    public $status;
    public $color;
  
    // Methods
    function set_status($status) {
      $this->status = $status;
    }
    function get_status() {
      return $this->status;
    }
  }

?>