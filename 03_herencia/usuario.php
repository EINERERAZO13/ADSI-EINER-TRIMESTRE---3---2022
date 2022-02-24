<?php 
    require_once("cliente.php");

    class usuario extends cliente {
        
        protected $email;
        protected $password;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito,$vremail,$vrpassword)
        {   //parent permite llevar los datos al construtor de Persona
            parent::__construct($vrcedula, $vrnombre, $vredad);    
            $this->email = $vremail;
            $this->password = $vrpassword;
        }

        public function getemail(){
            return $this->credito;
        }
        public function getpassword(){
            return $this->credito;
        }




    }//end clase

?>