<?php 

/*Crear una clase donde se creen objetos metodos atributos como funcionan
Los modificadores de acseso */

class Computador{

    public $marca;
    private $modelo;
    protected $color;

    public function __construct($marca,$modelo,$color)
    {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->color=$color;
        
    }

    //metodo publico que cambia el color del computador

    public function CambiarColor($color_nuevo){
        $this->color=$color_nuevo;
        echo("El nuevo color del pc es ".$this->color . "<br>");
    }

    //ahora un metodo private que me va A mostrar el modelo
    public function GetModelo(){
        return $this->modelo;
    }

    //Ahora un metodo protegido que me a imorimir  la marca

    protected function MostrarMarca(){
        echo("La marca del pc es ". $this->marca. "<br>");
    }

    //Crear una istancia de la clase computador

   



}
$micompu = new Computador("hp","pavilion","negro");

echo("Modelo :".$micompu->GetModelo()."<br>");
echo($micompu->CambiarColor("Gris"));


?>