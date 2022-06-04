<?php 

include_once "../lib/Database.php";
include_once "../helpers/Format.php";

class Register{
    public $db;
    public $format;

    //Create instance of Database and Format class
     public function __construct(){
         $this->db = new Database();
         $this->format = new Format();
     }

     public function AddUser($data){

        
        $name = $this->format->validation($data['name']);
        $email = $this->format->validation($data['email']);
        $phone = $this->format->validation($data['phone']);
        $password = $this->format->validation($data['password']);
        $verify_token = md5(rand());

        //Check existing email
        // $email_query = "SELECT * FROM tbl_user WHERE email = '$email' ";
        // $checkEmail = $this->db->select($email_query);

        // if($checkEmail > 0){
        //     $error " This email is already in used";
        //     return $error;
        // }
        //Check for empty data
        if(empty($name) || empty($email) || empty($phone) || empty($password)){
            $error = "Field must not be empty";
            return $error;

        }

     }
}

?>