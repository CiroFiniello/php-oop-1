<?php 
class Movie{
    public $title;
    public $year;

    public function __construct($_title, $_year)
    {
        $this->title =$_title;
        $this->year =$_year;
    }
    public function getData(){
        return 
        "Title: {$this->title},
        Year: {$this->year}"; 
        
    }
}
?>