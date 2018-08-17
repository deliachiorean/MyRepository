<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 26/07/2018
 * Time: 14:03
 */

class Report
{
    public function getTitle()
    {
        return 'Report Title';
    }
    public function getDate()
    {
        return ' the date is 2016-04-21';
    }
    public function getContents()
    {
        return [
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
        ];
    }
    public function formatJson()
    {
        return json_encode($this->getContents());
    }
}


$rep= new Report();
//echo $rep->getTitle();
echo $rep->formatJson();


class Rectangle
{
    protected $width;
    protected $height;
    public function setHeight($height)
    {
        $this->height = $height;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function setWidth($width)
    {
        $this->width = $width;
    }
    public function getWidth()
    {
        return $this->width;
    }
    public function area()
    {
        return $this->height * $this->width;
    }
}
class Square extends Rectangle
{
    public function setHeight($value)
    {
        $this->width = $value;
        $this->height = $value;
    }
    public function setWidth($value)
    {
        $this->width = $value;
        $this->height = $value;
    }
}
class RectangleTest
{
    private $rectangle;
    public function __construct(Rectangle $rectangle)
    {
        $this->rectangle = $rectangle;
    }
    public function testArea()
    {
        $this->rectangle->setHeight(2);
        $this->rectangle->setWidth(3);
        // Expect rectangle's area to be 6
        return $this->rectangle->area();
    }
}
$re= new Rectangle();
$sq= new Square();
$rectangle= new RectangleTest($sq);
echo "<br>".$rectangle->testArea();
