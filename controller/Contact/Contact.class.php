<?php

class Contact {

    private $emri;
    private $email;
    private $subject;
    private $message;
    private $data;

    public function __construct($emri,$email,$subject,$message,$data){

        $this->emri = $emri;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
        $this->data = $data;
    }


    public function contactmano(){

        if($this->empityinfo() == true){
            utility::setmessage('error','Te dhenat nuk duhet te jen te zbrazeta!!!!','/contactus');
            exit();
        }
        $query = new queries;
        $query->create("contact",["emri"=>$this->emri,"email"=>$this->email,"subject"=>$this->subject,"message"=>$this->message,"data"=>$this->data]);
        utility::setmessage('success','Letra u dergua me sukses','/contactus');
        exit();

    }


    private function empityinfo(){
        $result;
        if((empty($this->emri)) || (empty($this->email)) || (empty($this->subject)) || (empty($this->message)) || (empty($this->data))){
        
            $result = true;
        }else{
            $result = false;
        }
        return $result;

    }
}

?>