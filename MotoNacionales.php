<?php 
class MotoNacionales extends Moto{
    private $descuento;

    public function __construct($codigo,$costo,$anioFab,$descripcion,$incrementoAnual,$activa,$descuento){
        parent::__construct($codigo,$costo,$anioFab,$descripcion,$incrementoAnual,$activa);
     $this->descuento=$descuento ?? 15 ;
    }
    public function getDescuento(){
        return $this->descuento;
    }
    public function setDescuento($descuento){
        $this->descuento = $descuento;
    }

    public function darPrecioVenta(){
        $Preciobase=parent::darPrecioVenta();
        $venta= -1; 
        if ($Preciobase > 0) {
            $venta= $Preciobase - (( $this->getDescuento()* $Preciobase)/100);
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
