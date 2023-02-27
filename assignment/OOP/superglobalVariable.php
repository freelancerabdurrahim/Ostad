<?php
include 'Person.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $person = new Person();
    $person->setName( $name );
    $person->setEmail( $email );

    echo "Name: " . $person->getName() . "<br>";
    echo "Email: " . $person->getEmail();
}