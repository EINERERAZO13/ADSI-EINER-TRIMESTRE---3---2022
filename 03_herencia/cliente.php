<?php 

    class cliente{

        private $cedula;
        public $nombre;
        protected $salario;

        //metodo constructor  int solo indica recibir enteros
        //string recibir cadenas de caracteres
        function __construct(int $vrcedula, string $vrnombre, $vrsalario )
        {
            $this->cedula = $vrcedula;
            $this->nombre = $vrnombre;
            $this->salario = $vrsalario;
        }

        public function getCedula(){
            return $this->cedula;
        }

        public function setCedula($vrsalario){
            $this->cedula = $vrsalario;
        }



    }//end clase

?>