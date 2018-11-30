<?php 
/**
 * Class representing a Vehicle manager
 */
class VehicleManager extends Manager
{
  /**
   * Add Vehicle to database
   * @param Vehicle $vehicle
   * @return void
   */
  public function addVehicle(Vehicle $vehicle)
  {
    $req = $this->database->prepare('INSERT INTO vehicles (type, brand, color, wheel, place) VALUES(:type, :brand, :color, :wheel, :place)');
    $req->bindValue(':type', $vehicle->getType(), PDO::PARAM_STR);
    $req->bindValue(':brand', $vehicle->getBrand(), PDO::PARAM_STR);
    $req->bindValue(':color', $vehicle->getColor(), PDO::PARAM_STR);
    $req->bindValue(':wheel', $vehicle->getWheel(), PDO::PARAM_INT);
    $req->bindValue(':place', $vehicle->getPlace(), PDO::PARAM_INT);
    $req->execute();
  }

  /**
   * Update the vehicle color. Others properties cannot be updated
   * @param Vehicle $vehicle
   * @return void
   */
  public function updateVehicle(Vehicle $vehicle)
  {
    $req = $this->database->prepare('UPDATE vehicles SET color = :color WHERE id = ' . $vehicle->getId());
    $req->bindValue(':color', $vehicle->getColor(), PDO::PARAM_STR);
    $req->execute();
  }
  
  /**
   * Delete a vehicle
   * @param Vehicle $vehicle
   * @return void
   */
  public function deleteVehicle(Vehicle $vehicle)
  {
    $req = $this->database->query('DELETE FROM vehicles WHERE id = ' . $vehicle->getId());
  }
  
  /**
   * Get a vehicle from his id
   * @param integer $id
   * @return Vehicle
   */
  public function getVehicle(int $id)
  {
    $req = $this->database->query('SELECT * FROM vehicles WHERE id = '. $id);
    $rep = $req->fetch();
    $class = ucfirst($rep['type']);
    return new $class($rep);
  }

  /**
   * Get each vehicle
   * @return array
   */
  public function getVehicles()
  {
    $vehicles = [];
    $req = $this->database->query('SELECT * FROM vehicles ORDER BY type');
    
    while ($data = $req->fetch())
    {
      $class = ucfirst($data['type']);
      $vehicles[] = new $class($data);
    }

    return $vehicles;
  }
}
