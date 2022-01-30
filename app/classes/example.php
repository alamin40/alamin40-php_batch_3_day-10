<?php
namespace App\classes;
class example
{
    public $name;
    public $email;
    public $mobile;
    public $first_Name;
    public $second_Name;
    public $a;
    public $x;
    public $y;
    public $z;
    public $data = [];


    public function index()
    {
        $this->x = 05;
        $this->y = 10;
        $this->z = 30;


        $this->a = 100;

        $this->data = [10,202,30,40,'BITM', 100.200, true];

//        echo $this->data[9];
        foreach ($this->data as $item){
            echo $item;
            echo '<br/>';
        }






//        do{
//            echo 'This is null <br/>';
//            $this->a++;
//        }
//        while($this->a < 110);


//        while ($this->a < 110)
//        {
//            echo 'Hello Dhaka <br/>';
//            $this->a++;
//        }




//        for($this->a = 75; $this->a >= 25; $this->a--)
//        {
//            echo $this->a.' ';
//        }









//        switch ($this->x){
//            case 10:
//                echo 'Hello world';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'hello empty';
//        }

//        if($this->x > 200){
//            echo '200';
//        }
//        elseif ($this->x < 200){
//            echo $this->x;
//        }


//        if($this->x == 20){
//            echo $this->x;
//        }
//
//        else{
//            echo 'h';
//        }





//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';


//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br/>....<br/>';

//        echo $this->x >= $this->y;
//        echo $this->x <= $this->y;
//        echo $this->x == $this->y;

//        echo $this->x += $this->y;
//        echo '<br/>';
//        echo $this->x -= $this->y;
//        echo '<br/>';
//        echo $this->x *= $this->y;
//        echo '<br/>';
//        echo $this->x /= $this->y;
//        echo '<br/>';
//        echo $this->x %= $this->y;
//        echo '<br/>';
//        echo $this->x .= $this->y;
//        echo '<br/>';


//        echo -$this->x;

//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x;


//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;








//     $this->first_Name = "Rahim";
//     $this->second_Name = "Khan";
//
//
//     echo "Full name is " .$this->first_Name." ".$this->second_Name;
        /*

            *Arithmetic Operator
                * Binary Operator (+, -, *, /, %)
                * Unary Operator (++, --, (-) )
            *Assignment Operator
            *Conditional Operator
            *Logical Operator

        */



    }
}

