<?php
    class User{

        public $name;
        public $username;
        public $email;
        

        function addFriend ($name){
            $this->name =$name;
                echo "{$this->name} Added a Friend";
        }

        function postStatus ($name){
            $this->name =$name;
                echo "{$this->name}Posted a Status";
        }


       
    }
    $nameko = new User();
    $nameko -> addFriend('Gillian');
    $nameko -> postStatus ('Gillian');
?>