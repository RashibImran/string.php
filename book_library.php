
<?php

// 1) Create a Book class with private properties for title and availableCopies.
// 2) Create a Member class with a private property for name.
// 3) Implement methods in the Book class to borrow and return books. This borrowBook method should decrease the available copies and returnBook method should increase the available copies.
// 4) Implement methods in the Member class to borrow and return books. Here the borrowBook method should take book as an argument and returnBook method should also take book as an argument.
// 5) Write a PHP program to demonstrate the usage of the library system, including adding books to the library, adding members, borrowing books, returning books, and displaying the available books.
// 6) You have to create  2 books and 2 members. Member One has to borrow  book 1 and Member Two has to borrow  book 2.
// 7) For your reference we have provided a template.

class Book{
    // private $title="";
    public $availableCopies;

    public function __construct()
    {
        
        $this->availableCopies=5;
    }
    // public function add($x,$y){
    //     echo $x+$y;
    // }
    // public $books=[
    //     "book1"=>["name"=>"The Great Gatsby","availableCopies"=>5],
    //     "book2"=>["name"=>"To kill a Mockingbird","availableCopies"=>3]
    // ];
    
    // public $members=[
    //     "member1"=>["name"=>"John Doe"],
    //     "member2"=>["name"=>"Jane Smith"]
    // ];

    
    public function borrowBook($Copies,$status){
        if ($status=="Borrow"){
            $this->availableCopies=$this->availableCopies-$Copies;
            echo $this->availableCopies."\n";
        }
    }
    public function returnBook($Copies,$status){
        if ($status=="Return"){
            $this->availableCopies=$this->availableCopies+$Copies;
            echo $this->availableCopies;
        }
    }

}

$bookObj=new Book();

$bookObj->borrowBook(2,"Borrow");
$bookObj->returnBook(2,"Return");



