<?php 
/**
 * summary
 */
class People
{
    /**
     * summary
     */
    private $name;
    private $birthday;
    public function __construct()
    {

    }


    public function getName()
    {
       	return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getBirthday()
    {
    	return $this->birthday;
    }

    public function setBirthday($birthday)
    {
    	$this->birthday = $birthday;
    }
}

 ?>