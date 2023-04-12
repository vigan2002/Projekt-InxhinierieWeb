<?php

class Contacts {

    public function shtokontaktin(){
       if(isset($_POST['submit'])){
        $emri = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $post_date = date('d-m-y');

        include $_SERVER['DOCUMENT_ROOT'].'../controller/Contact/Contact.class.php';  

        $opa = new Contact($emri,$email,$subject,$message,$post_date);
        $opa->contactmano();

       } 
    }
}


?>