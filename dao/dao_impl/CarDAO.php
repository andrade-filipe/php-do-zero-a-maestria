<?php

    include_once("model/Car.php");

    class CarDAO implements CarDAOInterface{
        private $connection;

        public function __construct(PDO $connection){
            $this -> connection = $connection;
        }

        public function findAll(){
            $cars = [];
            $stmt = $this -> connection -> query("SELECT * FROM cars");

            $data = $stmt -> fetchAll();

            foreach($data as $car){
                $car = new Car();
                $car -> setId($car["id"]);
                $car -> setBrand($car["brand"]);
                $car -> setKm($car["km"]);
                $car -> setColor($car["color"]);

                $cars[] = $car;
            }

            return $cars;
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