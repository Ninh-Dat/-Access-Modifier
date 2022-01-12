<?php

class QuadraticEquation

{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

//    public function getDelta(){
////
//        return
//    }
    public function tinhPTBHai()
    {
        if ($this->a == 0) {
            echo "Phương trình bậc nhất";
        } else if ($this->a > 0) {
            $delta = ($this->b * $this->b) - (4 * $this->a * $this->c);

            if ($delta > 0) {
                echo "Phương trình có 2 nghiệm phân biệt";
                echo "<br>";
                echo" x1   = " . (-$this->b + sqrt($delta)) / (2 * $this->a);
                echo "<br>";
                echo" x2   = " . (-$this->b - sqrt($delta)) / (2 * $this->a);
            }
            else if ($delta ==0){
                echo "Phương trình có nghiệm kép";
                echo "<br>";
                echo "x1 = x2 =". -$this->b / (2*$this->a);
            }
            else{
                echo "Phương trình vô nghiệm";
            }
        }


    }

}
