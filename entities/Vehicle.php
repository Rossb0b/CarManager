<?php
/**
 * Class representing a Vehicle
 */
abstract class Vehicle extends Entity
{
  /**
   * @var integer $id
   * @var string $type 
   * @var string $brand 
   * @var string $color 
   * @var integer $place
   * @var integer $wheel
   */
  protected $id,
            $type,
            $brand,
            $color,
            $place,
            $wheel;
 
  /**
   * Vehicle valid colors 
   */
  const COLORS = ['black', 'white', 'yellow', 'red', 'blue'];

  /**
   * @param array $data
   */
  public function __construct(array $data = [])
  {
    $this->hydrate($data);
  }
  
  /**
   * Get the value of id
   */ 
  public function getId() { return $this->id; }

  /**
   * Set the value of id
   * @return self
   */ 
  public function setId($id) { $this->id = $id; return $this; }

  /**
   * Get the value of type
   */ 
  public function getType() { return $this->type; }

  /**
   * Set the value of type
   * @return self
   */ 
  public function setType($type) { $this->type = $type; return $this; }

  /**
   * Get the value of brand
   */ 
  public function getBrand() { return $this->brand; }

  /**
   * Set the value of brand
   * @return self
   */ 
  public function setBrand($brand) { $this->brand = $brand; return $this;  }

  /**
   * Get the value of color
   */ 
  public function getColor() { return $this->color; }

  /**
   * Set the value of color
   * @return self
   */ 
  public function setColor($color) { $this->color = $color; return $this; }

  /**
   * Get the value of place
   */ 
  public function getPlace() { return $this->place; }

  /**
   * Set the value of place
   * @return self
   */ 
  public function setPlace($place) { $this->place = $place; return $this; }

  /**
   * Get the value of wheel
   */ 
  public function getWheel() { return $this->wheel; }

  /**
   * Set the value of wheel
   * @return self
   */ 
  public function setWheel($wheel) { $this->wheel = $wheel; return $this; }

  /**
   * Check compatibilty of the vehicle
   */
  abstract public function checkCompatibility();

}
