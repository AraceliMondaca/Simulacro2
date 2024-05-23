<?php 
class Empresa{
private $denominacion;
private $direccion;
private $colCliente;
private $colMoto;
private $colVenta;
public function __construct($denominacion,$direccion,$colCliente, $colMoto, $colVenta){
 $this->denominacion = $denominacion; 
 $this->direccion=$direccion;
 $this->colCliente = $colCliente=array($colCliente);
 $this->colMoto = $colMoto= array($colMoto);
 $this->colVenta =[];
}
public function getDenominacion(){
return $this->denominacion;
}
public function getdireccion(){
    return $this->direccion;
}
public function getColCliente(){
    return $this->colCliente;
}
public function getColMoto(){
    return $this->colMoto;
}
public function getColVenta(){
    return $this->colVenta;
}
public function setDenominacion($denominacion){
    $this->denominacion = $denominacion;
}
public function setDireccion($direccion){
    $this->direccion = $direccion;
}
public function setColCliente($colCliente){
    $this->colCliente = $colCliente;
}
public function setColMoto($colMoto){
    $this->colMoto = $colMoto;
}
public function setColVenta($colVenta){
    $this->colVenta = $colVenta;
}


public function retornarMoto($codigoMoto){
 $coleccionMotos=$this->getColMoto();
 $colmoto=null;
 $i=0;
 while($i<count(ColeccionMotos) && $colmoto == null){
   if ($coleccionMotos[$i]=$codigoMoto){
                $colmoto= $coleccionMotos[$i]; 
 }
  $i++;
 }
        return $colmoto;
    }    

    public function registrarVenta($colCodigosMoto, $objCliente) {
        $numV = count($this->getColVenta()) + 1;
        $fec = date("y");
        $ventaN = new Venta($numV, $fec, $objCliente, [], 0);
        $importeFinal = 0;
        $coleccionVentas=$this->getColVenta();
        foreach ($colCodigosMoto as $codigo) {
            $moto = $this->retornarMoto($codigo);
            if ($moto !== null && $moto->getActiva()) {
                $ventaN->incorporarMoto($moto);
            }
        }
      if (count($ventaN->getColMoto()>0){
          array_push(coleccionVentas,$ventaN);
           $this->setColVenta(coleccionVentas);
        }
        return  $ventaN->getPrecioFinal();
    }

  
    public function retornarVentasXCliente($tipo, $numDoc) {
        $ventasCliente = [];
        $ventas=$this->getColVenta();
        foreach ($ventas as $venta) {
            if ($venta->getColCliente()->getTipoDoc() == $tipo && $venta->getColCliente()->getNumDoc() == $numDoc) {
                $ventasCliente[] = $venta;
            }
        }
        return $ventasCliente;
    }


public function informarSumaVentasNacionales() {
    $suma = 0;
    foreach ($this->getColVenta() as $venta) {
        $suma += $venta->retornarTotalVentaNacional();
    }
    return $suma;
}

public function informarVentasImportadas() {
    $ventasImportadas = [];
    foreach ($this->getColVenta() as $venta) {
     $motoImport= $venta->retornarMotosImportadas();
        if (count($motoImport)>0) {
            $ventasImportadas[] = $venta;
        }
    }
    return $motoImport;
}

public function __toString(){
    $datos="   INFORMACIÓN DE EMPRESA   \n". 
    "Denominación: ".$this->getDenominacion()."\n". 
    "Dirección: ".$this->getDireccion()."\n". 
    "\n".$this->getColCliente()."\n". 
    "\n".$this->getColMoto()."\n". 
    "\n".$this->getColVenta();
    return $datos;
}

}
?>
