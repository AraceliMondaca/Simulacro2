<?php
class MotoImportadas extends Moto {
    private $impuestoImportacion;
    private $paisOrigen;
    public function __construct($codigo,$costo,$anioFab,$descripcion,$incrementoAnual,$activa,$impuestoImportacion,$paisOrigen){
        parent::__construct($codigo,$costo,$anioFab,$descripcion,$incrementoAnual,$activa);
        $this->impuestoImportacion=$impuestoImportacion;
        $this->paisOrigen=$paisOrigen;
    } 

    public function getImpuestoImportacion(){
        return $this->impuestoImportacion;
    }
    public function setImpuestoImportacion($impuestoImportacion){
        $this->impuestoImportacion = $impuestoImportacion;
    }
    public function getPaisOrigen(){
        return $this->paisOrigen;
    }
    public function setPaisOrigen($paisOrigen){
        $this->paisOrigen = $paisOrigen;
    }

    public function darPrecioVenta(){
        $precioB = parent::darPrecioVenta();
        $venta=0; 
        if ($precioB > 0) {
            $venta = $precioB + $this-> getImpuestoImportacion();
        }
        return $venta;
    }
    

    public function __toString(){
        $importada="Moto importada: \n".
        "Impuesto de importacion: ".$this->impuestoImportacion."\n".
        "Pais de origen: ".$this->paisOrigen."\n".
        parent::__toString();
        return $importada;
        
       }

}

?>
