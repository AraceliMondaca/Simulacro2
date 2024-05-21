<?php 
class MotoNacionales extends Moto{
    private $descuento;

    public function __construct($codigo,$costo,$anioFab,$descripcion,$incrementoAnual,$activa,$descuento){
        parent::__construct($codigo,$costo,$anioFab,$descripcion,$incrementoAnual,$activa);
     $this->descuento=$descuento;
    }
    public function getDescuento(){
        return $this->descuento;
    }
    public function setDescuento($descuento){
        $this->descuento = $descuento;
    }

    public function darPrecioVenta(){
        $Preciobase=parent::darPrecioVenta();
        $venta= $Preciobase * (1 - $this->descuento);
        if ($Preciobase < 0) {
            $venta= -1; 
        }
        return $venta;
    }
       
       
   public function __toString(){
    $nacional="Moto nacional: \n".
    "Descuento: ".$this->getDescuento()."\n". 
    parent::__toString();
    return $nacional;
    
   }

    
   
}
?>
