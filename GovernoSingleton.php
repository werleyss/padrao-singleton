<?php 
class GovernoSingleton
{
    public $nomeDoPais = "Brasil";
    public $proximaEleicao = "2022";

    public function realizarEleicao(){
        echo "Realizando...<br>";
    }

    private static $instancia = null;
    private function __construct(){}
    private function __clone(){}
    public static function pegarIntancia(){
        if(self::$instancia == null){
            self::$instancia = new GovernoSingleton();
        }
        return self::$instancia;
    }


}