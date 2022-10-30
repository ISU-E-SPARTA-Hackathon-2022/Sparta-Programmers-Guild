<?php

class BarangayData
{
  protected $con = null;
  protected $table = 'barangay';

  public function __construct(Connection $con)
  {
    if(!isset($con->con)) return null;
    $this->con = $con;
  }

  public function GetBarangaysName()
  {
    $sql = "SELECT name FROM $this->table";
    $stmt = $this->con->con->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function SetBarangayName($name, $household_count, $population_male, $population_female)
  {
    // set the name to all lowercase then uppercase the first letter
    $name = ucfirst(strtolower($name));

    $sql = "INSERT 
            INTO barangay(name,household,population_male,population_female) 
            VALUES('$name',$household_count,$population_male,$population_female)";

    // paano mag insert ng data sa database?
  }

}