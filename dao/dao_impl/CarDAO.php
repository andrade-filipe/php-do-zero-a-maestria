<?php

    include_once("../model/Car.php");

    class CarDAO implements CarDAO{
        private $connection;

        public function __construct(PDO $connection){
            $this -> connection = $connection;
        }

        public function findAll(){

        }

        public function create(Car $car){

            $stmt = $this -> connection -> prepare("INSERT INTO cars (brand,km,color) VALUES (:brand, :km, :color)");

            $stmt -> bindParam(":brand", $car -> getBrand());
            $stmt -> bindParam(":color", $car -> getColor());
            $stmt -> bindParam(":km", $car -> getKm());

            $stmt -> execute();
        }
    }
?>