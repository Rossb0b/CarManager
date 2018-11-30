<?php 
/**
 * Class representing a Motorbike
 */
class Motorbike extends Vehicle 
{
  /**
   * Motorbike valid brands
   */
  const BRANDS = ['honda', 'bmw', 'suzuki', 'yamaha', 'kawazaki'];
  /**
   * Motorbike valid number of places
   */
  const PLACES = [2, 3];
  /**
   * Motorbike valid number of wheels
   */
  const WHEELS = [2, 3];

  /**
   * Check the compatibily of the motorbike
   * @return void
   */
  public function checkCompatibility()
  {
    if(!in_array($this->getWheel(), self::WHEELS)) 
    {
      throw new Exception('Une moto ne peut avoir '.$this->getWheel().' roue(s)');
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
      throw new Exception('Une moto ne peut avoir '.$this->getPlace().' place(s)');
    }

    return true;
  }
}
