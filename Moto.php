<?php 
class Moto{
    private $codigo;
    private $costo;
    private $anioFab;
    private $descripcion;
    private $incrementoAnual;
    private $activa;

public function __construct($codigo,$costo,$anioFab,$descripcion,$incrementoAnual,$activa){
$this-> codigo=$codigo;
$this->costo=$costo;
$this->anioFab=$anioFab;
$this->descripcion=$descripcion;
$this->incrementoAnual=$incrementoAnual;
$this->activa = $activa;
}

public function getCodigo(){
    return $this->codigo;
}
public function getCosto(){
    return $this->costo;
}
public function getAnioFab(){
    return $this->anioFab;
}
public function getDescripcion(){
    return $this->descripcion;
}

public function getIncrementoAnual(){
    return $this->incrementoAnual;
}
public function getActiva(){
    return $this->activa;
}
public function setCodigo($codigo){
    $this->codigo=$codigo;
}
public function setCosto($costo){
    $this->costo=$costo;
}
public function setAnioFab($anioFab){
    $this->anioFab=$anioFab;
}
public function setDescripcion($descripcion){
    $this->descripcion=$descripcion;
}

public function setIncrementoAnual($incrementoAnual){
    $this->incrementoAnual=$incrementoAnual;
}
public function setActiva($activa){
    $this->activa=$activa;
}


public function darPrecioVenta(){
    $disponible=$this->getActiva();
    $compra=$this->getCosto();
    $anio = date("Y") - $this->getAnioFab();
    $por_inc_anual=$this->getIncrementoAnual();
    if($disponible == false){
    $venta=0;
    }else{
    $venta= $compra + $compra * ($anio * $por_inc_anual);
} 
return $venta;
}


public function __toString(){
    $moto="   INFORMACIÓN DE LA MOTO   \n". 
    "Codigo: ".$this->getCodigo()."\n". 
    "Costo: ".$this->getCosto()."\n". 
    "Año de Fabricación: ".$this->getAnioFab()."\n". 
    "Descripción: ".$this->getDescripcion()."\n".  
    "Incremento Anual: ".$this->getIncrementoAnual()."\n". 
    "Activa: ".$this->getActiva();
return $moto;
}
}
?>
