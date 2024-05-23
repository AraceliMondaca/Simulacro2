<?php 

class Venta{
private $numero;
private $fecha;
private $objCliente;
private $objColMoto;
private $precioFinal;
function __construct($numero,$fecha,$objCliente,$objColMoto,$precioFinal){
$this->numero=$numero;
$this->fecha=$fecha;
$this->objCliente=$objCliente=array($objCliente);
$this->objColMoto=$objColMoto=array($objColMoto);
$this->precioFinal=$precioFinal;
}
public function getNumero(){
    return $this->numero;
}
public function getFecha(){
    return $this->fecha;
}
public function getObjCliente(){
    return $this->objCliente;
}
public function getObjColMoto(){
    return $this->objColMoto;
}
public function getPrecioFinal(){
    return $this->precioFinal;
}
public function setNumero($numero){
    $this->numero=$numero;
}

public function setFecha($fecha){
    $this->fecha=$fecha;
}
public function setObjCliente($objCliente){
    $this->objCliente=$objCliente;
}
public function setObjColMoto($objColMoto){
    $this->objColMoto=$objColMoto;
}
public function setPrecioFinal($precioFinal){
    $this->precioFinal=$precioFinal;
}


public function incorporarMoto($objColMoto){
$precioVenta= $objColMoto->darPrecioVenta();
$ColeccionMotos= $this->getObjColMoto();
    if ($precioVenta>0) {
       array_push($ColeccionMotos,$objColMoto);
$this->setObjColMoto($ColeccionMotos);
$this->setPrecioFinal($this->getPrecioFinal()+$precioVenta);
    }
    
}

public function retornarTotalVentaNacional() {
    $total = 0;
    foreach ($this->objColMoto as $moto) {
        if ($moto instanceof MotoNacionales) {
            if($moto->darPrecioVenta()>0){
                $total += $moto->darPrecioVenta();
        }
        }
}
    return $total;
}
public function retornarMotosImportadas(){
    $importadas = [];
    foreach ($this->objColMoto as $moto){
        if ($moto instanceof MotoImportadas){
            $importadas[] = $moto;
        }
}
    return $importadas;
}

private function arregloString($array) {
    $cadena = '';
    if (is_array($array)) {
        foreach ($array as $elemento) {
            if (is_array($elemento)) {
                $cadena .= $this->arregloString($elemento);
            } else {
                $cadena .= $elemento . "\n";
            }
        }
    }
    return $cadena; 
}
public function __toString(){
    $stringCliente=$this->arregloString($this->getObjCliente());
    $stringMoto=$this->arregloString($this->getObjColMoto());
    $venta="   INFORMACIÓN DE LA VENTA   \n". 
    "Numero: ".$this->getNumero()."\n". 
    "Fecha: ".$this->getFecha()."\n". 
    "\n".$stringCliente."\n". 
    "\n".$stringMoto."\n". 
    "Precio Final: ".$this->getPrecioFinal();
    return $venta;
}


}
?>
