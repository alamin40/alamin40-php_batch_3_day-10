<?php
namespace App\classes;
class example
{
    public $name;
    public $email;
    public $mobile;
    public $first_Name;
    public $second_Name;


    public function index()
    {
     $this->first_Name = "Rahim";
     $this->second_Name = "Khan";


     echo "Full name is " .$this->first_Name." ".$this->second_Name;
    }
}

