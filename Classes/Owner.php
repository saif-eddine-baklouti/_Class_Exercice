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
                    <li> <small> nom : </small>     $this->name
                    <li> <small> address : </small> $this->address 
                    <li> <small> zipCode : </small> $this->zipCode 
                    <li> <small> phone   : </small> $this->phone  
                    <li> <small> email   : </small> $this->email  
                </ul>    
            ";
        }
    
    }
    
    
    ?>