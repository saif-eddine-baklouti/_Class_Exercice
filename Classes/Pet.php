    <?php 

        require_once("Animal.php");
        final class Pet extends Animal 
        {
            public  $name; 
            public  $birthday;  
            public  $age;
            
            public function calculeAge()  
            {
                $today = new DateTime();
                $dateBirthday = new DateTime($this->birthday);

                $dateAge = $dateBirthday->diff($today);
                
                return $dateAge->y;
                // if (!$dateBirthday) {
                //     return "pas de date de naissance";
                    
                // }
            }
            public function setProp($name, $birthday) 
            {
                $this->name = $name;
                $this->birthday = $birthday;
            }
        
            public function getProp() 
            {
                return "
                        $this->name <br>
                        $this->birthday
                        $this->age  
                        ";
            }
        }    
    ?>