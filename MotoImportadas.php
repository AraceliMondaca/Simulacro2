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
        $venta= $precioB + $this->impuestoImportacion;
        if ($precioB < 0) {
            $venta=-1; 
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
