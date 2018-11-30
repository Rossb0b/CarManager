<?php 
/**
 * Class representing a Truck
 */
class Truck extends Vehicle
{
  /**
   * Truck valid brands
   */
  const BRANDS = ['renault', 'volvo', 'daf', 'iveco', 'man'];
  /**
   * Truck valid number of places
   */
  const PLACES = [3, 5];
  /**
   * Truc valid number of wheels
   */
  const WHEELS = [4, 6, 8, 10];

  /**
   * Check the compatibily of the truck
   * @return void
   */
  public function checkCompatibility()
  {
    if(!in_array($this->getWheel(), self::WHEELS)) 
    {
      throw new Exception('Un camion ne peut avoir ce nombre de roues');
    }

    if(!in_array($this->getBrand(), self::BRANDS))
    {
      throw new Exception('Cette marque n\'est pas autorisé');
    }

    if(!in_array($this->getColor(), self::COLORS))
    {
      throw new Exception('Cette couleur n\'existe pas');
    }

    if(!in_array($this->getPlace(), self::PLACES))
    {
      throw new Exception('Un camion ne peut avoir que 3 ou 5 place');
    }

    return true;
  }
}
