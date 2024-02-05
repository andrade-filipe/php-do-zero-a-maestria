<?php
    include_once("config.php");
    include_once("dao_impl/CarDAO.php");

    $car = new CarDAO($connection);

    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["color"];

    $newCar = new Car();

    $newCar -> setBrand($brand);
    $newCar -> setKm($km);
    $newCar -> setColor($Color);

    $carDao -> create($newCar);

    header("Location: index.php");
?>