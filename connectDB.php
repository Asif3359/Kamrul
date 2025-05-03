<?php
$sa = "localhost";
$us = "root";
$ps = "";

// Create connection
$conn = new mysqli($sa, $us, $ps);

// Check connection
if ($conn->connect_error === true) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Hi Kamrul <br>";


// class Kamrul {
//     public $name;
//     public $email;
//     public $connect_error;

//     function __construct($name, $email, $connect_error) {
//         $this->name = $name;
//         $this->email = $email;
//         $this->connect_error = $connect_error;
//     }

//     function getName() {
//         return $this->name;
//     }

//     function getEmail() {
//         return $this->email;
//     }
// }

// $kamrul = new Kamrul("Kamrul", "kamrul@gmail.com", "ok");
// // $kamrul->name = "Kamrul";
// // $kamrul->email = "kamrul@gmail.com";
// // $kamrul->connect_error = "ok";

// echo $kamrul->getName() . "<br>";
// echo $kamrul->getEmail() . "<br>";
// echo $kamrul->connect_error . "<br>";