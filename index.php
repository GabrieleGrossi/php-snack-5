<!--
    Crea una classe Indumento che ha un materiale come proprieta' da popolare nel costruttore.

    Crea due sottoclassi Scarpa e Cappello, che avranno una proprieta' speciale ognuna 
    oltre a richiamare il costruttore del parent. 

    Istanziare un indumento, una scarpa e un cappello con il var_dump e verificare 
    su schermo le differenze. 
-->

<?php
     class Wearable{
        public $material;

        function __construct(String $material){
            $this->material = $material;
        }
    }

    class Shoe extends Wearable{
        public $heel;

        function __construct(String $material, String $heel){
            parent::__construct($material);
            $this->heel = $heel;
        }
    }


    class Hat  extends Wearable{
        public $brim;

        function __construct(String $material, String $brim){
            parent::__construct($material);
            $this->brim = $brim;
        }
    }


    var_dump( new Wearable('textile'), new Shoe('ecoskin', 'metal'), new Hat('cotton', 'baseball'));


?>