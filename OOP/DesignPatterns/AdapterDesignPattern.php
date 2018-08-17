<?php
/**
 * Created by PhpStorm.
 * User: dchiorean
 * Date: 26/07/2018
 * Time: 10:19
 */
class SimpleBook{
    private $autor;
    private $titlu;
    function __construct($a,$t){
        $this->autor=$a;
        $this->titlu=$t;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getTitlu()
    {
        return $this->titlu;
    }

    /**
     * @param mixed $titlu
     */
    public function setTitlu($titlu)
    {
        $this->titlu = $titlu;
    }

}

class BookAdapter{
    private $book;
    function __construct( SimpleBook $simpleBook )
    {
        $this->book=$simpleBook;
    }
    function getAutorSiTitlu(){
        return "My book has the title:\" ".$this->book->getTitlu()."\" and the author is: \" ".$this->book->getAutor()."\"; ";
    }
}

$book= new SimpleBook("Autor1","Titlu1");
$bookAd=new BookAdapter($book);
echo $bookAd->getAutorSiTitlu();