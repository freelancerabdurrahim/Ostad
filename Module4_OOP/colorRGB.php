<?php
class RGB
{
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }
    function getColor()
    {
        return $this->color;
    }
    public function getRGBColor()
    {
        return array($this->red, $this->green, $this->blue);
    }
    public function redRGBColor()
    {
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }
    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }
    private function parseColor()
    {
        if ($this->color) {
            list($this->red, $this->green, $this->blue) = $colors = sscanf($this->color, '%02x%02x%02x');
        } else {
            list($this->red, $this->green, $this->blue) = $colors = array(0, 0, 0);
        }
    }

    public function redRed()
    {
        return ($this->red);
    }

    public function redGreen()
    {
        return ($this->green);
    }

    public function redBlue()
    {
        return ($this->blue);
    }
}

$myColor = new RGB("#ffffff");
$myColor->redRGBColor();
// echo $myColor->redBlue();