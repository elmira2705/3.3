<?php

    namespace Tv;

    class Tv extends \Product implements interfaceTv
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