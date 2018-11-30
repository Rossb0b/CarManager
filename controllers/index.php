<?php
$vehicle_manager = new VehicleManager();

if(isset($_POST['add-vehicle']))
{
  $data_vehicle = array(
    'type'  => $_POST['vehicle-type'],
    'brand' => $_POST['vehicle-brand'],
    'color' => $_POST['vehicle-color'],
    'place' => $_POST['vehicle-place'],
    'wheel' => $_POST['vehicle-wheel']
  );
  if($data_vehicle['type'] === 'car')
  {
    $vehicle = new Car($data_vehicle);
  }
  elseif($data_vehicle['type'] === 'motorbike')
  {
    $vehicle = new Motorbike($data_vehicle);
  }
  elseif($data_vehicle['type'] === 'truck')
  {
    $vehicle = new Truck($data_vehicle);
  }
 
  if($vehicle->checkCompatibility())
  {
    $vehicle_manager->addVehicle($vehicle);
  }
  $_POST = [];
}

if(isset($_POST['delete-vehicle']))
{
  $vehicle = $vehicle_manager->getVehicle($_POST['id']);
  $vehicle_manager->deleteVehicle($vehicle);
  $_POST = [];
}

if(isset($_POST['edit-vehicle']))
{
  $vehicle = $vehicle_manager->getVehicle($_POST['id']);
  $vehicle->setColor($_POST['vehicle-color']);
  $vehicle_manager->updateVehicle($vehicle);
  $_POST = [];
}

$vehicles = $vehicle_manager->getVehicles();

require './views/template/header.php';
require './views/home.php';
require './views/template/footer.php';
