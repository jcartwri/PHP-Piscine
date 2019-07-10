<?php

Class Color {

    public $red;
    public $green;
    public $blue;
    static $verbose = false;

    static function doc()
    {
        return (file_get_contents("Color.doc.txt") . PHP_EOL);
    }

    public function __construct($arr)
    {
        if (count($arr) == 1 or count($arr) == 3)
        {
            if (array_key_exists( 'rgb', $arr )) {
                $this->green = (int)(($arr['rgb'] >> 8) & 255);
                $this->red = (int)(($arr['rgb'] >> 16) & 255);
                $this->blue = (int)($arr['rgb'] & 255);
            }
            else
            {
                if (array_key_exists('red', $arr)) {
                    $this->red = (int)($arr['red']);
                }
                if (array_key_exists('blue', $arr)) {
                    $this->blue = (int)($arr['blue']);
                }
                if (array_key_exists('green', $arr)) {
                    $this->green = (int)($arr['green']);
                }
            }
            if (self::$verbose == true)
            {
                printf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
                echo " constructed". PHP_EOL;
            }
        }
        else
            echo "Wrong format" . PHP_EOL;
    }

    public function __toString()
    {
        return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue)));
    }

    public function hello() {
        printf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
    }

    public function __Destruct()
    {
        if (self::$verbose)
        {
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n",
                $this->red, $this->green, $this->blue);
        }
    }

    public function add($clr)
    {
        $new_clr = clone $this;
        $new_clr->red += $clr->red;
        $new_clr->green += $clr->green;
        $new_clr->blue += $clr->green;
        if (self::$verbose == true)
            echo $new_clr, " constructed" . PHP_EOL;
        return ($new_clr);
    }

    public function sub($clr)
    {
        $new_clr = clone $this;
        $new_clr->red -= $clr->red;
        $new_clr->green -= $clr->green;
        $new_clr->blue -= $clr->green;
        if (self::$verbose == true)
            echo $new_clr, " constructed" . PHP_EOL;
        return ($new_clr);
    }

    public function mult($val)
    {
        $new_clr = clone $this;
        $new_clr->red *= $val;
        $new_clr->green *= $val;
        $new_clr->blue *= $val;
        if (self::$verbose == true)
            echo $new_clr, " constructed" . PHP_EOL;
        return ($new_clr);
    }
}
