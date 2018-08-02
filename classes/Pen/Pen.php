<?php

    namespace Pen;

    class Pen extends \Product implements interfacePen
    {
        public $color;

        function getSmth()
        {
            if(rand(0, 1) == 0) {
                return $this->delivery = 200;
        }
            return $this->delivery;
        }

        public function __construct($nameProduct, $price, $color)
        {
            parent::__construct($nameProduct, $price);
            $this->color = $color;
        }
    }

?>