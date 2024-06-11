<?php
declare(strict_types=1);
namespace PHP8_1Examples\ReadOnlyProperty;

class Address
{
  public function __construct(private string $street, private string $city, private string $state, private string $postalCode, private string $country)
  {
    $this->street = $street;
    $this->city  = $city;
    $this->state = $state;
    $this->postalCode = $postalCode;
    $this->country = $country;
  }
  public function getStreet():string
  {
    return $this->street;
  }
  public function getCity():string
  {
    return $this->city;
  }
  public function getState():string
  {
    return $this->state;
  }
  public function getPostalCode():string
  {
    return $this->postalCode;
  }
  public function getCountry():string
  {
    return $this->country;
  }
}
