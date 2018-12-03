<?php 
$vehicle_manager = new VehicleManager();

if(!isset($_GET['id']) or !ctype_digit($_GET['id']) or !$vehicle_manager->vehicleExist($_GET['id']))
{
  header('Location: ./');
}

if(isset($_POST['edit-vehicle']))
{
  $vehicle = $vehicle_manager->getVehicle($_POST['id']);
  $vehicle->setColor($_POST['vehicle-color']);
  $vehicle_manager->updateVehicle($vehicle);
  header('Location: ./?page=vehicle&id='.$_POST['id']);
}

$vehicle = $vehicle_manager->getVehicle($_GET['id']);

require './views/template/header.php';
require './views/vehicle_detail.php';
require './views/template/footer.php';
