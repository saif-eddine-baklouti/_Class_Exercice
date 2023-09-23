<?php 

abstract class Animal 
{
    protected   $type;

    public function setProp($type) 
    {
        $this->type = $type;
    }

    public function getProp() 
    {
        return $this->type;
    }
}


?>