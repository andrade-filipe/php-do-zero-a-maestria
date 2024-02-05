<?php
    class Car {

        private $id;
        private $brand;
        private $km;
        private $color;

        function __construct($id, $brand, $km, $color){
            $this -> $id = $id;
            $this -> $brand = $brand;
            $this -> $km = $km;
            $this -> $color = $color;
        }

        public function getId(){
            return $this -> $id;
        }

        public function setId($id){
            $this -> $id = $id;
        }
        public function getbrand(){
            return $this -> $brand;
        }

        public function setBrand($brand){
            $this -> $brand = $brand;
        }

        public function getKm(){
            return $this -> $km;
        }

        public function setkm($km){
            $this -> $km = $km;
        }

        public function getColor(){
            return $this -> $color;
        }

        public function setcolor($color){
            $this -> $color = $color;
        }
    }

    interface CarDAO{

        public function create(Car $car);

        public function findAll();
    }
?>