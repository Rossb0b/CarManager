<?php
/**
 * Class representing a Car
 */
class Car extends Vehicle 
{
  /**
   * Car valid brands
   */
  const BRANDS = ['peugeot', 'citroen', 'renaut', 'audi', 'bmw'];
  /**
   * Car valid number of places
   */
  const PLACES = [2, 4, 5];

  /**
   * Check the compatibily of the car 
   * @return void
   */
  public function checkCompatibility()
  {
    if($this->getWheel() != 4) 
    {
      throw new Exception('Une voiture ne peut avoir que 4 roues');
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
      throw new Exception('Cette voiture ne peut avoir que 2, 4 ou 5 place');
    }

    return true;
  }
}
