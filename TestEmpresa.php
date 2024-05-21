<?php 
include_once 'Cliente.php';
include_once 'Moto.php';
include_once 'MotoNacionales.php';
include_once 'MotoImportadas.php';
include_once 'Venta.php';
include_once 'Empresa.php';

$objCliente1 = new Cliente("dni", 43491807, "Tom", "Herry", 299476543);
$objCliente2 = new Cliente("pasaporte", 3456789432, "ester", "yes", 299114532);
$colClientes = [$objCliente1, $objCliente2];

$objMoto1= new MotoNacionales(11, 2230000, 2022, "benelli imperiali 400", 85, true, 10);
$objMoto2 = new MotoNacionales(12, 584000, 2021, "zanella Zr 150 Ohc", 70, true, 10);
$objMoto3 = new MotoNacionales(13, 999900, 2023, "zanella patagonian eagle 250", 55, false, 0);
$objMoto4 = new MotoImportadas(14, 12499900, 2020, "Pitbike Enduro Motocross Apollo Aiii 190cc Plr", 100, true, 'Francia', 6244400);

$colMotos = [$objMoto1, $objMoto2, $objMoto3, $objMoto4];

$objVenta1 = new Venta(233, "10-01-2024", $objCliente1, $objMoto2, 150000);
$objVenta2 = new Venta(145, "08-04-2024", $objCliente2, $objMoto1, 250000);
$colVentas = [$objVenta1, $objVenta2];

$Empresa = new Empresa("Alta Gama", "Av Argentina 123", $colClientes, $colMotos, $colVentas);

$colCodigosMoto = [11, 12, 13, 14];
$resultado1 = $Empresa->registrarVenta($colCodigosMoto, $objCliente2);
echo "Resultado : " . $resultado1 . "\n";
$colCodigosMoto2 = [13, 14];
$resultado2 = $Empresa->registrarVenta($colCodigosMoto2, $objCliente2);
echo "Resultado  " . $resultado2 . "\n";
$colCodigosMoto3 = [14, 2];
$resultado3 = $Empresa->registrarVenta($colCodigosMoto3, $objCliente2);
echo "Resultado : " . $resultado3 . "\n";

$ventasImportadas = $Empresa->informarVentasImportadas();
echo "Ventas Importadas: \n";
foreach ($ventasImportadas as $venta) {
    echo $venta->toString() . "\n";
}

$sumaVentasNacionales = $Empresa->informarSumaVentasNacionales();
echo "Suma Ventas Nacionales: " . $sumaVentasNacionales . "\n";

echo "Empresa: \n". $Empresa;
