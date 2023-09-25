<?php 

final class Owner 
{
    private $name;
    private $address;
    private $zipCode;
    private $phone;
    private $email;

    public function __CONSTRUCT($name, $address ,$zipCode, $phone, $email) {
        $this->name     = $name;
        $this->address  = $address;
        $this->zipCode  = $zipCode;
        $this->phone    = $phone;
        $this->email    = $email;
        
    }
}


?>