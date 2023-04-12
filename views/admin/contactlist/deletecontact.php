<?php


if(isset($_GET['deletecontactid'])){

    include '../../../model/Contacts.model.php';
    $post = new Contactsmod;
    $post->deletepost($_GET['deletecontactid']);
    utility::setmessage('success','Kontaki u fshij me sukses!!!','/contactlist');
    }


?>