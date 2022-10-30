<?php

class DemographyData
{
  protected $con = null;
  protected $table = 'demography';

  public function __construct(Connection $con)
  {
    if(!isset($con->con)) return null;
    $this->con = $con;
  }

  public function __destruct()
  {
    $this->con = null;
  }

  private function __GetDemographicData($sub_cat, $year)
  {
    $main_table;
    switch ($sub_cat)
    {
      case "population":
        $main_table = $this->table."_population";
        break;
      case "HaN":
        $main_table = $this->table."_health_nutrition";
        break;
      case "housing":
        $main_table = $this->table."_health_nutrition";
        break;
      case "WaS":
        $main_table = $this->table."_health_nutrition";
        break;
      case "BS":
        $main_table = $this->table."_health_nutrition";
        break;
      case "IaL":
        $main_table = $this->table."_health_nutrition";
        break;
      case "PaO":
        $main_table = $this->table."_health_nutrition";
        break;
    }

    $sql = "SELECT
            $main_table.*,
            barangay.name, barangay.household,
            barangay.population_male, barangay.population_female
            FROM $main_table
            LEFT JOIN barangay
            ON $main_table.barangay_id = barangay.id
            WHERE $main_table.year = $year";
    $stmt = $this->con->con->prepare($sql);
    $stmt->bindParam(':year', $year, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function GetPopulationDemographicData($year)
  {
    // this will only get the data under the population sub-category
    $subcat = "population";
    return $this->__GetDemographicData($subcat, $year);
  }

  public function GetHealthAndNutritionDemographicData($year)
  {
    // this will only get the data under the health and nutrition sub-category
    $subcat = "HaN";
    return $this->__GetDemographicData($subcat, $year);
  }

  public function GetHousingDemographicData($year)
  {
    // this will only get the data under the Housing sub-category
    $subcat = "housing";
    return $this->__GetDemographicData($subcat, $year);
  }

  public function GetWaterAndSanitationDemographicData($year)
  {
    // this will only get the data under the Water And Sanitation sub-category
    $subcat = "WaS";
    return $this->__GetDemographicData($subcat, $year);
  }

  public function GetBasicEducationDemographicData($year)
  {
    // this will only get the data under the Basic Education sub-category
    $subcat = "BS";
    return $this->__GetDemographicData($subcat, $year);
  }

  public function GetIncomeAndLivelihoodDemographicData($year)
  {
    // this will only get the data under the Income And Livelihood sub-category
    $subcat = "IaL";
    return $this->__GetDemographicData($subcat, $year);
  }

  public function GetPeaceAndOrderDemographicData($year)
  {
    // this will only get the data under the Peace And Order sub-category
    $subcat = "PaO";
    return $this->__GetDemographicData($subcat, $year);
  }

  public function SetPopulationDemographicData()
  {
    // this will only set the data under the population sub-category

    $sql = 
  }

  
}