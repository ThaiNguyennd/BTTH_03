<?php
    class Member{
        private $id;
        private $username;
        private $password;
        public function __construct($id,$username, $password){
            $this->id= $id;
            $this->username = $username;
            $this->password = $password;
        }
        public function getId()
        {
            return $this->id;
        }
    
        public function setId($id)
        {
            $this->id = $id;
        }
    
        public function getUser()
        {
            return $this->username;
        }
    
        public function setUser($username)
        {
            $this->username = $username;
        }
    
        public function getPassword()
        {
            return $this->password;
        }
    
        public function setPassword($password)
        {
            $this->password = $password;
        }
    }
    
?>