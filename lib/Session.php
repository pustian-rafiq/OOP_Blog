<?php 

class Session{

    //Session start
    public static function init() {
        session_start();
    }

    //Set session
    public static function set($key, $value) {
       $_SESSION[$key] = $value;
    }

    // Get Session
    public static function get($key) {
       if(isset($_SESSION[$key])){
           return $_SESSION[$key];
       }else{
           return false;
       }
    }

    //Check login
    public static function checkLogin() {
        self::init();
        if(self::get('login') == true){
            header('Location:index.php');
        }
    }

    //Check session
    public static function checkSession() {
        self::init();
        if(self::get('login') ==false){
            self::destroy(); 
            header('Location:index.php');
        }
    }

    // Destroy session
    public static function destroy() {
      session_destroy();
    }
}


?>