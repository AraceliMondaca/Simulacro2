?php 
class Cliente{
private $tipodocumento;
private $nrodocumento;
private $nombre;
private $apellido;
private $telefono;

    public function __construct($tipodocumento,$nrodocumento,$nombre,$apellido, $telefono){

        $this-> tipodocumento=$tipodocumento;
        
        $this-> nrodocumento=$nrodocumento;
        
        $this-> nombre=$nombre;
        
        $this-> apellido=$apellido;
        
        $this-> telefono=$telefono;
        
        }

    public function getTipodocumento() {
        return $this->tipodocumento;
    }
    public function setTipodocumento($tipodocumento){
        $this->tipodocumento = $tipodocumento;

    }

/**
 * Get the value of nrodocumento
 */ 
public function getNrodocumento()
{
return $this->nrodocumento;
}

/**
 * Set the value of nrodocumento
 *
 * @return  self
 */ 
public function setNrodocumento($nrodocumento)
{
$this->nrodocumento = $nrodocumento;

return $this;
}

/**
 * Get the value of nombre
 */ 
public function getNombre()
{
return $this->nombre;
}

/**
 * Set the value of nombre
 *
 * @return  self
 */ 
public function setNombre($nombre)
{
$this->nombre = $nombre;

return $this;
}


public function getApellido(){
return $this->apellido;
}

public function setApellido($apellido)
{
$this->apellido = $apellido;
}

 
public function getTelefono(){
return $this->telefono;
}

public function setTelefono($telefono){
$this->telefono = $telefono;

}
public function __toString(){

    $info= "\n".
    "Tipo de Documento: " .$this->getTipodocumento() ."\n" .
    "Numero de Documento: " .$this->getNrodocumento() ."\n".
    "Nombre :" .$this->getNombre() . "\n".
    "Apellido :" .$this->getApellido() ."\n".
    "telefono ." .$this->getTelefono();
    return $info;
}
}
?>
