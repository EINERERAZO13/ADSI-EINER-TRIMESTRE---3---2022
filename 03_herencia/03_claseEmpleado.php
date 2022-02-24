<?php 
    require_once("01_clasePersona.php");

    class empleado extends cliente {
        
        private $puesto;

        public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito,$vrpuesto)
        {   //paret:: llevo los datos al constructor de la clase persona
            parent::__construct($vrcedula, $vrnombre, $vredad,$vrcredito);    
            $this->puesto = $vrpuesto;

        }

       




    }//end clase

?>