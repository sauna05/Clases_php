<?php
/*crear un ejemplo donde se encapsule se creen objetos metodos */

class Auto{
    public $marca;
    private $modelo;
    protected $valor;

    public function __construct($marca,$modelo,$valor)
    {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->valor=$valor;

        
    }
    //crear metodos publicos para obtener el modelo

    public function getModelo(){
        return $this->modelo;
    }

    //metodo privado para imprimir el valor

    private function ImprimirValor(){
        echo("El auto tiene un valor de ".$this->valor. "<br>");
    }

    //metodo protegido para cambiar el valor del auto

    protected function CambiarValor($nuevo_valor){
        $this->valor=$nuevo_valor;
        echo("EL nuevo valor del auto es :".$this->valor. "<br>");
        
    }

    //crear un objeto de la clase Autos

    


}
$Auto1 = new Auto("Toyota","carolla",12000000);

//acesso al atributo publico
echo("Marca: ".$Auto1->marca. "<br>");

//acesso de metodo publico 
echo("Modelo: ". $Auto1->getModelo(). "<br>" );
//me gener un error porque elmetodo esta privado 
//echo("". $Auto1->ImprimirValor() . "<br>");

//Si llamo el metodo Cambiar valor me jenerara un error porque el metodo  esta protegido
//echo($Auto1->CambiarValor(15000000));



?>