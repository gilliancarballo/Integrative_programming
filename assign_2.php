<?php
    class User{

        public $name;
        public $username;
        public $email;
        

        function addFriend ($name, $username, $email){
            $this->name =$name;
                echo "{$this->name} Added a Friend";
        }

        function postStatus ($name, $username, $email){
            $this->name =$name;
                echo "{$this->name}Posted a Status";
        }


       
    }
    $nameko = new User();
    $nameko -> addFriend('Gillian, gilliancarballo, gillian.carballo0319@gmail.com');
    $nameko -> postStatus ('Gillian, gilliancarballo, gillian.carballo0319@gmail.com');
?>
