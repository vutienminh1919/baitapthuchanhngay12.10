<?php
include "../models/Employee.php";
class EmployeeManager
{
    private $employees;
    private $path = __DIR__ . "/employee.json";

    public function __construct()
    {
        $this->employees = $this->load();
    }

    public function getAllEmployee()
    {
        return $this->employees;
    }

    public function storeEmployee($employee)
    {
        array_push($this->employees,$employee);
    }

    /**
     * @return array
     */
    public function getEmployees(): array
    {
        return $this->employees;
    }

    public function save()
    {
        $dataJson = json_encode($this->employees);
        file_put_contents($this->path,$dataJson);
    }

    public function load()
    {
        $dataJson = file_get_contents($this->path);
        $data =  json_decode($dataJson, true);
        return $this->convertToObject($data);
    }

    public function convertToObject($data)
    {
        die();
        $employees = [];
        foreach ($data as $e){
            $employees = new Employee($e["fristname"],$e["lastname"],$e["birthdate"],$e["address"],e["jobTitle"]);
        }
    }

    public function showLog($data)
    {

    }

}