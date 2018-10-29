<?php 

/**
 * summary
 */
require 'people.php';

class Student extends People
{
    /**
     * summary
     */
    private $id;
    private $email;
    private $class;

    public function getId()
    {
    	return $this->id;
    }

    public function setId($id)
    {
    	$this->id = $id;
    }

    public function getEmail()
    {
    	return $this->email;
    }

    public function setEmail($email)
    {
    	$this->email = $email;
    }

    public function getClass()
    {
    	return $this->class;
    }

    public function setClass($class)
    {
    	$this->class = $class;
    }

    public function __construct()
    {
        
    }

}

 ?>