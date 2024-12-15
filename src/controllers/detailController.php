<?php


class detailController extends Controller
{

    public function index()
    {

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (isset($_POST['detail'])) {
                $pokeById = Pokemon::getPokemonById($_POST['detail']);
                $poke = new Pokemon($pokeById['id'], $pokeById['name'], $pokeById['isCaptured']);
                require_once("../views/pokemonView.php");
            }
        }
    }
}