<?php

    namespace Car;

    class Car extends \Product implements interfaceCar
    {
        public $color;
        public $engineVol;
        public $count;

        function getSmth()
        {
            if (rand(0, 1) == 0) {
                return $this->delivery = 200;
            }
            return $this->delivery;
        }

        public function __construct($nameProduct, $price, $color, $engineVol, $count)
        {
            parent::__construct($nameProduct, $price);
            $this->color = $color;
            $this->engineVol = $engineVol;
            $this->count = $count;
        }
    }

?>
