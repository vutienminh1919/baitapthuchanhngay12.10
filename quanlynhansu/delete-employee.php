<?php
include_once "models/Employee.php";
include_once "services/EmployeeManager.php";

$employeeManager = new EmployeeManager();
$id = $_GET["id"];
$employeeManager->deleteEmployeeById($id);
header("Location:index.php");