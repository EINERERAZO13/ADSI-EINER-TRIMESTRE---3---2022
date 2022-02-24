<?php 
    require_once("usuario.php");

    class cuenta_bancaria extends cliente {
        
        private $codigo;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito,$vrpuesto)
        {   //paret:: llevo los datos al constructor de la clase persona
            parent::__construct($vrcedula, $vrnombre, $vredad,$vrcredito);    
            $this->puesto = $vrpuesto;

        }

       




    }//end clase

?>