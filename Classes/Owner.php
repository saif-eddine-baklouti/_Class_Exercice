<?php 

final class Owner 
{
    private $name ;
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
    public function getProp() {
        return 
        "
            <ul>
                <li> nom     : $this->name
                <li> address : $this->address 
                <li> zipCode : $this->zipCode 
                <li> phone   : $this->phone  
                <li> email   : $this->email  
            </ul>    
        ";
    }

}


?>