<?php


class MainController extends Controller
{

    public function index()
    {
        $randPoke = Pokemon::getRandomPokemon();
        $poke = new Pokemon($randPoke['id'], $randPoke['name'], $randPoke['isCaptured']);

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (isset($_POST['capture'])) {
                Pokemon::capture($_POST['capture']);
            }
        } 
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (isset($_POST['liberer'])) {
                Pokemon::liberer($_POST['liberer']);
            }
        }
        
        require_once("../views/mainView.php");
    }
}