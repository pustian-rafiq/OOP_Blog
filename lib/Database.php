<?php 

class Database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $password = DB_PASSWORD;
    public $database = DB_NAME;

    public $link;
    public $error;

    public function __construct(){
        $this->dbConnect();
    }

    public function dbConnect(){
        $this->link = mysql_connect($this->host,$this->user,$this->password,$this->database);

        if(!$this->link){
            $this->error = 'Database connection failed';
            return false;
        }
    }

    //Select query from database
    public function select($query){
        $result = mysql_query($this->link,$query) or die($this->link->error.__LINE__);

        if(mysql_num_rows($result) > 0){
            return $result;
        }else{
            return false;
        }
    }

    //Insert query from database
    public function insert($query){
        $result = mysql_query($this->link,$query) or die($this->link->error.__LINE__);

        if($result){
            return $result;
        }else{
            return false;
        }
    }
    //Update query from database
    public function update($query){
        $result = mysql_query($this->link,$query) or die($this->link->error.__LINE__);

        if($result){
            return $result;
        }else{
            return false;
        }
    }
    //Delete query from database
    public function delete($query){
        $result = mysql_query($this->link,$query) or die($this->link->error.__LINE__);

        if($result){
            return $result;
        }else{
            return false;
        }
    }
}


?>