    <?php 

        require_once("Animal.php");
        
        final class Pet extends Animal 
        {
            public  $name; 
            public  $birthday;  
            public  $age;
            
            public function calculeAge()  
            {
                $today        = new DateTime();
                $dateBirthday = new DateTime($this->birthday);
                $dateAge      = $dateBirthday->diff($today);

                return $dateAge->y;

            }
            public function setProp($name, $birthday, $type = "Cat") 
            {   
                $this->type     = $type;
                $this->name     = $name;
                $this->birthday = $birthday;
                $this->age      = $this->calculeAge();
            }
        
            public function getProp() 
            {
                return 
                "
                    <ul>
                        <li> <small> Type :</small>     $this->type
                        <li> <small> Name :</small>     $this->name 
                        <li> <small> Birthday :</small> $this->birthday 
                        <li> <small> Age :</small>      $this->age
                    </ul>      
                ";
            }
        }    
    ?>