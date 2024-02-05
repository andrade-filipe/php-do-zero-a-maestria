<?php
    include_once("db.php");
    include_once("dao_impl/CarDAO.php");

    $carDao = new CarDAO($connection);

    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["color"];

    $newCar = new Car();

    $newCar -> setBrand($brand);
    $newCar -> setKm($km);
    $newCar -> setColor($color);

    $carDao -> create($newCar);

    header("Location: index.php");
?>