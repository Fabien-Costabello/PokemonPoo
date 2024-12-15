<?php

include_once("../core/Router.php");
include_once("../src/controllers/Controller.php");
include_once("../src/controllers/MainController.php");
include_once('../src/controllers/detailController.php');
include_once("../src/models/Db.php");
include_once("../src/models/repositories/PokemonRepository.php");
include_once("../src/models/Pokemon.php");


try {
    $router = new Router();
    $router->start();
} catch (PDOException $err) {
    echo($e->getMessage());
}





