    <?php 
    
    abstract class Animal 
    {
        protected $type;
    
        abstract public function setProp($type, $name, $birthday); 
    
        abstract public function getProp(); 
    
    }
    
    ?>