<?php 
/**
 * Class representing a Truck
 */
class Truck extends Vehicle
{
  /**
   * Truck valid brands
   */
  const BRANDS = ['renaut', 'volvo', 'daf', 'iveco', 'man'];
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
      throw new Exception('Un camion ne peut avoir '.$this->getWheel().' roue(s)');
    }

    if(!in_array($this->getBrand(), self::BRANDS))
    {
      throw new Exception('Cette marque ('.$this->getBrand().') n\'est pas autorisé');
    }

    if(!in_array($this->getColor(), self::COLORS))
    {
      throw new Exception($this->getColor().' n\'est pas une couleur valide');
    }

    if(!in_array($this->getPlace(), self::PLACES))
    {
      throw new Exception('Un camion ne peut avoir '.$this->getPlace().' place(s)');
    }
  }
}
