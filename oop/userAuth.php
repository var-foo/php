<?php 
// PHP 5 

// class definition 
class userAuth { 
    // define properties 
    public $username; 
    private $passwd; 
    private $passwdFile; 
    private $_resultCode; 

    // constructor 
    // must be passed username and password 
    public function __construct($username, $password) { 
            $this->username = $username; 
            $this->passwd = $password; 
            $this->_resultCode = -1; 
    } 
     
    // used to set file to read for password data 
    public function setPasswdFile($file) { 
        $this->passwdFile = $file; 
    } 

    // returns: -1 if user does not exist 
    //           0 if user exists but password is incorrect 
    //           1 if username and password are correct 
    public function getResultCode() { 
        return $this->_resultCode; 
    } 
     
    public function authenticateUser() { 
        // make sure that the script has permission to read this file! 
        $data = file($this->passwdFile); 
     
        // iterate through file 
        foreach ($data as $line) { 
            $arr = explode(":", $line); 
            // if username matches 
            // test password 
            if ($arr[0] == $this->username) { 
                 
                // if match, user/pass combination is correct 
                // return 1 
                if ($arr[1] == $this->passwd) { 
                    $this->_resultCode = 1; 
                    break; 
                } 
                // otherwise return 0 
                else { 
                    $this->_resultCode = 0; 
                    break; 
                } 
            } 
        } 
    } 
// end class definition 
} 

?>