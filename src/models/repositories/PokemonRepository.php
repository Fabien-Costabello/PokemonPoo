<?php

class PokemonRepository extends Db {

    private static function request(string $request){
        $result = self::getInstance()->query($request); // on recupere l'instance de la bdd, qui execute la requette.
        self::disconnect(); // je deco la bdd.
        return $result; // je retourne le resultat de ma requette
    }


    static public function getRandomPokemon(){

        return self::request("SELECT * FROM pokemon WHERE  id =".rand(1,151)." AND isCaptured = 0")->fetch(PDO::FETCH_ASSOC);
    }

    static public function getCapturedPokemon(){

        return self::request("SELECT * FROM pokemon WHERE  isCaptured = 1")->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function getPokemonById($id){

        return self::request("SELECT * FROM pokemon WHERE  isCaptured = 1 AND id =$id " )->fetch(PDO::FETCH_ASSOC);
    }
    

    static public function capture($id){
        return self::request("UPDATE  pokemon SET isCaptured = 1 WHERE id = $id");
    }

    static public function liberer($id){
        return self::request("UPDATE  pokemon SET isCaptured = 0 WHERE id = $id");
    }
}