<?php
namespace App\classes;
class Example

{
    public $name;
    public $email;
    public $mobile;
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;
    public $data =[];

    public function index()
    {





//     $this->firstName = 'Rohim';
//     $this->lastName = 'khan';
//   //  echo "Full name is ".$this->firstName." ".$this->lastName;
//     echo "Full name is ".$firstName." ".$lastName;

        /*
         * arithmetic operator
             binary operator (+,-,*,/<%)
             unary operator (++,--,(-),)
          *assingnment operator(=,+=,-=,/=,%=/.=)
         * conditional operator (>,>=,<,<=,==,!=,===,!==)
         * logical operator (&&,!,//)

                */

//        $this->x=10;
//        $this->y=20;
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';
//
//        $this->x =10;
//        $this->y = 20;
//
//        echo $this->x++;
//        echo '<br/>';
//        echo $this->x;

//        $this->x = 10;
//        $this->y = 20;
//        $this->z =30;

//        echo ($this->x > $this->y)|| ($this->y > $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>...<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>...<br/>';


//        echo $this->x += $this->y;
//        echo '<br/>';
//
//        echo $this->x -= $this->y;
//        echo '<br/>';
//
//        echo $this->x *= $this->y;
//        echo '<br/>';
//
//        echo $this->x /= $this->y;
//        echo '<br/>';
//
//        echo $this->x %= $this->y;
//        echo '<br/>';
//
//        echo $this->x .= $this->y;
//        echo '<br/>';

//        $this->x = 100;
//        if ($this->x > 20)
////
////        {
////            echo $this->x;
////        }
////        else
////        {
////            echo 'hello world';
////        }
///

//            $this->x =100;
//            if ($this->x > 200){
//                echo $this->x;
//            }
//            elseif ($this->x <200){
//                echo $this->x;
//            }
//

//            $this->x =10;
//
//            for ($this->y =1; $this->y <= 100; $this->y++)
//                {
//                    echo $this->y.'<br/>';
//                }



//        $this->x =100;
//        while ($this->x < 110)
//        {
//            echo 'hello world<br/>';
//            $this->x++;
//        }



//        $this->x =100;
//        do{
//            echo 'hello world<br/>';
//            $this->x++;
//        } while ($this->x < 110);


//            switch ($this->x)
//            {
//                case 10:
//                    echo 'hello world';
//
//                case 20:
//                    echo 'hello bangladesh';
//                case 30:
//                    echo 'hello bd';
//                case 40:
//                    echo 'hello Dhaka';
//               default:
//                    echo 'hello BITM';
//
//            }


        $this->data =[10,20,30, 'BITM', 100.200, true];
//        echo $this->data[0];
        foreach ($this->data as $item)
        {
            echo $item;
        }



    }



}