<?php



class Contactsmod extends DBconfig{


    public function contactinfo(){

        $stmt = $this->db()->prepare("SELECT * FROM contact");
        if(!$stmt->execute([])){
            $stmt = null;
            echo "error sql connect";
            exit();
        }

        $contact = $stmt->fetchAll();
        return $contact;
        
    }
    public function deletepost($id){
        $query = new queries;
        $info = $query->delete("contact","contact_id",$id);
    }


}


?>